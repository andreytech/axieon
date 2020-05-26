<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class BacklinkImportTest extends TestCase
{
    use RefreshDatabase;

    public function mockCSVsLocationPath(): void
    {
//        $this->app->instance(ImportHistoricalBL::class, \Mockery::mock(ImportHistoricalBL::class, function($mock){
//            $mock->shouldReceive('getPath')->andReturn(base_path('tests/Unit/TestFiles/'));
//        }));

//        $mock = \Mockery::mock(ImportHistoricalBL::class)->makePartial();
//        $mock->shouldReceive('getPath')->andReturn(base_path('tests/Unit/TestFiles/'));
//        $this->instance(ImportHistoricalBL::class, $mock);
    }

    public function testBacklinkImport()
    {
        // major, will add 1 BL, will create new page
        $major_bu_domain = $this->createDomain([
            'domain' => 'cnn.com',
            'is_major' => 1,
        ]);

        // Will not add BL
        $major_domain_page = $this->createPage([
            'domain_id' => $major_bu_domain->getKey(),
            'subdomain' => 'www',
            'path' => '/knoxville-tn/flood-insurance',
        ]);

        // local, will add 1 BL, will not create new page
        $local_bu_domain = $this->createDomain([
            'domain' => 'nebraska.tv',
            'is_local' => 1,
            'is_potential_customer' => 1
        ]);
        $local_domain_page = $this->createPage([
            'domain_id' => $local_bu_domain->getKey(),
            'subdomain' => '',
            'path' => '/2012/10/',
        ]);

        //
        $serp_domain = $this->createDomain([
            'domain' => 'johnbaileyco.com',
            'is_from_serp' => 1
        ]);
        $this->createDomain(['is_from_serp' => 1]);
        $this->createDomain(['is_from_serp' => 1]);
        $this->createDomain();
        $this->createDomain();

        $from_serp_page = $this->createPage([
            'domain_id' => $serp_domain->getKey(),
            'is_from_serp' => 1,
            'path' => '/',
            'subdomain' => '',
        ]);
        $from_serp_page2 = $this->createPage([
            'domain_id' => $serp_domain->getKey(),
            'is_from_serp' => 1,
            'path' => '/blog/about/',
            'subdomain' => 'www',
        ]);
        for($i=0;$i<30;$i++) {
            $this->createPage();
        }

//        $this->mockCSVsLocationPath();
        config(['axieon.backlinks_csvs_path' => base_path('tests/Unit/TestFiles/')]);
        Artisan::call('historicalbl:import');

        $this->assertDatabaseHas('pages', [
            'domain_id' => $major_bu_domain->getKey(),
            'path' => '/us/tennessee/john-bailey-co-365876940'
        ]);
        $this->assertDatabaseHas('backlinks', [
            'page_to' => $from_serp_page->getKey(),
            'referring_page_title' => 'Best 30 Flood Insurance in Knoxville, TN with Reviews - YP.com',
            'link_anchor' => 'Website',
            'is_dofollow' => 0,
            'first_seen' => '2006-02-20 03:46:00'
        ]);

        $this->assertDatabaseMissing('backlinks', [
            'page_from' => $major_domain_page->getKey()
        ]);

        $this->assertDatabaseHas('backlinks', [
            'page_from' => $local_domain_page->getKey(),
            'page_to' => $from_serp_page2->getKey(),
            'referring_page_title' => 'Where the Sidewalk Starts: October 2012',
            'link_anchor' => 'the bailey post',
            'is_dofollow' => 1,
            'first_seen' => '2021-04-17 03:56:00'
        ]);

        $this->assertDatabaseHas('domain_backlinks', [
            'domain_id' => $serp_domain->getKey(),
            'backlinks_count' => 3
        ]);


    }
}

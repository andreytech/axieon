<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Keyword;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pdp\Cache;
use Pdp\CurlHttpClient;
use Pdp\Manager;

class ResultsController extends Controller
{
    private function getPageByURL($url) {
        $url_domain = parse_url($url, PHP_URL_HOST);
        $url_path = parse_url($url, PHP_URL_PATH);

        $manager = new Manager(new Cache(), new CurlHttpClient());
        $rules = $manager->getRules(); //$rules is a Pdp\Rules object
        $domain_obj = $rules->resolve($url_domain); //$domain is a Pdp\Domain object
        $tld = $domain_obj->getRegistrableDomain();
        $subdomain = $domain_obj->getSubDomain();

        $domainModel = Domain::query()->where(
            ['domain' => $tld]
        )->first();
        if(!$domainModel) {
            return false;
        }

        return $pageModel = Page::query()->where([
            'domain_id' => $domainModel->id,
            'subdomain' => (string)$subdomain,
            'path' => $url_path
        ])->first();

    }

    private function getBacklinks($page_id) {
        $backlinks = DB::table('backlinks')
            ->select('pages.subdomain', 'pages.path', 'domains.*'
                , 'backlinks.*'
            )

            ->join('pages', 'pages.id', '=', 'backlinks.page_from')
            ->join('domains', 'domains.id', '=', 'pages.domain_id')

            ->where('backlinks.page_to', $page_id)
            ->get();

        foreach ($backlinks as $key => $backlink) {
            $backlink->url = 'https://' . $backlink->subdomain
                . ($backlink->subdomain ? '.' : '') . $backlink->domain . $backlink->path;
            $backlink->type = 'Major Backlink';
            if($backlink->is_local) {
                $backlink->type = 'Local Backlink';
            }
            if($backlink->is_minor) {
                $backlink->type = 'Influencer Backlink';
            }
            if($backlink->is_major) {
                $backlink->type = 'Major Backlink';
            }
        }

        return $backlinks;
    }

    public function show(Request $request) {
        $keyword_id = $request->input('keyword_id');
        $keyword = $request->input('keyword');
        $your_url = $request->input('your_url');
        if(!$keyword_id) {
            return view('search', [
                'keyword' => '',
                'keyword_id' => '',
                'your_url' => '',

            ]);
        }

        $serps = DB::table('serps')
            ->where('serps.keyword_id', $keyword_id)
            ->get();
        $result_serp = [];
        // TODO Code option when SERP change
        // TODO check if path is http or https
        $serp_results = DB::table('serp_results')
            ->select('pages.subdomain', 'pages.path', 'domains.domain'
                , 'serp_results.position', 'serp_results.page_id')
            ->join('pages', 'pages.id', '=', 'serp_results.page_id')
            ->join('domains', 'domains.id', '=', 'pages.domain_id')
            ->where('serp_results.serp_id', $serps[0]->id)
            ->limit(5)
            ->get();

        $your_page = null;
        $your_page_id = null;
        $your_page_backlinks = null;
        if($your_url) {
            $your_page = $this->getPageByURL($your_url);
            if($your_page) {
                $your_page_id = $your_page->id;
                $your_page_backlinks = $this->getBacklinks($your_page_id);
            }
        }

        $previous_backlinks_count = 0;
        $first_position_backlinks = null;
        foreach ($serp_results as $key => $serp_result) {
            $serp_result->url = 'https://'.$serp_result->subdomain
                .($serp_result->subdomain?'.':'').$serp_result->domain.$serp_result->path;

            if($key === 0) {
                $first_position_backlinks = $this->getBacklinks($your_page_id);
            }
            $serp_result->backlinks_count = DB::table('backlinks')
                ->where('page_to', $serp_result->page_id)
                ->count();
            if($key === 0) {
                $serp_result->deviation = '-';
            }else {
                $serp_result->deviation = abs($serp_result->backlinks_count - $previous_backlinks_count);
            }
            $previous_backlinks_count = $serp_result->backlinks_count;

        }

//            dd($serp_on_date);
        return view('results', [
            'serp_results' => $serp_results,
            'serp' => $serps[0],
            'keyword' => $keyword,
            'keyword_id' => $keyword_id,
            'your_url' => $your_url,
            'your_page' => $your_page,
            'your_page_id' => $your_page_id,
            'your_page_backlinks' => $your_page_backlinks,
            'first_position_backlinks' => $first_position_backlinks,
        ]);
//        return view('results', ['user' => User::findOrFail($id)]);
    }

    public function getKeywords(Request $request) {

        $keywords = Keyword::query()
            ->select(['id', 'keyword'])
            ->where('keyword', 'like', $request->input('keyword') . '%')
            ->where('is_new', 1)
            ->get();

//        return $user->toArray();

        return response()->json([
            'keywords' => $keywords,
        ]);
    }
}

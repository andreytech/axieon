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

    private function getBacklinks($page_id, $filters) {

        $query = DB::table('backlinks')
            ->select('pages.subdomain', 'pages.path', 'domains.*'
                , 'backlinks.*'
            )

            ->join('pages', 'pages.id', '=', 'backlinks.page_from')
            ->join('domains', 'domains.id', '=', 'pages.domain_id');

        if($filters['level_scope'] === 'domain') {
            $query->join('pages AS p_to', 'p_to.id', '=', 'backlinks.page_to')
                ->join('domains AS d_to', 'd_to.id', '=', 'p_to.domain_id')
                ->join('pages AS p_to_o', 'd_to.id', '=', 'p_to_o.domain_id')
                ->where('p_to_o.id', $page_id);
        }else {
            $query->where('backlinks.page_to', $page_id);
        }

        if($filters['unique_scope'] === 'unique') {
            $filters['unique_scope'] = '';
        }
        $query = $this->applySearchFilters($query, $filters, 0);
        $backlinks = $query->get();

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
            if($backlink->is_business) {
                $backlink->type = 'Business (Company) Backlink';
            }
        }

        return $backlinks;
    }

    private function applySearchFilters($query, $filters, $is_include_domains_join) {
        if($is_include_domains_join) {
            $query->join('pages', 'pages.id', '=', 'backlinks.page_from')
                ->join('domains', 'domains.id', '=', 'pages.domain_id');
        }

        if($filters['publisher_type'] === 'major') {
            $query->where('domains.is_major', 1);
        }
        if($filters['publisher_type'] === 'minor') {
            $query->where('domains.is_minor', 1);
        }
        if($filters['publisher_type'] === 'local') {
            $query->where('domains.is_local', 1);
        }
        if($filters['publisher_type'] === 'business') {
            $query->where('domains.is_business', 1);
        }

        if($filters['anchor_type'] === 'dofollow') {
            $query->where('backlinks.is_dofollow', 1);
        }
        if($filters['anchor_type'] === 'nofollow') {
            $query->where('backlinks.is_dofollow', 0);
        }

//        if($filters['unique_scope'] === 'unique') {
//            $query->groupBy('domains.id');
//        }

        return $query;
    }

    public function show(Request $request) {
        $keyword_id = $request->input('keyword_id');
        $keyword = $request->input('keyword');
        $your_url = $request->input('your_url');
        $search_params = $request->input('search_params', []);

        $serp_results_count = 15;
//        dd($search_params);
        if(!$keyword_id) {
            return view('search', [
                'keyword' => '',
                'keyword_id' => '',
                'your_url' => '',
            ]);
        }

        $filter_values = [
            'range_intervals' => [
                '' => 'Range Intervals',
                'weekly' => 'Weekly',
                'monthly' => 'Monthly',
            ],
            'unique_scope' => [
                '' => 'Backlink Scope',
                'all' => 'Total Backlinks',
                'unique' => 'Total Unique Backlinks',
            ],
            'publisher_type' => [
                '' => 'Backlink Types',
                'all' => 'All Backlink Types',
                'major' => 'Major Backlink Types',
                'minor' => 'Influencer Backlink Types',
                'local' => 'Local Backlink Types',
                'business' => 'Business Backlink Types',
            ],
            'anchor_type' => [
                '' => 'Backlink Anchor Text Types',
                'all' => 'All Types',
                'dofollow' => 'Dofollow Only',
                'nofollow' => 'Nofollow Only',
            ],
            'level_scope' => [
                '' => 'Backlink Scope',
                'page' => 'Page-Level',
                'domain' => 'Domain-Level',
            ],
        ];
        foreach ($filter_values as $filter => $values) {
            if(!isset($search_params[$filter])) {
                $search_params[$filter] = null;
            }
        }

        $serps = DB::table('serps')
            ->where('serps.keyword_id', $keyword_id)
            ->get();

        // TODO Code option when SERP change
        // TODO check if path is http or https
        $serp_results = DB::table('serp_results')
            ->select('pages.subdomain', 'pages.path', 'domains.domain'
                , 'serp_results.position', 'serp_results.page_id')
            ->join('pages', 'pages.id', '=', 'serp_results.page_id')
            ->join('domains', 'domains.id', '=', 'pages.domain_id')
            ->where('serp_results.serp_id', $serps[0]->id)
            ->where('serp_results.position','<=', $serp_results_count)
            ->get();

        $your_page = null;
        $your_page_id = null;
        $your_page_backlinks = null;
        if($your_url) {
            $your_page = $this->getPageByURL($your_url);
            if($your_page) {
                $your_page_id = $your_page->id;
                $your_page_backlinks = $this->getBacklinks($your_page_id, $search_params);
            }
        }

        $first_position_backlinks = $this->getBacklinks($serp_results[0]->page_id, $search_params);

        $max_anchor_text_usage = 0;
        $max_anchor_text_usage_key = null;
        $max_backlinks = 0;
        $max_backlinks_key = null;
        foreach ($serp_results as $key => $serp_result) {
            $serp_result->url = 'https://'.$serp_result->subdomain
                .($serp_result->subdomain?'.':'').$serp_result->domain.$serp_result->path;

            $query = DB::table('backlinks');

            if($search_params['level_scope'] === 'domain') {
                $query->join('pages AS p_to', 'p_to.id', '=', 'backlinks.page_to')
                    ->join('domains AS d_to', 'd_to.id', '=', 'p_to.domain_id')
                    ->join('pages AS p_to_o', 'd_to.id', '=', 'p_to_o.domain_id')
                    ->where('p_to_o.id', $serp_result->page_id);
            }else {
                $query->where('backlinks.page_to', $serp_result->page_id);
            }

            if ($search_params['unique_scope'] === 'unique') {
                $query->select(DB::raw('count(DISTINCT domains.id) AS cnt'));
            } else {
                $query->select(DB::raw('count(*) AS cnt'));
            }
            $query = $this->applySearchFilters($query, $search_params, 1);
            $serp_result->backlinks_count = $query->value('cnt');
//                    dd($serp_result->backlinks_count);
//            }

            if($serp_result->backlinks_count > $max_backlinks) {
                $max_backlinks = $serp_result->backlinks_count;
                $max_backlinks_key = $key;
            }
            $serp_result->max_backlinks = false;

            // Anchor text usage
            if($serp_result->backlinks_count) {
                $query = DB::table('backlinks')
                    ->whereRaw("MATCH(link_anchor) AGAINST(? IN BOOLEAN MODE)", array($keyword));

                if($search_params['level_scope'] === 'domain') {
                    $query->join('pages AS p_to', 'p_to.id', '=', 'backlinks.page_to')
                        ->join('domains AS d_to', 'd_to.id', '=', 'p_to.domain_id')
                        ->join('pages AS p_to_o', 'd_to.id', '=', 'p_to_o.domain_id')
                        ->where('p_to_o.id', $serp_result->page_id);
                }else {
                    $query->where('backlinks.page_to', $serp_result->page_id);
                }

                if($search_params['unique_scope'] === 'unique') {
                    $query->select(DB::raw('count(DISTINCT domains.id) AS cnt'));
                }else {
                    $query->select(DB::raw('count(*) AS cnt'));
                }
                $query = $this->applySearchFilters($query, $search_params, 1);
                $serp_result->anchor_text_usage = $query->value('cnt');
            }else {
                $serp_result->anchor_text_usage = 0;
            }
            if($serp_result->anchor_text_usage > $max_anchor_text_usage) {
                $max_anchor_text_usage = $serp_result->anchor_text_usage;
                $max_anchor_text_usage_key = $key;
            }
            $serp_result->max_anchor_text_usage = false;

            if($key === 0) {
                $serp_result->deviation = '-';
                $serp_result->anchor_text_deviation = '-';
            }else {
                $serp_result->deviation = abs($serp_results[0]->backlinks_count - $serp_result->backlinks_count);

                $serp_result->anchor_text_deviation =
                    abs($serp_results[0]->anchor_text_usage - $serp_result->anchor_text_usage);
            }
        }
        if($max_anchor_text_usage_key !== null) {
            $serp_results[$max_anchor_text_usage_key]->max_anchor_text_usage = true;
        }
        if($max_backlinks_key !== null) {
            $serp_results[$max_backlinks_key]->max_backlinks = true;
        }
//            DB::enableQueryLog();

//        dd(DB::getQueryLog());

        // TODO do not include duplicate page_from to statistics
        $query = DB::table('serps')
            ->selectRaw('
                 domains.brand_name, domains.id AS domain_id
                , ANY_VALUE(backlinks.referring_page_title) AS referring_page_title
                , ANY_VALUE(backlinks.first_seen) AS first_seen
            ')
            ->where('serps.keyword_id', $keyword_id)
            ->join('serp_results', 'serp_results.serp_id', '=', 'serps.id');

        if($search_params['level_scope'] === 'domain') {
            $query->join('pages AS p_to', 'p_to.id', '=', 'serp_results.page_id')
                ->join('domains AS d_to', 'd_to.id', '=', 'p_to.domain_id')
                ->join('pages AS p_to_o', 'd_to.id', '=', 'p_to_o.domain_id')
                ->join('backlinks', 'p_to_o.id', '=', 'backlinks.page_to');
        }else {
            $query->join('backlinks', 'serp_results.page_id', '=', 'backlinks.page_to');
        }

        $query->join('pages', 'pages.id', '=', 'backlinks.page_from')
            ->join('domains', 'domains.id', '=', 'pages.domain_id')
            ->where('serp_results.position','<=', $serp_results_count)
            ->groupBy('domains.id')
            ->orderByRaw('MAX(backlinks.first_seen) DESC');

        if($search_params['unique_scope'] === 'unique') {
            $query->selectRaw('count(DISTINCT serp_results.page_id) AS backlinks_count');
        }else {
            $query->selectRaw('count(backlinks.page_from) AS backlinks_count');
        }

        $query = $this->applySearchFilters($query, $search_params, 0);
        $publishers = $query->get();

        foreach ($publishers as $publisher) {
            $publisher->total_backlinks_count = DB::table('backlinks')
                ->join('pages', 'pages.id', '=', 'backlinks.page_from')
                ->where('pages.domain_id', $publisher->domain_id)
                ->count();
        }

//            dd($serp_on_date);
        return view('results', [
            'serp_results' => $serp_results,
            'serp' => $serps[0],
            'keyword' => $keyword,
            'keyword_id' => $keyword_id,
            'your_url' => $your_url,
            'your_page_id' => $your_page_id,
            'your_page_backlinks' => $your_page_backlinks,
            'first_position_backlinks' => $first_position_backlinks,
            'publishers' => $publishers,
            'search_params' => $search_params,
            'filter_values' => $filter_values,
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

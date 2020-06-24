@extends('search')

@section('content')
    <!-- ax-main -->
    <div class="ax-main">
        <div class="wrap">
            <section id="ax-collps">
                <div class="ax-colps ax-colps--blue">


                    <div class="collapse ax-colps__body show" id="backlink-insights">

                        @include('filters', []);


                        <h3 style="
    margin-top: 10px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 20px;
    font-size: 1.3rem;
    font-weight: bold;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    margin-top: 10px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 15px;
    font-size: 1.3rem;
    background-color: #28a745;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
    ">2. Position #1 URL Backlink Comparison</h3>

{{--                        @include('chart', array('backlinks' => []));--}}

                        @include('backlink_comparison', ['backlinks' => []]);

                        <h3 style="
    margin-top: 50px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 20px;
    font-size: 1.3rem;
    font-weight: bold;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #0c0c0c;
    margin-top: 10px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 15px;
    font-size: 1.3rem;
    background-color: #35ccfb;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
">3. Individual Backlink Analysis</h3>
                        <div class="ax-form-wrapper ax-form-wrapper--alignStart">
                            @if($your_page_id)
                                <div class="ax-radio ax-radio--purple">
                                    <input id="all-page-sources" name="purple-radio" type="radio" checked="">
                                    <label for="all-page-sources">Your Page URL</label>
                                </div>
                            @endif
                            <div class="ax-radio ax-radio--purple">
                                <input id="relevant-page-sources" name="purple-radio" type="radio">
                                <label for="relevant-page-sources">Competitor Position #1 URL</label>
                            </div>
                        </div>

                        @if($your_page_id)
                            @if(count($your_page_backlinks))
                                @include('individual_backlinks', ['backlinks' => $your_page_backlinks]);
                            @else
                                <p>No high quality backlinks were found for your page.</p>
                            @endif
                        @endif
                        @if(count($first_position_backlinks))
                            @include('individual_backlinks', ['backlinks' => $first_position_backlinks]);
                        @else
                            <p>No high quality backlinks were found for Position #1 URL Competitor.</p>
                        @endif

                        <div style="margin-bottom: 75px;"></div>
                        {{--<div class="ax-caution ax-caution--warning" style="
    border-color: #28a745;
    margin-bottom: 75px;
">
                            <svg class="ax-icon caution-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="27"
                                 viewBox="0 0 30 27">
                                <g fill="#FF6E54" fill-rule="evenodd" style="
    fill: #28a745;
">
                                    <path d="M25.974 24.634H4.025c-1.28 0-2.09-1.421-1.468-2.58L13.525 3.064l.011-.02a1.65 1.65 0 012.938.02l10.969 18.992c.621 1.158-.188 2.58-1.469 2.58m2.928-3.44a.431.431 0 00-.011-.02L17.92 2.18c-.604-1.102-1.695-1.76-2.92-1.76-1.227 0-2.318.658-2.923 1.76L1.11 21.175l-.01.02c-1.26 2.314.355 5.176 2.926 5.176h21.95c2.567 0 4.187-2.859 2.927-5.177"></path>
                                    <path d="M14.225 14.125h1.55v-4.65h-1.55v4.65zm2.325-6.2h-3.1a.775.775 0 00-.775.775v6.2c0 .428.347.775.775.775h3.1a.775.775 0 00.775-.775V8.7a.775.775 0 00-.775-.776zM15 20.325a.776.776 0 010-1.55.776.776 0 010 1.55m0-3.1a2.328 2.328 0 00-2.325 2.325A2.328 2.328 0 0015 21.876a2.328 2.328 0 002.325-2.326A2.328 2.328 0 0015 17.225"></path>
                                </g>
                            </svg>

                            <div class="text" style="
    font-weight: normal;
    color: #009021;
">Our interal filtering mechanism removed <span style="font-weight: bold">583</span> backlinks from this page that were
                                either low quality or irrelevant to your industry.
                            </div>
                        </div>--}}

                        @include('anchor_text_usage', ['backlinks' => []]);
                        @include('discover_publishers', ['backlinks' => []]);


                    </div>


                </div>


            </section>
        </div>
    </div>
    <!-- end ax-main -->
@endsection
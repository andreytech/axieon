<html lang="en">
<head>
    <title>Search Results View</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css?version=1589150987">
    <style type="text/css" href="./assets/css/apexcharts.css?version=1"></style>
</head>
<body data-gr-c-s-loaded="true">
<!-- page -->
<div class="page">
    <!-- start sidemneu -->
    <!-- sidemenu -->
    <!-- wrap -->
    <div class="ax-top-nav">
        <!-- trigger-menu -->
        <button id="ax-trigger-mobile-menu" class="ax-btn ax-dash-menu-trigger hamburger hamburger--slider"
                type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
        </button>
        <div class="nav-logo">
            <a href="#">
                <!--?xml version="1.0" encoding="UTF-8"?-->
                <svg class="ax-icon logo-color" width="370px" height="370px" viewBox="0 0 370 370" version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 64 (93537) - https://sketch.com -->
                    <title>logo-icon</title>
                    <desc>Created with Sketch.</desc>
                    <g id="logo-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group-5" transform="translate(0.000000, 1.000000)">
                            <path d="M184.186,0.506458249 C82.4656,0.506458249 0,82.8595092 0,184.38298 L0,184.38298 C0,207.792159 4.3512,230.152726 12.4024,250.740989 L12.4024,250.740989 C8.6136,226.268427 16.2208,200.40756 35.1056,181.547294 L35.1056,181.547294 L126.9396,89.9339553 C158.5524,58.3278705 209.8344,58.3278705 241.4324,89.9339553 L241.4324,89.9339553 L333.2516,181.547294 C352.2104,200.40756 359.8176,226.268427 356.0288,250.740989 L356.0288,250.740989 C364.0652,230.152726 368.4164,207.792159 368.4164,184.38298 L368.4164,184.38298 C368.4164,82.8595092 285.9656,0.506458249 184.186,0.506458249 Z"
                                  id="Fill-1" fill="#2ADCBD"></path>
                            <path d="M260.027576,242.06739 C242.660934,265.00338 215.211866,279.889578 184.209522,279.889578 C153.207177,279.889578 125.772915,265.00338 108.391467,242.082188 L108.302635,242.170972 L44.9654665,305.474305 C78.810433,344.361906 128.630342,368.984801 184.194716,368.984801 C239.818312,368.984801 289.623415,344.361906 323.409161,305.474305 L260.086798,242.12658 L260.027576,242.06739 Z"
                                  id="Fill-4" fill="#3923B3"></path>
                            <path d="M356.102273,251.272861 C348.3887,271.278963 337.269903,289.568565 323.412122,305.475784 L260.089759,242.12806 L211.765187,193.814507 C196.545316,178.617564 171.90926,178.617564 156.674583,193.814507 L108.305596,242.172452 L44.9684276,305.475784 C31.1846727,289.568565 20.0510704,271.278963 12.3374975,251.272861 C8.56214038,226.753548 16.172076,200.843278 35.0636671,181.946981 L126.930691,90.1438318 C158.540054,58.506963 209.840495,58.506963 241.464664,90.1438318 L333.316882,181.946981 C352.267695,200.843278 359.87763,226.753548 356.102273,251.272861"
                                  id="Fill-6" fill="#F9397B"></path>
                            <path d="M108.388506,242.082188 L108.299674,242.170972 L44.9625055,305.474305 C45.2586119,305.814645 45.5695237,306.125391 45.8656301,306.465731 L134.712368,265.802441 C124.555917,259.557932 115.569087,251.567329 108.388506,242.082188"
                                  id="Fill-8" fill="#271D66"></path>
                            <path d="M259.621911,242.082188 L259.725548,242.170972 L323.047911,305.474305 C322.76661,305.814645 322.440893,306.125391 322.159591,306.465731 L233.298048,265.802441 C243.469304,259.557932 252.441329,251.567329 259.621911,242.082188"
                                  id="Fill-10" fill="#271D66"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </div><!-- logo -->

        <!-- membership -->
        <a href="#" class="ax-member-menu">
            <div class="ax-member-menu--logo">
                AE
            </div>
        </a><!-- membership -->

    </div>    <!-- ax-top -->
    <div class="ax-top ax-top--one-btn">
        <div class="wrap page-slide" style="
    margin-top: 25px;
    border-radius: 10px;
    border-top: 5px solid #3923b3;
    /* background-color: #3923b3; */
    padding-bottom: 20px;
    background: rgb(255, 255, 255);
    /* background: linear-gradient(180deg, rgb(81, 60, 193) 0%, rgb(57, 35, 179) 100%); */
    -webkit-box-shadow: 0 6px 40px 0 rgba(0,0,0,0.1);
    box-shadow: 0 6px 40px 0 rgba(0, 0, 0, 0.19);
">
            <form class="ax-top__form" action="" id="search_form" style="
    background: rgb(255, 255, 255);
    /* background: linear-gradient(180deg, rgb(81, 60, 193) 0%, rgb(57, 35, 179) 100%); */
    margin-top: 10px;
">
                <h3>&gt; Backlink Insights</h3>
                <div class="ax-form-wrapper">


                    <div class="ax-form-field ax-form-field--large ax-third" style="
    height: 70px;
">
                        <fieldset style="
    /* height: 70px; */
    border-bottom: solid 3px #3923b3;
    border-radius: 3px;
">
                            <input type="text" name="keyword" ax-data-dropdown="industry" class="ax-dynamic-field"
                                   value="{{$keyword}}" autocomplete="off"
                                   id="ax-keyword" placeholder="Enter Keyword" style="
    /*color: white !IMPORTANT;*/
    /* border-bottom: 3px solid #e0e0e0; */
    box-shadow: 0 5px 15px 0 rgba(0,0,0,0.1);
">
                        </fieldset>
                    </div>
                    <div class="ax-search ax-search--disabled" style="
    border-bottom: 3px solid #3520a6;
    margin-left: 10px;
">
                        <div class="ax-search__input">
                            <input type="text" placeholder="Page URL (Optional)" name="your_url" id="ax-url"
                                   value="{{$your_url}}">
                        </div>

                        <div class="ax-search__btn-wrap">
                            <button href="#" class="ax-btn ax-btn--red" >
                                Search
                            </button>
                        </div>
                    </div>
                </div>


                <!-- search result dropdown -->
                <div class="ax-search-dropdown ax-search-dropdown--results-view" ax-data-select="industry">
                    <div class="os-resize-observer-host observed">
                        <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                    </div>
                    <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                        <div class="os-resize-observer"></div>
                    </div>
                    <div class="os-content-glue" style="margin: 0px;"></div>
                    <div class="os-padding">
                        <div class="os-viewport os-viewport-native-scrollbars-invisible">
                            <div class="os-content" style="padding: 0px; height: 100%; width: 100%;">
                            </div>
                        </div>
                    </div>
                    <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                        <div class="os-scrollbar-track os-scrollbar-track-off">
                            <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                        </div>
                    </div>
                    <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                        <div class="os-scrollbar-track os-scrollbar-track-off">
                            <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                        </div>
                    </div>
                    <div class="os-scrollbar-corner"></div>
                    <table id="keyword_results">
                        <thead>
                        <tr>
                            <th>Keyword</th>
                            {{--                            <th class="th-info">Total Keywords Ranking</th>--}}
                        </tr>
                        </thead>
                        <tbody class="os-host os-theme-dark os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition">
                        <tr>
                            <td class="td-result" {{--data-th="Keyword"--}}>
                                <span class="bt-content"><a href="#" class="keyword_text">alal</a></span>
                            </td>
                            {{--                            <td class="td-info" data-th="Total Keywords Ranking">--}}
                            {{--                                <span class="bt-content">1,448</span>--}}
                            {{--                            </td>--}}
                        </tr>
                        </tbody>
                    </table>
                    <table id="keyword_results_row_template" style="display: none;">
                        <tr>
                            <td class="td-result"{{-- data-th="Keyword"--}}>
                                <span class="bt-content">
                                    <a href="#" data-keyword-id="0" class="keyword_text">sdfsd</a>
                                </span>
                            </td>
                            {{--                            <td class="td-info" data-th="Total Keywords Ranking">--}}
                            {{--                                <span class="bt-content">1,448</span>--}}
                            {{--                            </td>--}}
                        </tr>
                    </table>
                </div>
                <input type="hidden" name="keyword_id" id="keyword_id" value="{{$keyword_id}}" />
                @if(count($search_params))
                    @foreach($search_params as $param => $value)
                        <input type="hidden" name="search_params[{{$param}}]" value="{{$value}}" />
                    @endforeach
                @endif
            </form>
        </div>
    </div>
    <!-- end ax-top -->

    @yield('content')
</div><!-- end page -->


<footer>
    <div class="wrap">
        <div class="wrapper">
            <a href="#">
                <!--?xml version="1.0" encoding="UTF-8"?-->
                <svg class="ax-icon footer-logo" width="370px" height="370px" viewBox="0 0 370 370" version="1.1"
                     xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 64 (93537) - https://sketch.com -->
                    <title>logo-icon</title>
                    <desc>Created with Sketch.</desc>
                    <g id="logo-icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group-5" transform="translate(0.000000, 1.000000)">
                            <path d="M184.186,0.506458249 C82.4656,0.506458249 0,82.8595092 0,184.38298 L0,184.38298 C0,207.792159 4.3512,230.152726 12.4024,250.740989 L12.4024,250.740989 C8.6136,226.268427 16.2208,200.40756 35.1056,181.547294 L35.1056,181.547294 L126.9396,89.9339553 C158.5524,58.3278705 209.8344,58.3278705 241.4324,89.9339553 L241.4324,89.9339553 L333.2516,181.547294 C352.2104,200.40756 359.8176,226.268427 356.0288,250.740989 L356.0288,250.740989 C364.0652,230.152726 368.4164,207.792159 368.4164,184.38298 L368.4164,184.38298 C368.4164,82.8595092 285.9656,0.506458249 184.186,0.506458249 Z"
                                  id="Fill-1" fill="#2ADCBD"></path>
                            <path d="M260.027576,242.06739 C242.660934,265.00338 215.211866,279.889578 184.209522,279.889578 C153.207177,279.889578 125.772915,265.00338 108.391467,242.082188 L108.302635,242.170972 L44.9654665,305.474305 C78.810433,344.361906 128.630342,368.984801 184.194716,368.984801 C239.818312,368.984801 289.623415,344.361906 323.409161,305.474305 L260.086798,242.12658 L260.027576,242.06739 Z"
                                  id="Fill-4" fill="#3923B3"></path>
                            <path d="M356.102273,251.272861 C348.3887,271.278963 337.269903,289.568565 323.412122,305.475784 L260.089759,242.12806 L211.765187,193.814507 C196.545316,178.617564 171.90926,178.617564 156.674583,193.814507 L108.305596,242.172452 L44.9684276,305.475784 C31.1846727,289.568565 20.0510704,271.278963 12.3374975,251.272861 C8.56214038,226.753548 16.172076,200.843278 35.0636671,181.946981 L126.930691,90.1438318 C158.540054,58.506963 209.840495,58.506963 241.464664,90.1438318 L333.316882,181.946981 C352.267695,200.843278 359.87763,226.753548 356.102273,251.272861"
                                  id="Fill-6" fill="#F9397B"></path>
                            <path d="M108.388506,242.082188 L108.299674,242.170972 L44.9625055,305.474305 C45.2586119,305.814645 45.5695237,306.125391 45.8656301,306.465731 L134.712368,265.802441 C124.555917,259.557932 115.569087,251.567329 108.388506,242.082188"
                                  id="Fill-8" fill="#271D66"></path>
                            <path d="M259.621911,242.082188 L259.725548,242.170972 L323.047911,305.474305 C322.76661,305.814645 322.440893,306.125391 322.159591,306.465731 L233.298048,265.802441 C243.469304,259.557932 252.441329,251.567329 259.621911,242.082188"
                                  id="Fill-10" fill="#271D66"></path>
                        </g>
                    </g>
                </svg>
            </a>
            <div class="footer-nav">
                <ul>
                    <li>
                        <a href="#">How It Works</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">FAQs</a>
                    </li>
                    <li>
                        <a href="#">Support</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</footer>
<script>
    var app_url = '{{ env('APP_URL') }}';
</script>
<script src="./assets/js/vendor.min.js?version=1589150987"></script>
{{--<script src="./assets/js/vendor/vendor.js?version=1589150987"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="./assets/js/custom.js?version=1589150987"></script>


<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
     style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
</svg>
<div class="datepickers-container" id="datepickers-container">
    <div class="datepicker -bottom-left- -from-bottom-" style="left: -100000px; top: 546px;"><i
                class="datepicker--pointer"></i>
        <nav class="datepicker--nav">
            <div class="datepicker--nav-action" data-action="prev">
                <svg>
                    <path d="M 17,12 l -5,5 l 5,5"></path>
                </svg>
            </div>
            <div class="datepicker--nav-title">May, <i>2020</i></div>
            <div class="datepicker--nav-action" data-action="next">
                <svg>
                    <path d="M 14,12 l 5,5 l -5,5"></path>
                </svg>
            </div>
        </nav>
        <div class="datepicker--content">
            <div class="datepicker--days datepicker--body active">
                <div class="datepicker--days-names">
                    <div class="datepicker--day-name -weekend-">Su</div>
                    <div class="datepicker--day-name">Mo</div>
                    <div class="datepicker--day-name">Tu</div>
                    <div class="datepicker--day-name">We</div>
                    <div class="datepicker--day-name">Th</div>
                    <div class="datepicker--day-name">Fr</div>
                    <div class="datepicker--day-name -weekend-">Sa</div>
                </div>
                <div class="datepicker--cells datepicker--cells-days">
                    <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="26"
                         data-month="3" data-year="2020">26
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="27" data-month="3"
                         data-year="2020">27
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="28" data-month="3"
                         data-year="2020">28
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="29" data-month="3"
                         data-year="2020">29
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="30" data-month="3"
                         data-year="2020">30
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="4" data-year="2020">1
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="2" data-month="4"
                         data-year="2020">2
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="3" data-month="4"
                         data-year="2020">3
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="4" data-month="4" data-year="2020">4
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="5" data-month="4" data-year="2020">5
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="6" data-month="4" data-year="2020">6
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="4" data-year="2020">7
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="4" data-year="2020">8
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="9" data-month="4"
                         data-year="2020">9
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend- -current-" data-date="10" data-month="4"
                         data-year="2020">10
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="11" data-month="4" data-year="2020">
                        11
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="12" data-month="4" data-year="2020">
                        12
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="13" data-month="4" data-year="2020">
                        13
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="4" data-year="2020">
                        14
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="4" data-year="2020">
                        15
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="16" data-month="4"
                         data-year="2020">16
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="17" data-month="4"
                         data-year="2020">17
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="18" data-month="4" data-year="2020">
                        18
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="19" data-month="4" data-year="2020">
                        19
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="20" data-month="4" data-year="2020">
                        20
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="4" data-year="2020">
                        21
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="22" data-month="4" data-year="2020">
                        22
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="23" data-month="4"
                         data-year="2020">23
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="24" data-month="4"
                         data-year="2020">24
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="25" data-month="4" data-year="2020">
                        25
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="26" data-month="4" data-year="2020">
                        26
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="27" data-month="4" data-year="2020">
                        27
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="4" data-year="2020">
                        28
                    </div>
                    <div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="4" data-year="2020">
                        29
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="30" data-month="4"
                         data-year="2020">30
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend-" data-date="31" data-month="4"
                         data-year="2020">31
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="1" data-month="5"
                         data-year="2020">1
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="2" data-month="5"
                         data-year="2020">2
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="3" data-month="5"
                         data-year="2020">3
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="4" data-month="5"
                         data-year="2020">4
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -other-month-" data-date="5" data-month="5"
                         data-year="2020">5
                    </div>
                    <div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="6"
                         data-month="5" data-year="2020">6
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@extends('search')

@section('content')
    <!-- ax-main -->
    <div class="ax-main">
        <div class="wrap">
            <section id="ax-collps">
                <div class="ax-colps ax-colps--blue">


                    <div class="collapse ax-colps__body show" id="backlink-insights">


                        <h3 style="
    margin-top: 10px;
    margin-bottom: 25px;
    /* background-color: #e8e8e854; */
    padding: 15px;
    font-size: 1.3rem;
    background-color: #3923b3;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
    ">1. Select Your Backlink Filters</h3>

                        <div class="ax-chart" ax-data-color="blue" style="
    -webkit-box-shadow: 0 6px 40px 0 rgba(0,0,0,0.1);
    box-shadow: 0 6px 40px 0 rgba(0,0,0,0.1);
    border-top: 5px #3923b3 solid;
    border-radius: 5px;
    overflow: visible;
    float: left;
">


                            <div class="ax-chart__body" style="position: relative;">


                                <p style="
    font-weight: 600;
    padding-left: 20px;
    color: #212529;
">1. Select the date range and intervals (X-Value):</p>


                                <div class="ax-form-wrapper" style="float: left;margin: 0;">
                                    <div class="ax-form-field ax-fourth">
                                        <fieldset>
                                            <select class="ax-select ax-select--medium" style="display: none;">
                                                <option value="0">Date Range</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div class="ax-form-field ax-fourth" style="
">
                                        <fieldset>
                                            <select class="ax-select ax-select--medium" style="display: none;">
                                                <option value="0">Range Intervals</option>
                                                <option value="1">Weekly</option>
                                                <option value="2">Monthly</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <p style="
    font-weight: 600;
    padding-left: 20px;
    color: #212529;
">2. Select the backlink structure (Y-Value): </p>
                                <div class="ax-form-wrapper">
                                    <div class="ax-form-field ax-fourth">
                                        <fieldset>
                                            <select class="ax-select ax-select--medium" style="display: none;">
                                                <option value="0">Backlink Scope</option>
                                                <option value="1">Total Backlinks</option>
                                                <option value="2">Total Unique Backlinks</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="ax-form-field ax-fourth">
                                        <fieldset>
                                            <select class="ax-select ax-select--medium" style="display: none;">
                                                <option value="0">Backlink Types</option>
                                                <option value="1">All Backlink Types</option>
                                                <option value="2">Major Backlink Types</option>
                                                <option value="3">Influencer Backlink Types</option>
                                                <option value="4">Local Backlink Types</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                    <div class="ax-form-field ax-fourth">
                                        <fieldset>
                                            <select class="ax-select ax-select--medium" style="display: none;">
                                                <option value="0">Backlink Anchor Text Types</option>
                                                <option value="1">All Types</option>
                                                <option value="2">Dofollow Only</option>
                                                <option value="3">Nofollow Only</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <p style="
    font-weight: 600;
    padding-left: 20px;
    color: #212529;
">3. Select the scope of data for the value count.</p>

                                <div class="ax-form-wrapper">
                                    <div class="ax-form-field ax-fourth">
                                        <fieldset style="
    margin: 0;
">
                                            <select class="ax-select ax-select--medium" style="display: none;">
                                                <option value="0">Backlink Scope</option>
                                                <option value="1">Page-Level</option>
                                                <option value="2">Domain-Level</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 1181px; height: 669px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>

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
                        <div class="ax-chart" ax-data-color="blue" style="
    -webkit-box-shadow: 0 6px 40px 0 rgba(0,0,0,0.1);
    box-shadow: 0 6px 40px 0 rgba(0,0,0,0.1);
    border-top: 5px #28a745 solid;
    margin-bottom: 15px;
">


                            <div class="ax-chart__body" style="position: relative;">


                                <div class="ax-chart-week" style="min-height: 365px;">
                                    <div id="apexchartsu7wcydqr"
                                         class="apexcharts-canvas apexchartsu7wcydqr apexcharts-theme-light apexcharts-zoomable"
                                         style="width: 1140px;height: 300px;">
                                        <svg id="SvgjsSvg3969" width="1140" height="350"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg hovering-zoom"
                                             xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                             style="background: transparent;">
                                            <foreignObject x="0" y="0" width="1140" height="350">
                                                <div class="apexcharts-legend apexcharts-align-center position-bottom"
                                                     xmlns="http://www.w3.org/1999/xhtml"
                                                     style="right: 0px; position: absolute; left: 0px; top: auto; bottom: 5px;">
                                                    <div class="apexcharts-legend-series" rel="1" data:collapsed="false"
                                                         style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                                                        rel="1" data:collapsed="false"
                                                                                        style="background: rgb(0, 143, 251); color: rgb(0, 143, 251); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="1" i="0"
                                                                data:default-text="Position%20%231%20Total%20Backlinks"
                                                                data:collapsed="false"
                                                                style="color: rgb(149, 146, 167); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Position #1 Total Backlinks</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="2" data:collapsed="false"
                                                         style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                                                        rel="2" data:collapsed="false"
                                                                                        style="background: rgb(0, 227, 150); color: rgb(0, 227, 150); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="2" i="1"
                                                                data:default-text="Position%20%231%20Total%20Backlinks"
                                                                data:collapsed="false"
                                                                style="color: rgb(149, 146, 167); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Position #1 Total Backlinks</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="3" data:collapsed="false"
                                                         style="margin: 0px 5px;"><span class="apexcharts-legend-marker"
                                                                                        rel="3" data:collapsed="false"
                                                                                        style="background: rgb(254, 176, 25); color: rgb(254, 176, 25); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                class="apexcharts-legend-text" rel="3" i="2"
                                                                data:default-text="Keyword%20Position"
                                                                data:collapsed="false"
                                                                style="color: rgb(149, 146, 167); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Keyword Position</span>
                                                    </div>
                                                </div>
                                                <style type="text/css">

                                                    .apexcharts-legend {
                                                        display: flex;
                                                        overflow: auto;
                                                        padding: 0 10px;
                                                    }

                                                    .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                                        flex-wrap: wrap
                                                    }

                                                    .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                        flex-direction: column;
                                                        bottom: 0;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-left, .apexcharts-legend.position-top.apexcharts-align-left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                                        justify-content: flex-start;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-center, .apexcharts-legend.position-top.apexcharts-align-center {
                                                        justify-content: center;
                                                    }

                                                    .apexcharts-legend.position-bottom.apexcharts-align-right, .apexcharts-legend.position-top.apexcharts-align-right {
                                                        justify-content: flex-end;
                                                    }

                                                    .apexcharts-legend-series {
                                                        cursor: pointer;
                                                        line-height: normal;
                                                    }

                                                    .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series {
                                                        display: flex;
                                                        align-items: center;
                                                    }

                                                    .apexcharts-legend-text {
                                                        position: relative;
                                                        font-size: 14px;
                                                    }

                                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                        pointer-events: none;
                                                    }

                                                    .apexcharts-legend-marker {
                                                        position: relative;
                                                        display: inline-block;
                                                        cursor: pointer;
                                                        margin-right: 3px;
                                                        border-style: solid;
                                                    }

                                                    .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                        display: inline-block;
                                                    }

                                                    .apexcharts-legend-series.apexcharts-no-click {
                                                        cursor: auto;
                                                    }

                                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                        display: none !important;
                                                    }

                                                    .apexcharts-inactive-legend {
                                                        opacity: 0.45;
                                                    }</style>
                                            </foreignObject>
                                            <g id="SvgjsG3971" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(59.484375, 40)">
                                                <defs id="SvgjsDefs3970">
                                                    <clipPath id="gridRectMasku7wcydqr">
                                                        <rect id="SvgjsRect3977" width="1065.1640625" height="254.348"
                                                              x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="gridRectMarkerMasku7wcydqr">
                                                        <rect id="SvgjsRect3978" width="1063.1640625" height="256.348"
                                                              x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <line id="SvgjsLine3976" x1="529.08203125" y1="0" x2="529.08203125"
                                                      y2="252.348" stroke="#b6b6b6" stroke-dasharray="3"
                                                      class="apexcharts-xcrosshairs" x="529.08203125" y="0" width="1"
                                                      height="252.348" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                      stroke-width="1"></line>
                                                <g id="SvgjsG3993" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG3994" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)">
                                                        <text id="SvgjsText3996"
                                                              font-family="Helvetica, Arial, sans-serif" x="0"
                                                              y="281.348" text-anchor="middle" dominant-baseline="auto"
                                                              font-size="12px" font-weight="400" fill="#9592a7"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan3997">Monday</tspan>
                                                            <title>Monday</title></text>
                                                        <text id="SvgjsText3999"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="176.52734375" y="281.348" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#9592a7"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4000">Tuesday</tspan>
                                                            <title>Tuesday</title></text>
                                                        <text id="SvgjsText4002"
                                                              font-family="Helvetica, Arial, sans-serif" x="353.0546875"
                                                              y="281.348" text-anchor="middle" dominant-baseline="auto"
                                                              font-size="12px" font-weight="400" fill="#9592a7"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4003">Wednesday</tspan>
                                                            <title>Wednesday</title></text>
                                                        <text id="SvgjsText4005"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="529.58203125" y="281.348" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#9592a7"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4006">Thursday</tspan>
                                                            <title>Thursday</title></text>
                                                        <text id="SvgjsText4008"
                                                              font-family="Helvetica, Arial, sans-serif" x="706.109375"
                                                              y="281.348" text-anchor="middle" dominant-baseline="auto"
                                                              font-size="12px" font-weight="400" fill="#9592a7"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4009">Friday</tspan>
                                                            <title>Friday</title></text>
                                                        <text id="SvgjsText4011"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="882.63671875" y="281.348" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#9592a7"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4012">Saturday</tspan>
                                                            <title>Saturday</title></text>
                                                        <text id="SvgjsText4014"
                                                              font-family="Helvetica, Arial, sans-serif"
                                                              x="1059.1640625" y="281.348" text-anchor="middle"
                                                              dominant-baseline="auto" font-size="12px"
                                                              font-weight="400" fill="#9592a7"
                                                              class="apexcharts-text apexcharts-xaxis-label "
                                                              style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan4015">Sunday</tspan>
                                                            <title>Sunday</title></text>
                                                    </g>
                                                    <line id="SvgjsLine4016" x1="0" y1="253.348" x2="1059.1640625"
                                                          y2="253.348" stroke="#e0e0e0" stroke-dasharray="0"
                                                          stroke-width="1"></line>
                                                </g>
                                                <g id="SvgjsG4029" class="apexcharts-grid">
                                                    <g id="SvgjsG4030" class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine4046" x1="0" y1="0" x2="1059.1640625" y2="0"
                                                              stroke="#eaf0f4" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4047" x1="0" y1="63.087" x2="1059.1640625"
                                                              y2="63.087" stroke="#eaf0f4" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4048" x1="0" y1="126.174" x2="1059.1640625"
                                                              y2="126.174" stroke="#eaf0f4" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4049" x1="0" y1="189.26100000000002"
                                                              x2="1059.1640625" y2="189.26100000000002" stroke="#eaf0f4"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4050" x1="0" y1="252.348" x2="1059.1640625"
                                                              y2="252.348" stroke="#eaf0f4" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG4031" class="apexcharts-gridlines-vertical">
                                                        <line id="SvgjsLine4032" x1="0" y1="0" x2="0" y2="252.348"
                                                              stroke="#eaf0f4" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4034" x1="176.52734375" y1="0"
                                                              x2="176.52734375" y2="252.348" stroke="#eaf0f4"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4036" x1="353.0546875" y1="0"
                                                              x2="353.0546875" y2="252.348" stroke="#eaf0f4"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4038" x1="529.58203125" y1="0"
                                                              x2="529.58203125" y2="252.348" stroke="#eaf0f4"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4040" x1="706.109375" y1="0" x2="706.109375"
                                                              y2="252.348" stroke="#eaf0f4" stroke-dasharray="0"
                                                              class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4042" x1="882.63671875" y1="0"
                                                              x2="882.63671875" y2="252.348" stroke="#eaf0f4"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine4044" x1="1059.1640625" y1="0"
                                                              x2="1059.1640625" y2="252.348" stroke="#eaf0f4"
                                                              stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <line id="SvgjsLine4033" x1="0" y1="253.348" x2="0" y2="259.348"
                                                          stroke="#e0e0e0" stroke-dasharray="0"
                                                          class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4035" x1="176.52734375" y1="253.348"
                                                          x2="176.52734375" y2="259.348" stroke="#e0e0e0"
                                                          stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4037" x1="353.0546875" y1="253.348"
                                                          x2="353.0546875" y2="259.348" stroke="#e0e0e0"
                                                          stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4039" x1="529.58203125" y1="253.348"
                                                          x2="529.58203125" y2="259.348" stroke="#e0e0e0"
                                                          stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4041" x1="706.109375" y1="253.348"
                                                          x2="706.109375" y2="259.348" stroke="#e0e0e0"
                                                          stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4043" x1="882.63671875" y1="253.348"
                                                          x2="882.63671875" y2="259.348" stroke="#e0e0e0"
                                                          stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4045" x1="1059.1640625" y1="253.348"
                                                          x2="1059.1640625" y2="259.348" stroke="#e0e0e0"
                                                          stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                    <line id="SvgjsLine4052" x1="0" y1="252.348" x2="1059.1640625"
                                                          y2="252.348" stroke="transparent" stroke-dasharray="0"></line>
                                                    <line id="SvgjsLine4051" x1="0" y1="1" x2="0" y2="252.348"
                                                          stroke="transparent" stroke-dasharray="0"></line>
                                                </g>
                                                <g id="SvgjsG3980"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG3989" class="apexcharts-series"
                                                       seriesname="KeywordxPosition" data:longestseries="true" rel="3"
                                                       data:realindex="2">
                                                        <path id="SvgjsPath3992"
                                                              d="M 0 252.348C 61.784570312499994 252.348 114.7427734375 212.91862500000002 176.52734375 212.91862500000002C 238.3119140625 212.91862500000002 291.2701171875 94.63049999999998 353.0546875 94.63049999999998C 414.8392578125 94.63049999999998 467.7974609375 134.059875 529.58203125 134.059875C 591.3666015625 134.059875 644.3248046875 236.57625000000002 706.109375 236.57625000000002C 767.8939453125 236.57625000000002 820.8521484375 157.7175 882.63671875 157.7175C 944.4212890625 157.7175 997.3794921875 15.771749999999997 1059.1640625 15.771749999999997"
                                                              fill="none" fill-opacity="1" stroke="rgba(53,204,251,1)"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                              stroke-dasharray="0" class="apexcharts-line" index="2"
                                                              clip-path="url(#gridRectMasku7wcydqr)"
                                                              pathto="M 0 252.348C 61.784570312499994 252.348 114.7427734375 212.91862500000002 176.52734375 212.91862500000002C 238.3119140625 212.91862500000002 291.2701171875 94.63049999999998 353.0546875 94.63049999999998C 414.8392578125 94.63049999999998 467.7974609375 134.059875 529.58203125 134.059875C 591.3666015625 134.059875 644.3248046875 236.57625000000002 706.109375 236.57625000000002C 767.8939453125 236.57625000000002 820.8521484375 157.7175 882.63671875 157.7175C 944.4212890625 157.7175 997.3794921875 15.771749999999997 1059.1640625 15.771749999999997"
                                                              pathfrom="M -1 252.348L -1 252.348L 176.52734375 252.348L 353.0546875 252.348L 529.58203125 252.348L 706.109375 252.348L 882.63671875 252.348L 1059.1640625 252.348"></path>
                                                        <g id="SvgjsG3990" class="apexcharts-series-markers-wrap"
                                                           data:realindex="2">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle4060" r="0" cx="529.58203125"
                                                                        cy="134.059875"
                                                                        class="apexcharts-marker wtwjh6yoh"
                                                                        stroke="#ffffff" fill="#35ccfb" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3985" class="apexcharts-series"
                                                       seriesname="Positionxx1xTotalxBacklinks"
                                                       data:longestseries="true" rel="2" data:realindex="1">
                                                        <path id="SvgjsPath3988"
                                                              d="M 0 252.348C 61.784570312499994 252.348 114.7427734375 94.63049999999998 176.52734375 94.63049999999998C 238.3119140625 94.63049999999998 291.2701171875 173.48925 353.0546875 173.48925C 414.8392578125 173.48925 467.7974609375 55.20112499999999 529.58203125 55.20112499999999C 591.3666015625 55.20112499999999 644.3248046875 15.771749999999997 706.109375 15.771749999999997C 767.8939453125 15.771749999999997 820.8521484375 55.20112499999999 882.63671875 55.20112499999999C 944.4212890625 55.20112499999999 997.3794921875 173.48925 1059.1640625 173.48925"
                                                              fill="none" fill-opacity="1" stroke="rgba(255,110,84,1)"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                              stroke-dasharray="2" class="apexcharts-line" index="1"
                                                              clip-path="url(#gridRectMasku7wcydqr)"
                                                              pathto="M 0 252.348C 61.784570312499994 252.348 114.7427734375 94.63049999999998 176.52734375 94.63049999999998C 238.3119140625 94.63049999999998 291.2701171875 173.48925 353.0546875 173.48925C 414.8392578125 173.48925 467.7974609375 55.20112499999999 529.58203125 55.20112499999999C 591.3666015625 55.20112499999999 644.3248046875 15.771749999999997 706.109375 15.771749999999997C 767.8939453125 15.771749999999997 820.8521484375 55.20112499999999 882.63671875 55.20112499999999C 944.4212890625 55.20112499999999 997.3794921875 173.48925 1059.1640625 173.48925"
                                                              pathfrom="M -1 252.348L -1 252.348L 176.52734375 252.348L 353.0546875 252.348L 529.58203125 252.348L 706.109375 252.348L 882.63671875 252.348L 1059.1640625 252.348"></path>
                                                        <g id="SvgjsG3986" class="apexcharts-series-markers-wrap"
                                                           data:realindex="1">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle4059" r="0" cx="529.58203125"
                                                                        cy="55.20112499999999"
                                                                        class="apexcharts-marker w4a4j0iun"
                                                                        stroke="#ffffff" fill="#ff6e54" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG3987" class="apexcharts-datalabels"
                                                           data:realindex="1"></g>
                                                    </g>
                                                    <g id="SvgjsG3981" class="apexcharts-series"
                                                       seriesname="Positionxx1xTotalxBacklinks"
                                                       data:longestseries="true" rel="1" data:realindex="0">
                                                        <path id="SvgjsPath3984"
                                                              d="M 0 252.348C 61.784570312499994 252.348 114.7427734375 173.48925 176.52734375 173.48925C 238.3119140625 173.48925 291.2701171875 212.91862500000002 353.0546875 212.91862500000002C 414.8392578125 212.91862500000002 467.7974609375 134.059875 529.58203125 134.059875C 591.3666015625 134.059875 644.3248046875 173.48925 706.109375 173.48925C 767.8939453125 173.48925 820.8521484375 94.63049999999998 882.63671875 94.63049999999998C 944.4212890625 94.63049999999998 997.3794921875 94.63049999999998 1059.1640625 94.63049999999998"
                                                              fill="none" fill-opacity="1" stroke="rgba(43,23,156,1)"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                              stroke-dasharray="2" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMasku7wcydqr)"
                                                              pathto="M 0 252.348C 61.784570312499994 252.348 114.7427734375 173.48925 176.52734375 173.48925C 238.3119140625 173.48925 291.2701171875 212.91862500000002 353.0546875 212.91862500000002C 414.8392578125 212.91862500000002 467.7974609375 134.059875 529.58203125 134.059875C 591.3666015625 134.059875 644.3248046875 173.48925 706.109375 173.48925C 767.8939453125 173.48925 820.8521484375 94.63049999999998 882.63671875 94.63049999999998C 944.4212890625 94.63049999999998 997.3794921875 94.63049999999998 1059.1640625 94.63049999999998"
                                                              pathfrom="M -1 252.348L -1 252.348L 176.52734375 252.348L 353.0546875 252.348L 529.58203125 252.348L 706.109375 252.348L 882.63671875 252.348L 1059.1640625 252.348"></path>
                                                        <g id="SvgjsG3982" class="apexcharts-series-markers-wrap"
                                                           data:realindex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle4058" r="0" cx="529.58203125"
                                                                        cy="134.059875"
                                                                        class="apexcharts-marker whe98rnxl"
                                                                        stroke="#ffffff" fill="#2b179c" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG3991" class="apexcharts-datalabels"
                                                       data:realindex="2"></g>
                                                    <g id="SvgjsG3983" class="apexcharts-datalabels"
                                                       data:realindex="0"></g>
                                                </g>
                                                <line id="SvgjsLine4053" x1="0" y1="0" x2="1059.1640625" y2="0"
                                                      stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine4054" x1="0" y1="0" x2="1059.1640625" y2="0"
                                                      stroke-dasharray="0" stroke-width="0"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG4055" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG4056" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG4057" class="apexcharts-point-annotations"></g>
                                                <rect id="SvgjsRect4061" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                      fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                                <rect id="SvgjsRect4062" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                      opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                      fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                            </g>
                                            <rect id="SvgjsRect3975" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG4017" class="apexcharts-yaxis" rel="0"
                                               transform="translate(21.484375, 0)">
                                                <g id="SvgjsG4018" class="apexcharts-yaxis-texts-g">
                                                    <text id="SvgjsText4019" font-family="Helvetica, Arial, sans-serif"
                                                          x="20" y="41.4" text-anchor="end" dominant-baseline="auto"
                                                          font-size="11px" font-weight="400" fill="#9592a7"
                                                          class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: arial;color: black;font-weight: bold;fill: black;">
                                                        <tspan id="SvgjsTspan4020" style="
    color: black;
">3200
                                                        </tspan>
                                                    </text>
                                                    <text id="SvgjsText4021" font-family="Helvetica, Arial, sans-serif"
                                                          x="20" y="104.48700000000001" text-anchor="end"
                                                          dominant-baseline="auto" font-size="11px" font-weight="400"
                                                          fill="#9592a7" class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;font-family: arial;color: black;font-weight: bold;fill: black;">
                                                        <tspan id="SvgjsTspan4022">2400</tspan>
                                                    </text>
                                                    <text id="SvgjsText4023" font-family="Helvetica, Arial, sans-serif"
                                                          x="20" y="167.574" text-anchor="end" dominant-baseline="auto"
                                                          font-size="11px" font-weight="400" fill="#9592a7"
                                                          class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;font-family: arial;color: black;font-weight: bold;fill: black;">
                                                        <tspan id="SvgjsTspan4024">1600</tspan>
                                                    </text>
                                                    <text id="SvgjsText4025" font-family="Helvetica, Arial, sans-serif"
                                                          x="20" y="230.66100000000003" text-anchor="end"
                                                          dominant-baseline="auto" font-size="11px" font-weight="400"
                                                          fill="#9592a7" class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;font-family: arial;color: black;font-weight: bold;fill: black;">
                                                        <tspan id="SvgjsTspan4026">800</tspan>
                                                    </text>
                                                    <text id="SvgjsText4027" font-family="Helvetica, Arial, sans-serif"
                                                          x="20" y="293.748" text-anchor="end" dominant-baseline="auto"
                                                          font-size="11px" font-weight="400" fill="#9592a7"
                                                          class="apexcharts-text apexcharts-yaxis-label "
                                                          style="font-family: arial;font-weight: bold;color: black;font-family: arial;color: black;font-weight: bold;fill: black;">
                                                        <tspan id="SvgjsTspan4028" style="
    font-family: arial;
    color: black;
    font-weight: bold;
    fill: black;
">0
                                                        </tspan>
                                                    </text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG3972" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light"
                                             style="left: 315.504px; top: 137.06px;">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                Thursday
                                            </div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                 style="display: flex;"><span class="apexcharts-tooltip-marker"
                                                                              style="background-color: rgb(0, 111, 195);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label">Position #1 Total Backlinks: </span><span
                                                                class="apexcharts-tooltip-text-value">1500 points</span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                 style="display: flex;"><span class="apexcharts-tooltip-marker"
                                                                              style="background-color: rgb(0, 227, 150);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label">Position #1 Total Backlinks: </span><span
                                                                class="apexcharts-tooltip-text-value">2500 points</span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                 style="display: flex;"><span class="apexcharts-tooltip-marker"
                                                                              style="background-color: rgb(254, 176, 25);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label">Keyword Position: </span><span
                                                                class="apexcharts-tooltip-text-value">1500 points</span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                             style="left: 546.051px;top: 294.348px;font-weight: bold;">
                                            <div class="apexcharts-xaxistooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 63.0313px;">
                                                Thursday
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 1181px; height: 795px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                            <footer class="ax-chart__footer" style="
    float: left;
">
                                <ul style="/* margin: auto; */">
                                    <li class="ax-legend ax-legend--blue">Your Page URL</li>

                                </ul>
                            </footer>

                            <footer class="ax-chart__footer" style="
    float: left;
    padding-left: 0;
">
                                <ul style="/* margin: auto; */">
                                    <li class="ax-legend ax-legend--orange"
                                        style="/* margin: auto; *//* float: left; */">Position #1 URL
                                    </li>

                                </ul>
                            </footer>
                        </div>


                        <div class="ax-table-wrapper" style="
    margin-bottom: 75px;
">
                            <table class="ax-table ax-table--5col">
                                <thead class="ax-bg--blue">
                                <tr style="
    border-bottom: 1px dashed #28a745;
    border-top: 5px solid #28a745;
">
                                    <th class="number" style="
    background-color: #ffffff;
    color: black;
    font-weight: bold;
">Rank
                                    </th>
                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
">Page URL
                                    </th>
                                    <th class="days total-backlinks ax-bg--purple" style="">
                                        {{ \Carbon\Carbon::parse($serp->created_at)->format('m/d/Y') }}
                                        <span style="display:block">05-2-20</span>
                                    </th>
                                    <th class="days total-backlinks ax-bg--purple" style="color: #007bff;">
                                        Total
                                    </th>
                                    <th class="days total-backlinks ax-bg--purple" style="color: #dc3545;">
                                        Deviation
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($serp_results as $result)
                                    <tr>
                                        <td class="number" data-th="15">
                                            <span class="bt-content">{{$result->position}}</span>
                                        </td>
                                        <td class="page-url" data-th="Page URL">
                                            <span class="bt-content" style="overflow-wrap: anywhere;">
                                                {{$result->url}}
                                            </span>
                                        </td>
                                        <td class="days" data-th="Position Days">
                                            <span class="bt-content">0</span>
                                        </td>
                                        <td class="days" ><span class="bt-content">{{$result->backlinks_count}}</span></td>
                                        <td class="deviation" data-th="Deviation from Position #1">
                                            <span class="bt-content">-</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                        <div class="ax-form-wrapper ax-form-wrapper--alignStart">


                        </div>


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
                            <div class="ax-radio ax-radio--purple">
                                <input id="all-page-sources" name="purple-radio" type="radio" checked="">
                                <label for="all-page-sources">Your Page URL</label>
                            </div>
                            <div class="ax-radio ax-radio--purple">
                                <input id="relevant-page-sources" name="purple-radio" type="radio">
                                <label for="relevant-page-sources">Competitor Position #1 URL</label>
                            </div>
                        </div>

                        <div class="ax-table-wrapper">
                            <table class="ax-table ax-table--5col">
                                <thead class="ax-bg--blue">
                                <tr style="
    border-bottom: 1px dashed #35ccfb;
    border-top: 5px solid #35ccfb;
">


                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 40%;
">Publisher
                                    </th>
                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 100%;
    padding-right: 5px;
">Backlink URL
                                    </th>

                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 30%;
    padding-left: 5px;
    padding-right: 5px;
">Date
                                    </th>
                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 100%;
">Page Title
                                    </th>
                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 40%;
">Anchor Text
                                    </th>
                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 20%;
    padding-left: 5px;
    padding-right: 5px;
">Dofollow
                                    </th>
                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 50%;
">Backlink Type
                                    </th>


                                </tr>
                                </thead>

                                <tbody>
                                <tr>


                                    <td class="page-url" data-th="Page URL" style="
    /* width: 40%; */
"><span class="bt-content"><a href="#">CNN</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-right: 5px;
"><span class="bt-content"><a href="#">cnn.com/car-insurance/</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#" style="
    /* padding-left: 5px; */
">5-12-2020</a></span></td>

                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Reduce Car Insurance in 2020 with 3 Easy Steps</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">car insurance</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#">Yes</a></span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Major Backlink</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Jessica Smith</a></span>
                                    </td>


                                </tr>
                                <tr>


                                    <td class="page-url" data-th="Page URL" style="
    /* width: 40%; */
"><span class="bt-content"><a href="#">Huffington Post</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-right: 10px;
"><span class="bt-content" style="
"><a href="#">huffingtonpost.com/car-insurance-tips/</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#" style="
    /* padding-left: 5px; */
">5-12-2020</a></span></td>

                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Reduce Car Insurance in 2020 with 3 Easy Steps</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">car insurance</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#">Yes</a></span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Major Backlink</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Jessica Smith</a></span>
                                    </td>


                                </tr>
                                <tr>


                                    <td class="page-url" data-th="Page URL" style="
    /* width: 40%; */
"><span class="bt-content"><a href="#">CNN</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-right: 5px;
"><span class="bt-content"><a href="#">cnn.com/car-insurance/</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#" style="
    /* padding-left: 5px; */
">5-12-2020</a></span></td>

                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Reduce Car Insurance in 2020 with 3 Easy Steps</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">car insurance</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#">Yes</a></span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Major Backlink</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Jessica Smith</a></span>
                                    </td>


                                </tr>
                                <tr>


                                    <td class="page-url" data-th="Page URL" style="
    /* width: 40%; */
"><span class="bt-content"><a href="#">CNN</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-right: 5px;
"><span class="bt-content"><a href="#">cnn.com/car-insurance/</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#" style="
    /* padding-left: 5px; */
">5-12-2020</a></span></td>

                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Reduce Car Insurance in 2020 with 3 Easy Steps</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">car insurance</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#">Yes</a></span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Major Backlink</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Jessica Smith</a></span>
                                    </td>


                                </tr>


                                <tr>


                                    <td class="page-url" data-th="Page URL" style="
    /* width: 40%; */
"><span class="bt-content"><a href="#">CNN</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-right: 5px;
"><span class="bt-content"><a href="#">cnn.com/car-insurance/</a></span></td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#" style="
    /* padding-left: 5px; */
">5-12-2020</a></span></td>

                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Reduce Car Insurance in 2020 with 3 Easy Steps</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">car insurance</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL" style="
    padding-left: 5px;
    padding-right: 5px;
"><span class="bt-content"><a href="#">Yes</a></span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Major Backlink</a></span>
                                    </td>


                                </tr>


                                </tbody>


                            </table>
                        </div>

                        <div class="ax-caution ax-caution--warning" style="
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
                        </div>

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
    background-color: #dc2ad2;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
">4. Compare Backlink Anchor Text Usage</h3>

                        <div class="ax-table-wrapper">
                            <table class="ax-table ax-table--5col" style="
    margin-bottom: 75px;
">
                                <thead class="ax-bg--blue">
                                <tr style="
    border-bottom: 1px dashed #dc2ad2;
    border-top: 5px solid #dc2ad2;
">
                                    <th class="number" style="
    background-color: #ffffff;
    color: black;
    font-weight: bold;
">Rank
                                    </th>
                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 36%;
">Page URL
                                    </th>

                                    <th class="days total-backlinks ax-bg--purple" style="
    /* font-weight: bold; */
    /* color: black; */
    width: 20%;
                                                      ">Total Anchors <span style="font-weight: 400; display: block;">(Containing Keyword)</span>
                                    </th>


                                    <th class="days total-backlinks ax-bg--purple" style="
    color: #dc2ad2;
">Deviation
                                    </th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="number" data-th="15"><span class="bt-content">1</span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">www.progressive.com/car-insurance/</a></span>
                                    </td>
                                    <td class="days" data-th="Position Days"><span class="bt-content">87</span></td>


                                    <td class="days" data-th="+22"><span class="bt-content" style="
    /* background-color: #f3fff3; */
    /* padding: 5px; */
    /* border: 1px solid #c0e6c0; */
    /* border-radius: 5px; */
">25</span></td>


                                </tr>
                                <tr>
                                    <td class="number" data-th="15"><span class="bt-content">2</span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">www.geico.com/car-insurance/</a></span>
                                    </td>
                                    <td class="days" data-th="Position Days"><span class="bt-content" style="
    background-color: #dc2ad2;
    padding: 6px 7px 6px 7px;
    /* border: 1px solid #c0e6c0; */
    border-radius: 5px;
    color: white;
    border-radius: 100%;
">87</span></td>
                                    <td class="days" data-th="+19"><span class="bt-content">15</span></td>


                                </tr>
                                <tr>
                                    <td class="number" data-th="15"><span class="bt-content">3<span>(You)</span></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#" style="
    color: #28a745;
    /* font-weight: 500; */
">www.progressive.com/car-insurance/</a></span></td>
                                    <td class="days" data-th="Position Days"><span class="bt-content">87</span></td>
                                    <td class="days" data-th="+19"><span class="bt-content">10</span></td>


                                </tr>
                                </tbody>


                            </table>
                        </div>


                        <!-- <div class="ax-table-wrapper end">
                            <table class="ax-table ax-table--avg">
                                <thead class="ax-bg--blue">
                                    <tr>
                                        <th class="title">AVG</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>34</td>
                                        <td>5.584</td>
                                        <td><span class="org-text">-55</span></td>
                                        <td>+15</td>
                                        <td>+21</td>
                                        <td>+55</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> -->

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
    background-color: #dc3545;
    font-weight: 600;
    /* border-bottom: 3px dotted #cecece; */
    /* border-radius: 5px; */
    color: #000000;
    float: left;
    color: white;
    border-radius: 7px;
    letter-spacing: .9px;
">5. Discover Publishers (Industry)</h3>

                        <div class="ax-table-wrapper">
                            <table class="ax-table ax-table--5col">
                                <thead class="ax-bg--blue">
                                <tr style="
    border-bottom: 1px dashed #dc3545;
    border-top: 5px solid #dc3545;
">

                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 7%;
">Publisher
                                    </th>

                                    <th class="page-url" style="
    background-color: #ffffff;
    /* border-bottom: solid 3px #372b77; */
    color: black;
    font-weight: bold;
    width: 22%;
">Latest Post
                                    </th>


                                    <th class="days total-backlinks ax-bg--purple" style="
    /* font-weight: bold; */
    color: #000000;
    width: 13%;
    text-align: left;
    ">Last Backlink Date
                                    </th>
                                    <th class="days total-backlinks ax-bg--purple" style="
    /* font-weight: bold; */
    color: #dc3545;
    width: 10%;
    ">Total Backlinks Given
                                    </th>


                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">CNN</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">How to reduce your car insurance in 3 steps</a></span>
                                    </td>
                                    <td class="days" data-th="Position Days" style="
    text-align: left;
"><span class="bt-content" style="
    text-align: left;
    padding-left: 5px;
">5-15-20</span></td>
                                    <td class="days" data-th="Position Days"><span class="bt-content">87</span></td>
                                </tr>

                                <tr>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Huffington Post</a></span>
                                    </td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">Change your insurance before it ends</a></span>
                                    </td>
                                    <td class="days" data-th="Position Days" style="
    text-align: left;
"><span class="bt-content" style="
    text-align: left;
    padding-left: 5px;
">4-23-20</span></td>
                                    <td class="days" data-th="Position Days"><span class="bt-content">3</span></td>
                                </tr>


                                <tr>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a
                                                    href="#">Forbes</a></span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">The easiest way to decrease your insurance costs in 2020</a></span>
                                    </td>
                                    <td class="days" data-th="Position Days" style="
    text-align: left;
"><span class="bt-content" style="
    text-align: left;
    padding-left: 5px;
">2-12-20</span></td>
                                    <td class="days" data-th="Position Days"><span class="bt-content">14</span></td>
                                </tr>


                                <tr>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a
                                                    href="#">NBC 5</a></span></td>
                                    <td class="page-url" data-th="Page URL"><span class="bt-content"><a href="#">How your insurance rates can go up in Phoenix</a></span>
                                    </td>
                                    <td class="days" data-th="Position Days" style="
    text-align: left;
"><span class="bt-content" style="
    text-align: left;
    padding-left: 5px;
">1-21-20</span></td>
                                    <td class="days" data-th="Position Days"><span class="bt-content">32</span></td>
                                </tr>


                                </tbody>


                            </table>
                        </div>

                    </div>


                </div>


            </section>
        </div>
    </div>
    <!-- end ax-main -->
@endsection
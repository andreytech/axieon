'use strict';

$(function () {
});
"use strict";

function _defineProperty(obj, key, value) {
    if (key in obj) {
        Object.defineProperty(obj, key, {value: value, enumerable: true, configurable: true, writable: true});
    } else {
        obj[key] = value;
    }
    return obj;
}

$(function () {

    //Search Results View Chart
    function ax_get_chart_color(element) {
        var chartContainer = $(element).parents('.ax-chart'),
            chartColor = $(chartContainer).attr('ax-data-color');

        switch (chartColor) {
            case 'blue':
                chartColor = '#35ccfb';
                break;

            case 'green':
                chartColor = '#2adcbd';
                break;

            case 'pink':
                chartColor = '#f9397b';
                break;

            case 'orange':
                chartColor = '#ff6e54';
                break;

            case 'yellow':
                chartColor = '#ffb32d';
                break;

            default:
                chartColor = '#614ae4';
        }

        return chartColor;
    }

    var chart_search_results = document.querySelector(".ax-chart-week");

    if (chart_search_results) {
        $(chart_search_results).each(function () {
            var _options;

            var ch_main_color = ax_get_chart_color(chart_search_results);
            var options = (_options = {
                series: [{
                    name: 'Position #1 Total Backlinks',
                    type: 'line',
                    data: [0, 1000, 500, 1500, 1000, 2000, 2000]
                }, {
                    name: 'Position #1 Total Backlinks',
                    type: 'line',
                    data: [0, 2000, 1000, 2500, 3000, 2500, 1000]
                }, {
                    name: 'Keyword Position',
                    type: 'line',
                    data: [0, 500, 2000, 1500, 200, 1200, 3000]
                }],
                chart: {
                    height: 350,
                    type: 'line',
                    foreColor: '#9592A7',
                    toolbar: {
                        show: false
                    }
                },
                dropShadow: {
                    enabled: true,
                    top: 0,
                    left: 0,
                    blur: 3,
                    opacity: 1
                },
                stroke: {
                    curve: 'smooth',
                    colors: ['#2b179c', '#ff6e54', ch_main_color],
                    width: 2,
                    dashArray: [2, 2, 0]
                },
                fill: {
                    type: 'solid',
                    opacity: [1, 1, 1]
                },
                labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                markers: {
                    size: 0
                },
                grid: {
                    show: true,
                    borderColor: '#eaf0f4',
                    strokeDashArray: 0,
                    position: 'back',
                    xaxis: {
                        lines: {
                            show: true
                        }
                    },
                    yaxis: {
                        lines: {
                            show: true
                        }
                    },
                    padding: {
                        top: 0,
                        right: 0,
                        bottom: 20,
                        left: 20
                    }
                }
            }, _defineProperty(_options, "markers", {
                colors: ['#2b179c', '#ff6e54', ch_main_color]
            }), _defineProperty(_options, "tooltip", {
                shared: true,
                intersect: false,
                y: {
                    formatter: function formatter(y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " points";
                        }

                        return y;
                    }
                }
            }), _options);
            var chart_instance = new ApexCharts(chart_search_results, options);
            chart_instance.render();
        });
    }
});
'use strict';

$(function () {
    $('.ax-colps__header').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
    }); //Dynamic fields

    var searchField = $('.ax-dynamic-field'),
        selectedInput = $(searchField).attr('ax-data-dropdown'),
        isSpinnerVisible = false,
        previousValue,
        typingTimer;
    $(searchField).each(function () {
        $(this).on('keyup', searchType);
    });

    function searchType() {
        searchField = this;
        var searchStr = $(searchField).val();

        if (searchStr == previousValue || searchStr.length < 3) {
            return;
        }

        previousValue = searchStr;
        // clearTimeout(typingTimer);

        $(searchField).parents('.ax-form-field').find('.ax-search-noresult').removeClass('ax-reveal');
        $(document).find('.ax-search-dropdown').removeClass('ax-reveal');

        if (!isSpinnerVisible) {
            $(searchField).parents('.ax-form-field').addClass('ax-loading');
            isSpinnerVisible = true;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.post(
            '/results/get_keywords',
            {keyword: $(searchField).val()},
            function (data) {
                $(searchField).parents('.ax-form-field').removeClass('ax-loading');
                $(document).find('.ax-search-dropdown').attr('ax-data-select', selectedInput).removeClass('ax-reveal');
                isSpinnerVisible = false;

                if(!data.hasOwnProperty('keywords') || ! data.keywords) {
                    return;
                }

                $('#keyword_results tbody .os-content tr').remove();

                $( data.keywords ).each(function( index, item ) {
                    // console.dir(item.keyword);
                    $('#keyword_results_row_template a').text(item.keyword);
                    $('#keyword_results_row_template a').attr('data-keyword-id', item.id);
                    var template = $('#keyword_results_row_template tr')
                        .clone()
                        .appendTo($('#keyword_results tbody .os-content'))
                        .show();

                    // var tr = $('#keyword_results_row_template').clone();
                    // $('a', tr).text(item.keyword);
                    // $('.test_keywords tbody').append(tr.html());
                    // console.log( index + ": " + $( this ).text() );
                });
                // $('#keyword_results').basictable('start');
                // $('#keyword_results').basictable({
                //     breakpoint: 1000,
                // });

                // if ($(searchField).val() == '123') {
                //     $(searchField).parents('.ax-form-field').find('.ax-search-noresult').addClass('ax-reveal');
                //     isSpinnerVisible = false;
                //     return;
                // }

                $(document).find('.ax-search-dropdown').attr('ax-data-select', selectedInput).addClass('ax-reveal');

                $(document).find('table td a').on('click', function () {
                    $(searchField).val($(this).text());
                    var keyword_id = $(this).attr('data-keyword-id');
                    $('#keyword_id').val(keyword_id);
                    $(searchField).parents('.ax-form-field').next('.ax-form-field').find('input').removeAttr('disabled').focus();
                    $(document).find('.ax-search-dropdown').attr('ax-data-select', selectedInput).removeClass('ax-reveal');
                    isSpinnerVisible = false;
                });

            },
            "json"
        );
        // typingTimer = setTimeout(ax_searchResult, 2000);

    }


    var datePicker = $('.ax-datepicker');
    $(datePicker).each(function () {
        $(this).datepicker({
            placeholder: 'Date Range'
        });
    });
});
"use strict";

$(function () {
    $('#ax-menu-trigger').on('click', function (e) {
        $(this).toggleClass('is-active');
        $('.ax-home-header__navigation').toggleClass('open');
    });
    $(document).on('click', '.ax-show-password', function (e) {
        e.preventDefault();
        var passField = $('.ax-password-input');
        $(this).toggleClass('hide-password');

        if (passField.attr('type') == 'text') {
            passField.attr('type', 'password');
        } else {
            passField.attr('type', 'text');
        }
    });
});
'use strict';

$(function () {
    $('#ax-trigger-menu').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
        $('.sidemenu').toggleClass('opened-menu');
        $('.wrap').toggleClass('page-slide');
    });
    $('#ax-trigger-mobile-menu').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
        $('.sidemenu').toggleClass('opened-menu');
    });
});
"use strict";

$(function () {
    var percentCard = $('.ax-card--percentage');
    $(percentCard).each(function (element) {
        var cardNumber = $(this).find('.number-circle:not(.ax-only-number)'),
            cardValue = $(this).attr('data-percent'),
            color = "#ff3300",
            borderColor = '#f5f5f5',
            size = 155;

        if ($(this).hasClass('ax-card--full')) {
            size = 180;
        } //colors


        if ($(this).hasClass('ax-card--purple') && !$(this).hasClass('on')) {
            color = "#614ae4";
        } else if ($(this).hasClass('ax-card--blue') && !$(this).hasClass('on')) {
            color = "#35ccfb";
        } else if ($(this).hasClass('ax-card--lipink') && !$(this).hasClass('on')) {
            color = "#ff6e54";
        } else if ($(this).hasClass('ax-card--green') && !$(this).hasClass('on')) {
            color = "#2adcbd";
        } else if ($(this).hasClass('ax-card--yellow') && !$(this).hasClass('on')) {
            color = "#ffb32d";
        } else if ($(this).hasClass('ax-card--pink') && !$(this).hasClass('on')) {
            color = "#f9397b";
        } else if ($(this).hasClass('on')) {
            color = "#fff";
            borderColor = "rgba(0, 0, 0, 0.03)";
        }

        $(cardNumber).circleProgress({
            value: cardValue,
            size: size,
            startAngle: 1.6,
            thickness: 2,
            lineCap: 'round',
            fill: color,
            emptyFill: borderColor
        }).on('circle-animation-progress', function (event, progress, stepValue) {
            $(this).find('span').text((stepValue * 100).toFixed(0) + '%');
        });
        ;
    });
});
"use strict";

$(function () {
    $('.ax-table th[class*="ax-bg"]').each(function () {
        var $cellIndex = $(this).index();
        var actuallCell = $(this).closest('table').find('td').index($cellIndex);
        console.log(actuallCell);
    });
});
"use strict";
"use strict";

$(function () {
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });
});
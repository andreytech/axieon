$(function () {
    //Search Results View Chart
    function ax_get_chart_color(element) {
        var chartContainer = $(element).parents('.ax-chart'),
            chartColor = $(chartContainer).attr('ax-data-color');
        switch (chartColor) {
            case 'blue': chartColor = '#35ccfb'; break;
            case 'green': chartColor = '#2adcbd'; break;
            case 'pink': chartColor = '#f9397b'; break;
            case 'orange': chartColor = '#ff6e54'; break;
            case 'yellow': chartColor = '#ffb32d'; break;
            default: chartColor = '#614ae4';
        }
        return chartColor;
    }
    var chart_search_results = document.querySelector(".ax-chart-week");
    if (chart_search_results) {
        $(chart_search_results).each(function () {
            var ch_main_color = ax_get_chart_color(chart_search_results);
            var options = {
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
                    dashArray: [2, 2, 0],
                },
                fill: {
                    type: 'solid',
                    opacity: [1, 1, 1],
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
                    },
                },
                markers: {
                    colors: ['#2b179c', '#ff6e54', ch_main_color]
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function (y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                }
            };
            var chart_instance = new ApexCharts(chart_search_results, options);
            chart_instance.render();
        })
    }
})
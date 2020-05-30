import jquery from 'jquery';
import Sortable from 'sortablejs';
import Swiper from 'swiper';
window.$ = window.jQuery = jquery;

require('bootstrap');
require('jquery-nice-select');
require('select2');
require('jquery-circle-progress');
require('overlayscrollbars');
require('air-datepicker');
require('air-datepicker/src/js/i18n/datepicker.en');
require('../../lib/basictable/jquery.basictable.min.js');


$(function () {

    $('.ax-select').niceSelect();
    $('.search-select').select2();
    //Sortable
    var allCollps = document.getElementById('ax-collps');
    if (allCollps) {
        var sortable = Sortable.create(allCollps, {
            handle: '.ax-sort-icon',
            animation: 150
        });
    }

    //Custom Scrollbar
    var dropdownTable = OverlayScrollbars($(document).find('.ax-search-dropdown tbody'), {
        overflowBehavior: {
            x: "hidden",
            y: "scroll"
        },
        scrollbars: {
            autoHide: "leave",
        }
    });

    //Sidebar Scrollbar
    var sidebarNavigation = OverlayScrollbars($(document).find('.sidemenu__nav-container'), {
        overflowBehavior: {
            x: "hidden",
            y: "scroll"
        },
        scrollbars: {
            autoHide: "leave",
        }
    });

    $('#keyword_results').basictable({
        breakpoint: 1000,
        header: false,
    });


});
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
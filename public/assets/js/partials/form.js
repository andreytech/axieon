'use strict';
$(function () {
    $('.ax-colps__header').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
    });


    //Dynamic fields

    let searchField = $('.ax-dynamic-field'),
        selectedInput = $(searchField).attr('ax-data-dropdown'),
        isSpinnerVisible = false,
        previousValue,
        typingTimer;


    $(searchField).each(function () {
        $(this).on('keyup', searchType);
    });

    function searchType() {
        searchField = this;
        if ($(searchField).val() != previousValue) {
            clearTimeout(typingTimer);
            if ($(searchField).val()) {
                $(searchField).parents('.ax-form-field').find('.ax-search-noresult').removeClass('ax-reveal');
                $(document).find('.ax-search-dropdown').removeClass('ax-reveal');
                if (!isSpinnerVisible) {
                    $(searchField).parents('.ax-form-field').addClass('ax-loading');
                    isSpinnerVisible = true;
                }
                typingTimer = setTimeout(ax_searchResult, 2000);
            } else {
                $(searchField).parents('.ax-form-field').removeClass('ax-loading');
                $(document).find('.ax-search-dropdown').attr('ax-data-select', selectedInput).removeClass('ax-reveal');
                isSpinnerVisible = false;
            }
        }
        previousValue = $(searchField).val();
    }

    function ax_searchResult() {
        $(searchField).parents('.ax-form-field').removeClass('ax-loading');

        //If no result
        if ($(searchField).val() == '123') {
            $(searchField).parents('.ax-form-field').find('.ax-search-noresult').addClass('ax-reveal');
            isSpinnerVisible = false;
            return;
        }
        $(document).find('.ax-search-dropdown').attr('ax-data-select', selectedInput).addClass('ax-reveal');
        isSpinnerVisible = false;

        //Putting Value to select

        $(document).find('table td a').on('click', function () {
            $(searchField).val($(this).text());
            $(searchField).parents('.ax-form-field').next('.ax-form-field').find('input').removeAttr('disabled').focus();
            $(document).find('.ax-search-dropdown').attr('ax-data-select', selectedInput).removeClass('ax-reveal');
            isSpinnerVisible = false;
        })
    }


    //Date picker

    var datePicker = $('.ax-datepicker');

    $(datePicker).each(function () {
        $(this).datepicker({
            placeholder: 'Date Range'
        })
    })

});


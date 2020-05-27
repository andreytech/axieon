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
    })
});
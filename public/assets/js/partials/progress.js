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
        }


        //colors 
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
        });;
    })
})
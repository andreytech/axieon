$(function () {
    $('.ax-table th[class*="ax-bg"]').each(function () {
        var $cellIndex = $(this).index();
        var actuallCell = $(this).closest('table').find('td').index($cellIndex);
        console.log(actuallCell);
    });
});
$('.tip').tooltip({
    placement: 'top'
});

$('.tip-bottom').tooltip({
    placement: 'bottom'
});

$('.confirm').click(function() {
    var message = 'Are you sure you want to delete this?';

    if ($(this).is('[data-confirm]')) {
        message = $(this).data('confirm');
    }

    return confirm(message);
});
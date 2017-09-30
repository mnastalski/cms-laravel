//=include popper.js/dist/umd/popper.js
//=include bootstrap/dist/js/bootstrap.js

/**
 * Bootstrap tooltip bind (on top of element)
 */
$('.tip').tooltip({
    placement: 'top'
});

/**
 * Bootstrap tooltip bind (on bottom of element)
 */
$('.tip-bottom').tooltip({
    placement: 'bottom'
});


/**
 * Confirms removal of item
 */
$('.confirm').click(function() {
    var message = 'Are you sure you want to delete this item?';

    if ($(this).is('[data-confirm]')) {
        message = $(this).data('confirm');
    }

    return confirm(message);
});


/**
 * TinyMCE init
 */
tinymce.init({
    selector: '.tinymce',
    menubar: false,
    plugins: [
        'lists link image preview media table contextmenu paste code media'
    ],
    toolbar: 'undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | indent outdent | link image media | code preview',

    contextmenu: 'undo redo | cut copy paste | selectall',

    content_css: '/assets/css/admin.css',
    body_class: 'p-2'
});

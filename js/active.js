$(document).on('click', '.show-menu-mobile', function () {
    $(this).toggleClass('active'); $('.toolbar, .overlay').toggleClass('active'); return false;
});
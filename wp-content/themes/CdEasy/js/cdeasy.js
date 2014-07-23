$(document).ready(function() {
    $('.site-navigation ul li').each(function(index) {
        $(this).addClass('menu-item-' + (index + 1));
    });
});

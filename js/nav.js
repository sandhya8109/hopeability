(function () {

    'use strict';

    var $searchView = $('.menu-search-container');
    var $menu = $('.menu-mac, .menu-iPad, .menu-iPhone, .menu-watch, .menu-tv, .menu-support, .menu-search, .menu-store');
    var $fadeScreen = $('.fade-screen');

    $('li.menu-search a, .fade-screen, .menu-search-close').on('click', function (e) {

        $searchView.toggleClass('active');

        setTimeout(function () {
            $searchView.children().find('input').focus();
        }, 1100);

        $fadeScreen.toggleClass('visible');
        $menu.removeClass('is-closed');
        $menu.toggleClass('hidden');

        e.preventDefault();
    });

    $('.fade-screen,.menu-search-close').on('click', function (e) {
        $menu.toggleClass('is-closed');
        e.preventDefault();
    });

}())
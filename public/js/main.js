$(function () {

    $('.button_menu').on('click', function(){
        $('.header__content-center').toggleClass('menu--open');
    });
    $('.button_menu').on('click', function(){
        $('.header__content').toggleClass('header--open');
    });


    var disp = $('.container__description');
    var tab = $('.tab');

    $('.btn-click-tab').on('click', function(){
        
        if(tab.css('display') == 'none'){
            $('.btn-click-tab').toggleClass('btn--decor');
            $('.btn-click-desc').toggleClass('btn--decor');
            tab.toggleClass('vision');
            disp.toggleClass('vision');        
        }
    });

    $('.btn-click-desc').on('click', function(){
        
        if(disp.css('display') == 'none'){
            $('.btn-click-tab').toggleClass('btn--decor');
            $('.btn-click-desc').toggleClass('btn--decor');
            tab.toggleClass('vision');
            disp.toggleClass('vision');        
        }
    });

    var dispOne = $('.container__description-one');
    var tabOne = $('.tab-one');

    $('.btn-click-tabOne').on('click', function(){
        
        if(tabOne.css('display') == 'none'){
            $('.btn-click-tabOne').toggleClass('btn--decor');
            $('.btn-click-descOne').toggleClass('btn--decor');
            tabOne.toggleClass('vision');
            dispOne.toggleClass('vision');        
        }
    });

    $('.btn-click-descOne').on('click', function(){
        
        if(dispOne.css('display') == 'none'){
            $('.btn-click-tabOne').toggleClass('btn--decor');
            $('.btn-click-descOne').toggleClass('btn--decor');
            tabOne.toggleClass('vision');
            dispOne.toggleClass('vision');        
        }
    });
});
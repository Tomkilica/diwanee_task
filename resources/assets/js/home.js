

$(document).ready(function() {

    $( ".header-button" ).click(function(){
        $(".span").toggleClass("active");
        $(".bar--first").toggleClass("header-button--rot");
        $(".bar--last").toggleClass("header-button--rot-opposite");
        $(".bar--first").toggleClass("bar--same-top");
        $(".bar--last").toggleClass("bar--same-top");
        $(".bar--first").toggleClass("first--nonactive");
        $(".bar--last").toggleClass("last--nonactive");
        $(".bar--mid").toggleClass("mid--opacity")
        $(".header__nav--tab").toggleClass("header__nav--up")
        $(".header__nav--tab").toggleClass("header__nav--down");
    });

    $('ul a').click(function(){
        $('body').stop().animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 400);
    });


});
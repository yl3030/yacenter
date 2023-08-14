AOS.init({startEvent: 'load'});
window.addEventListener('load', AOS.refresh);

$(".header_lang_icon").click(function(){
    $(this).toggleClass("active");
    $(this).parents(".header_lang").find(".header_lang_list").fadeToggle(300);
})

$(document).click(function (event) {
    var lang = $(".header_lang");
    if (!lang.is(event.target) && lang.has(event.target).length === 0) {
        $(".header_lang_icon").removeClass("active");
        $(".header_lang_list").fadeOut(300);
    }
});

$(".header_search_icon").click(function(){
    $(this).parents(".header_search").toggleClass("active");
})

$(".header_menu").click(function(){
    $(this).toggleClass("active");
    $(".header_nav").fadeToggle(300);
})

$(".header_nav_first>li.drop").click(function(){
    if($(window).width() < 992) {
        $(this).toggleClass("active");
        $(this).find(".header_nav_second").slideToggle(300);
    }
})

$(".btn-top").click(function(){
    $("html, body").animate({scrollTop: 0},300);
});

$(".btn-accept").click(function(){
    $(".cookies").fadeOut(300);
})
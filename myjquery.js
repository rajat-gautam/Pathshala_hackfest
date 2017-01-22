$('ul.submenu').hide();
$('ul.nav > li').hover(function () {
if ($(this).find('ul.submenu').length > 0) {
    $(this).find('ul.submenu').stop().slideDown('slow');
}
},function () {
    if ($(this).find('ul.submenu').length > 0) {
        $(this).find('ul.submenu').stop().slideUp('slow');
    }
});



// Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });




$(function () {

    var curSlide = 0;
    var maxSlide = $('.banner-single').length - 1;
    var delay = 4;

    
        initSlider();
        changeSlide();


    function initSlider() {
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();
        for (var i = 0; i < maxSlide+1; i++) {
            var content = $('.bullets').html();
            content+='<span></span>'
            $('.bullets').html(content);
        }
    }

    function changeSlide() {
        setInterval(function() {
            $('.banner-single').eq(curSlide).fadeOut(1000);
            curSlide++;
            console.log(maxSlide);
            console.log(curSlide);
            if (curSlide > maxSlide)
            curSlide = 0;
            $('.banner-single').eq(curSlide).fadeIn(1000, function(){

            });
        }, delay * 1000);
    }

})

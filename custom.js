$(document).on("click", function (){
    if($("#navbars").hasClass('show')){
        $("#navbars").removeClass('show')
    }
});
      // Scrolling Effect
$(window).on("scroll", function() {
    if($(window).scrollTop()) {
      $('nav').addClass('bg-white');
                  //$('nav .navbar-nav .nav-link').addClass('text-dark');
      $('nav .navbar-brand h2').addClass('text-dark');
  }
  else {
      $('nav').removeClass('bg-white');
                  //$('nav .navbar-nav .nav-link').removeClass('text-dark');
      $('nav .navbar-brand h2').removeClass('text-dark');
  }

})


      //  Only number fill in phone input
let digitValidate = function (ele) {
    ele.value = ele.value.replace(/[^0-9]/g, '');
}



var owl = $('.owl-carousel');
owl.owlCarousel({
  loop: true,
  margin: 10,
  autoplay: true,
  autoplayTimeout: 2000,
  autoplayHoverPause:true,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:false,
          loop: true
      },
      576:{
          items:2,
          nav:false,
          loop:true
      },
      768:{
          items:2,
          nav:false,
          loop:true
      },
      1024:{
          items:3,
          nav:false,
          loop:true
      },
      1200:{
          items:4,
          nav:false,
          loop:true
      }
  }
});
$('.play').on('click',function(){
  owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
  owl.trigger('stop.owl.autoplay')
})


            /* Code for changing active 
            link on clicking */
var btns = 
$("#navigation .navbar-nav .nav-link");

for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click",
      function () {
        var current = document
        .getElementsByClassName("active");

        current[0].className = current[0]
        .className.replace(" active", "");

        this.className += " active";
    });
}

            /* Code for changing active 
            link on Scrolling */
$(window).scroll(function () {
    var distance = $(window).scrollTop();
    $('.page-section').each(function (i) {

        if ($(this).position().top 
            <= distance + 250) {

            $('.navbar-nav a.active')
        .removeClass('active');

        $('.navbar-nav a').eq(i)
        .addClass('active');
    }
});
}).scroll();



$(function(){

    var swiper = new Swiper('.carousel-gallery .swiper-container', {
      effect: 'slide',
      speed: 900,
      slidesPerView: 5,
      spaceBetween: 20,
      simulateTouch: true,
    //   autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false
    // },
    loop: true,
    pagination: {
        el: '.carousel-gallery .swiper-pagination',
        clickable: true
    },
    breakpoints: {
            // when window width is <= 320px
            320: {
              slidesPerView: 1,
              spaceBetween: 20
            },
            // when window width is <= 480px
            425: {
              slidesPerView: 2,
              spaceBetween: 20
            },
            // when window width is <= 640px
            768: {
              slidesPerView: 4,
              spaceBetween: 20
            }
        }
    }); /*http://idangero.us/swiper/api/*/
  
});
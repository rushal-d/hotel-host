function stickyNav(){
    var bannerHeight =$('.banner').height();

    if($(window).scrollTop() > bannerHeight){
        $('.navbar').addClass('stickynav');
    } else{
        $('.navbar').removeClass('stickynav');   
    }
}

$(document).ready(function (){
    $("#go-totop").click(function (){
        $('html, body').animate({
            scrollTop: $("#top").offset().top
        }, 2000);
    });
});

$(document).ready(function () {
        var url = window.location;
        $('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active');
        $('ul.navbar-nav a').filter(function() {
             return this.href == url;
        }).parent().addClass('active');
    });

new WOW().init();

$('#datepicker').datepicker();
$('#check-out').datepicker();


    // $("#myModal").modal('toggle');


function bannerHeight(){
     var bannerHeight = $(window).height();

    $('.banner .item').height(bannerHeight);
}




function preLoader(){
  setTimeout(function(){
    $('.loader-wrapper').hide()
  },200);
}





function Carousel(){
   $('.banner .owl-carousel').owlCarousel({
        items:1,
        loop:true,
        smartSpeed:1000,
        autoplay: true,
        responsive:{
            0:{
                nav:false,
                dots: true
            },
            768:{
                nav:true,
                dots:false,
            },
        }
    }); 

    $('.team .owl-carousel').owlCarousel({
        items:4,
        loop:false,
        margin: 20,
        smartSpeed:300,
        autoplay: true,
        responsive:{
            0:{
                nav:false,
                dots: true
            },
            768:{
                nav:false,
                dots:true,
            },
        }
    }); 

    $('.clients .owl-carousel').owlCarousel({
        items:4,
        loop:false,
        margin: 20,
        smartSpeed:400,
        autoplay: true,
        responsive:{
            0:{
                nav:false,
                dots: true
            },
            768:{
                nav:false,
                dots:true,
            },
        }
    }); 
    $('.services .owl-carousel').owlCarousel({
        items:4,
        loop:true,
        margin: 20,
        // smartSpeed:400,
        autoplay: 200,
        responsive:{
            0:{
                nav:false,
                dots: true
            },
            768:{
                nav:false,
                dots:true,
            },
        }
    }); 
}

function slider(){
    $('.sliders').slick({
  centerMode: true,
  centerPadding: '60px',
  autoplay:true,
  arrows:false,
  dots:false,
  autoplaySpeed:1700,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
}

$(document).ready(function(){
    $(".inner-gallery").lightGallery({
        selector:'.item',
        autoplay:false,
        animateThumb:true,
        toogleThumb:false,
        showThumbByDefault:false
    });
});


$(document).ready(function(){
    bannerHeight(); 
    Carousel();
    // new WOW().init();
    preLoader();
    slider();

$('.counter').counterUp({
    delay: 10,
    time: 8000
});



    // $('a[data-rel^=lightcase]').lightcase();

})
$(window).scroll(function(){
    stickyNav();
})






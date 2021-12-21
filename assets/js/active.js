
jQuery(document).ready(function(){

  $(".quickLinksWidget h3").click(function(){
    $(this).parent().toggleClass("active");
  });

  $(".menu_bar").click(function(){
    $(".mobile_menu_box").addClass("active");
    $("body").addClass("oveflow");
  });

  $(".close_menu").click(function(){
    $(".mobile_menu_box").removeClass("active");
    $("body").removeClass("oveflow");
  });

  $(".close_news").click(function(){
    $(this).parent(".mobile_newsConten").fadeOut();
  });



    // jQuery("ul#returtabList li").click(function(){
    //   jQuery(this).addClass("active").siblings().removeClass("active");
    // });
    

});




  $(function() {
    $('#audioPlayer').audioPlayer();
  });


$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 5) {
        $(".header_area").addClass("sticky");
    } else {
        $(".header_area").removeClass("sticky");
    }
});


	var swiper = new Swiper(".newsTopSlider", {
	 // autoplay: {
	 //   delay: 5000,
	 // },
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
	});


  var swiper = new Swiper(".mostReadeSlider", {
  // 	 autoplay: {
	 //   delay: 5000,
	 // },
    slidesPerView: 4,
    spaceBetween: 50,
    slidesPerGroup: 2,
    loop: false,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      575: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      }
    }

  });

  var swiper = new Swiper(".IllusStorSlider", {
  // 	 autoplay: {
	 //   delay: 5000,
	 // },
    slidesPerView: 4,
    spaceBetween: 50,
    slidesPerGroup: 2,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper = new Swiper(".mobileNewsSlider", {
     autoplay: {
       delay: 5000,
     },
    direction: "vertical",
    loop: true,
    slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });


  AOS.init();

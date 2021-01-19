$(function() {

    $('.prices-item').toShowHide({
        button: '.top',
        button_close: '.top',
        close_only_button: false,
        box: '.content',
        anim_speed: 600,
        effect: 'slide',
        onShow: function(el){
            el.find('.top').addClass('active');
        },
        onHide: function(el){
            el.find('.top').removeClass('active');
        }
    });

	// slick slider1
	$('.slider1').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 1500,
		autoplayHoverPause:true,
		arrows: true,
		dots: true,
		// centerMode: true,
  // 	centerPadding: '60px',
  	responsive: [
	    {
	      breakpoint: 780,
	      settings: {
	      	arrows: false
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false
	      }
	    }
	  ]
	});

	// slick slider2
	$('.our-trainers-items .slider2').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		autoplayHoverPause:true,
		arrows: true,
		dots: true,
		responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	      	slidesToShow: 1,
	        arrows: false
	      }
	    }
	  ]
	});

	// slick slider3
	$('.slider3 .slider-slick').slick({
		slidesToShow: 3,
		slidesToScroll: 3,
		//autoplay: true,
		autoplaySpeed: 3000,
		autoplayHoverPause:true,
		arrows: true,
		dots: true,
		responsive: [
	    {
	      breakpoint: 769,
	      settings: {
	        arrows: false,
	      	dots: true,
	      	slidesToShow: 2,
	      	slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 577,
	      settings: {
	        arrows: false,
	      	dots: true,
	      	slidesToShow: 1,
	      	slidesToScroll: 1
	      }
	    }
	  ]
	});

	// slick slider4
	$('.slides').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: true,
	  //fade: true,
	  asNavFor: '.slides_pagination'
	});
	$('.slides_pagination').slick({
	  slidesToShow: 8,
	  slidesToScroll: 1,
	  asNavFor: '.slides',
	 centerMode: true,
	  focusOnSelect: true,
	  centerPadding: 50,
	   arrows: false,
	   responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        centerMode: true
	      }
	    }
	  ]
	});

// tabs jquery
    const intervalTime = 15000;//(прокруткавременно отключена) вместо '1000' задать нужное время задержки в милисекундах

    var source = $(".container .tabs source");

    $(".tab_item").not(":first").hide();
    $(".container .tab").click(function() {

        // console.log( $(this).find('source').attr('srcset').slice(0, -1).slice(0, -1).slice(0, -1).slice(0, -1) );

        source.eq(0).attr('srcset', '../../images/age-of-child-icon1.svg');
        source.eq(1).attr('srcset', '../images/age-of-child-icon2.svg');
        source.eq(2).attr('srcset', '../images/age-of-child-icon3.svg');

        $(this).find('source').attr('srcset', $(this).find('source').attr('srcset').slice(0, -1).slice(0, -1).slice(0, -1).slice(0, -1)+'-active.svg');

        $(".container .tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".tab_item").hide().eq($(this).index()).fadeIn();
    }).eq(0).addClass("active");

    var setInterval1 = window.setInterval(setTab1, intervalTime);

    $('.container .tab_content').mouseover(function () {
        clearInterval(setInterval1);
    });
    $('.container .tab_content').mouseout(function () {
        setInterval1 = window.setInterval(setTab1, intervalTime);
    });


    function setTab1() {

        var tabs = $(".container .tab");
        var activeTab = $(".container .tab.active");
        var indexTab = tabs.index(activeTab);

        if (indexTab < tabs.length - 1) {
            indexTab = indexTab + 1;
        } else {
            indexTab = 0;
        }

        source.eq(0).attr('srcset', '../images/age-of-child-icon1.svg');
        source.eq(1).attr('srcset', '../images/age-of-child-icon2.svg');
        source.eq(2).attr('srcset', '../images/age-of-child-icon3.svg');

        $(activeTab).removeClass("active")

        $(tabs).eq(indexTab).find('source').attr('srcset', $(tabs).eq(indexTab).find('source').attr('srcset').slice(0, -1).slice(0, -1).slice(0, -1).slice(0, -1)+'-active.svg');
        $(tabs).eq(indexTab).addClass("active");
        $(".tab_item").hide().eq(indexTab).fadeIn();

    }


    // tabs2 jquery
    var source2 = $(".container .tabs2 source");

    $(".tab_item2").not(":first").hide();
    $(".container .tab2").click(function() {

        source2.eq(0).attr('srcset', '../images/security-icon1.svg');
        source2.eq(1).attr('srcset', '../images/security-icon2.svg');
        source2.eq(2).attr('srcset', '../images/security-icon3.svg');

        $(this).find('source').attr('srcset', $(this).find('source').attr('srcset').slice(0, -1).slice(0, -1).slice(0, -1).slice(0, -1)+'-active.svg');

        $(".container .tab2").removeClass("active").eq($(this).index()).addClass("active");
        $(".tab_item2").hide().eq($(this).index()).fadeIn()
    }).eq(0).addClass("active");

    var setInterval2 = window.setInterval(setTab2, intervalTime);

    $('.container .tab_content2').mouseover(function () {
        clearInterval(setInterval2);
    });
    $('.container .tab_content2').mouseout(function () {
        setInterval2 = window.setInterval(setTab2, intervalTime);
    });

    function setTab2() {

        var tabs = $(".container .tab2");
        var activeTab = $(".container .tab2.active");
        var indexTab = tabs.index(activeTab);

        if (indexTab < tabs.length - 1) {
            indexTab = indexTab + 1;
        } else {
            indexTab = 0;
        }

        source2.eq(0).attr('srcset', '../images/security-icon1.svg');
        source2.eq(1).attr('srcset', '../images/security-icon2.svg');
        source2.eq(2).attr('srcset', '../images/security-icon3.svg');

        $(activeTab).removeClass("active")

        $(tabs).eq(indexTab).find('source').attr('srcset', $(tabs).eq(indexTab).find('source').attr('srcset').slice(0, -1).slice(0, -1).slice(0, -1).slice(0, -1)+'-active.svg');
        $(tabs).eq(indexTab).addClass("active");
        $(".tab_item2").hide().eq(indexTab).fadeIn();

    }

	// tabs3 jquery
	var source3 = $(".tabs3 source");

	$(".tab_item3").not(":first").hide();
	$(".container .tab3").click(function() {

		//$(this).find('source').attr('srcset', $(this).find('source').attr('srcset').slice(0, -1).slice(0, -1).slice(0, -1).slice(0, -1)+'-active.svg');

		$(".container .tab3").removeClass("active").eq($(this).index()).addClass("active");
		$(".tab_item3").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	// popup1
	$('.js-popup').on('click', function(e) {
	  e.preventDefault();

	  console.log($(this).attr('data-type'));
	  $('.hidden-form').attr('value', $(this).attr('data-type'));

	  // поиск popup и popup-overlay для их открытия
	  // $('.popup').css('display', 'block');
	  // $('.popup-overlay').css('display', 'block');
	  // or
	  $('.popup').slideDown();
	  $('.popup-overlay').css('display', 'block');

	  // поиск button close popup
	  $('#js-close-popup, .popup-overlay').on('click', function(e) {
	    // $('.popup').css('display', 'none');
	    // $('.popup-overlay').css('display', 'none');
	    // or
	    $('.popup').slideUp();
	    $('.popup-overlay').css('display', 'none');
	  });
	});

	// popup2
	$('.js-popup2').on('click', function(e) {
	  e.preventDefault();

	  // поиск popup и popup-overlay для их открытия
	  // $('.popup').css('display', 'block');
	  // $('.popup-overlay').css('display', 'block');
	  // or
	  $('.popup2').slideDown();
	  $('.popup-overlay').css('display', 'block');

	  // поиск button close popup
	  $('#js-close-popup, .popup-overlay').on('click', function(e) {
	    // $('.popup').css('display', 'none');
	    // $('.popup-overlay').css('display', 'none');
	    // or
	    $('.popup2').slideUp();
	    $('.popup-overlay').css('display', 'none');
	  });
	});

	// popup3
	$('.js-popup3').on('click', function(e) {
	  e.preventDefault();

	  // поиск popup и popup-overlay для их открытия
	  // $('.popup').css('display', 'block');
	  // $('.popup-overlay').css('display', 'block');
	  // or
	  $('.popup3').slideDown();
	  $('.popup-overlay').css('display', 'block');

	  // поиск button close popup
	  $('#js-close-popup, .popup-overlay').on('click', function(e) {
	    // $('.popup').css('display', 'none');
	    // $('.popup-overlay').css('display', 'none');
	    // or
	    $('.popup3').slideUp();
	    $('.popup-overlay').css('display', 'none');
	  });
	});

	// popup4
	$('.js-popup4').on('click', function(e) {
	  e.preventDefault();

	  // поиск popup и popup-overlay для их открытия
	  // $('.popup').css('display', 'block');
	  // $('.popup-overlay').css('display', 'block');
	  // or
	  $('.popup4').slideDown();
	  $('.popup-overlay').css('display', 'block');

	  // поиск button close popup
	  $('#js-close-popup, .popup-overlay').on('click', function(e) {
	    // $('.popup').css('display', 'none');
	    // $('.popup-overlay').css('display', 'none');
	    // or
	    $('.popup4').slideUp();
	    $('.popup-overlay').css('display', 'none');
	  });
	});
	// popup5
	$('.js-popup5').on('click', function(e) {
	  e.preventDefault();

	  // поиск popup и popup-overlay для их открытия
	  // $('.popup').css('display', 'block');
	  // $('.popup-overlay').css('display', 'block');
	  // or
	  $('.popup5').slideDown();
	  $('.popup-overlay').css('display', 'block');

	  // поиск button close popup
	  $('#js-close-popup, .popup-overlay').on('click', function(e) {
	    // $('.popup').css('display', 'none');
	    // $('.popup-overlay').css('display', 'none');
	    // or
	    $('.popup5').slideUp();
	    $('.popup-overlay').css('display', 'none');
	  });
	});

	// popup6
	$('.js-popup6').on('click', function(e) {
	  e.preventDefault();
	   $('.payment-overlay').css('display', 'block');

	  // поиск popup и popup-overlay для их открытия
	  // $('.popup').css('display', 'block');
	  // $('.popup-overlay').css('display', 'block');
	  // or
	  $('#payment').slideDown();
	  $('#close').on('click', function(e) {
	    // $('.popup').css('display', 'none');
	    // $('.popup-overlay').css('display', 'none');
	    // or
	    $('.payment-overlay').css('display', 'none');
	  });

	});



	$('.all-rules').customScroll();
	if ($(window).width()<768) {
		$('#payment').customScroll();
	}
	$(window).resize(function() {
	    $('#payment').customScroll();
	});

	// $('#agency option').mouseenter(function(e) {
	// 	// var agencybg=$('#agency :selected').css('background-color');
 //  	alert('1');
	//   $('#agency option').css('background-color', '#06c5b2');
	// });



	// $("#agency").change(function () {
 //      $("#agency option", $(this)).each(function (index) {
 //          if ($(this).is(":selected")) {
 //              $(this).css("backgroundColor", "yellow");
 //          }
 //          else {
 //              $(this).css("backgroundColor", "white");
 //          }
 //      });
 //  });


	// email
	$('.main-form').submit(function(event) {
		event.preventDefault();

		// проверка на стороне клиента формы через js что форма не пустая
		// var name = $('.name1').val();
		// var phone = $('.tel1').val();

		$.ajax({
			type: "POST",
			url: "mailer/smart.php",
			data: $(this).serialize()
		}).done(function(data) {
			$(this).find("input").val("");

			//alert("Заявка отправлена!");
			window.location.href = "../mailer/thanks.html";

			$("form").trigger("reset");

			$('.popup').slideUp();
			$('.popup-overlay').css('display', 'none');
		});

		return false;
	});


	//icon-menu
	//Just to flash the showcase, this is pure CSS
	var inputs = document.getElementsByTagName("input"),
	    labels = document.getElementsByTagName("label");

	//Checks all checkboxs triggering all CSS transitions
	function check (status) {
	  for (var x = 0; x < inputs.length; x++){
	    inputs[x].checked = status;
	  }
	  if(status){
	    var uncheck = setTimeout(function() {
	      check(false);
	    }, 2000);

	  }

	}

	// Flashes menus on load
	document.addEventListener("DOMContentLoaded", function(event) {
	  check(true);
	});
});

$(document).ready(function (){
	var ch = document.getElementById('menu36');
	$(ch).click(function(){
		if(ch.checked){
			$(".menu-mobile").show();
		}
		else {
			$(".menu-mobile").hide();
		}
	});

	//плавный переход по якорям
 	$(".menu-mobile ul li, nav ul li").click(function(){
        var link = $(this).find("a").attr("href");
        $("html, body").animate({scrollTop : $(link).offset().top},400);

        setTimeout(function(){location.hash = link;},100);
        $(".menu-mobile").hide();
        $(".menu-mobile_div input").removeAttr("checked");
		return false;
	});



	// When the user scrolls the page, execute myFunction
	window.onscroll = function() {myFunction()};

	function myFunction() {
	  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
	  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	  var scrolled = (winScroll / height) * 100;
	  document.getElementById("myBar").style.width = scrolled + "%";
	}

	var nav = $('nav');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 106) {
			nav.addClass("fixed");
		} else {
			nav.removeClass("fixed");
		}
	});

		$('#play-video').on('click', onPlayVideoIdClickListener);

		$('.video-overlay, .video-overlay-close').on('click', function(e){
		  e.preventDefault();
		  close_video();
		});

		$(document).keyup(function(e){
		  if(e.keyCode === 27) { close_video(); }
		});

		function close_video() {
		  $('.video-overlay.open').removeClass('open').find('iframe').remove();
		   $('.video-play-button').css("z-index","10");
		};

	//1st review
	$('[id="play-video-review"]').on('click', onPlayVideoReviewIdClickListener);

	$(".review_block .video-play-button").on('click', onVideoPlayButtonClassClickListener);
}); //конец ready


// Handlers

function onPlayVideoIdClickListener(e) {
    e.preventDefault();
    let url = $(this).attr('href');
    $('.video-play-button').css("z-index","0");
    $('#video-overlay').addClass('open');
    $("#video-overlay").append('<iframe width="100%" height="345" src="' + url + '" frameborder="0" allow="accelerometer; encrypted-media; autoplay;gyroscope; picture-in-picture" allowfullscreen></iframe>');
}

function onPlayVideoReviewIdClickListener(e) {
    e.preventDefault();
    let url = $(this).attr('href');
    $('.video-play-button').css("z-index","0");
    $(this).parents(".review_block").append('<iframe width="100%" height="100%" src="' + url + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
}

function onVideoPlayButtonClassClickListener(e) {
    e.preventDefault();
    $(this).parent(".play_block").hide(150).siblings("iframe").show(150);
}


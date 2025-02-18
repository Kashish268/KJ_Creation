(function ($) {
  "use strict";

  // Preloader
  $(window).on('load', function () {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function () {
        $(this).remove();
      });
    }
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Initiate the wowjs animation library
  new WOW().init();

  // Initiate superfish on nav menu
  // $('.nav-menu').superfish({
  //   animation: {
  //     opacity: 'show'
  //   },
  //   speed: 400
  // });

  // Mobile Navigation
  $(document).ready(function () {
    console.log("Document ready!");

    if ($('#nav-menu-container').length) {
        console.log("Nav menu container found! Cloning...");

        var $mobile_nav = $('#nav-menu-container').clone().prop({
            id: 'mobile-nav'
        });

        $mobile_nav.find('> ul').attr({
            'class': '',
            'id': ''
        });

        // Append the cloned menu inside navbar
        $('.header-bottom .container').append($mobile_nav);
        console.log("Mobile nav appended!");

        // Mobile nav toggle button event
        $('#mobile-nav-toggle').on('click', function (e) {
            console.log("Mobile nav toggle clicked!");

            // Prevent click event from propagating to document click handler
            e.stopPropagation();

            // If the body doesn't have 'mobile-nav-active', add it and open the menu
            
                $('body').addClass('mobile-nav-active');
                $('#mobile-nav-toggle i').removeClass('fa-bars').addClass('fa-times'); // Change to cross icon
                $('#mobile-nav').slideDown(); // Show the mobile nav
           

            // Debugging: Log current classes
            setTimeout(() => {
                let bodyClass = $('body').attr('class') || "(No classes found)";
                console.log("Current body classes:", bodyClass);
            }, 100);
        });

        $(document).click(function (e) {
          var container = $("#mobile-nav, #mobile-nav-toggle");
          // Check if the click is outside the menu and the toggle button
          if (!container.is(e.target) && container.has(e.target).length === 0) {
              // Close the menu if body has the class 'mobile-nav-active'
              if ($('body').hasClass('mobile-nav-active')) {
                  console.log("Click outside detected. Closing menu...");

                  // Remove mobile-nav-active class from the body
                  $('body').removeClass('mobile-nav-active');

                  // Revert the toggle icon to hamburger
                  $('#mobile-nav-toggle i').removeClass('fa-times').addClass('fa-bars');

                  // Slide up the menu
                  $('#mobile-nav').slideUp();

                  setTimeout(() => {
                      let bodyClass = $('body').attr('class') || "(No classes found)";
                      console.log("After closing, body classes:", bodyClass);
                  }, 100);
              }
          }
      });

    } else {
        console.log("Nav menu container NOT found!");
    }
});




  // Header scroll class
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if (! $('#header').hasClass('header-scrolled')) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');
  var main_nav_height = $('#header').outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();
  
    nav_sections.each(function() {
      var top = $(this).offset().top - main_nav_height,
          bottom = top + $(this).outerHeight();
  
      if (cur_pos >= top && cur_pos <= bottom) {
        main_nav.find('li').removeClass('menu-active menu-item-active');
        main_nav.find('a[href="#'+$(this).attr('id')+'"]').parent('li').addClass('menu-active menu-item-active');
      }
    });
  });

  // Intro carousel
  var introCarousel = $(".carousel");
  var introCarouselIndicators = $(".carousel-indicators");
  introCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "' class='active'></li>") :
    introCarouselIndicators.append("<li data-target='#introCarousel' data-slide-to='" + index + "'></li>");

    $(this).css("background-image", "url('" + $(this).children('.carousel-background').children('img').attr('src') +"')");
    $(this).children('.carousel-background').remove();
  });

  $(".carousel").swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (direction == 'left') $(this).carousel('next');
      if (direction == 'right') $(this).carousel('prev');
    },
    allowPageScroll:"vertical"
  });

  // Skills section
  // $('#skills').waypoint(function() {
  //   $('.progress .progress-bar').each(function() {
  //     $(this).css("width", $(this).attr("aria-valuenow") + '%');
  //   });
  // }, { offset: '80%'} );

  // // jQuery counterUp (used in Facts section)
  // $('[data-toggle="counter-up"]').counterUp({
  //   delay: 10,
  //   time: 1000
  // });

  // Porfolio isotope and filter
  $(document).ready(function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function() {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        var filterValue = $(this).data('filter');
        portfolioIsotope.isotope({ filter: filterValue });
    });
});


  // Clients carousel (uses the Owl Carousel library)
  $(".clients-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: { 0: { items: 2 }, 768: { items: 4 }, 900: { items: 6 }
    }
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

})(jQuery);


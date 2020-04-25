
  // ===== Scroll to Top ====
  jQuery(window).scroll(function() {
      if (jQuery(this).scrollTop() >= 500) {        // If page is scrolled more than 50px
          jQuery('.bs-totop').fadeIn(500);    // Fade in the arrow
      } else {
          jQuery('.bs-totop').fadeOut(500);   // Else fade out the arrow
      }
  });
  // jQuery('.bs-totop').click(function() {      // When arrow is clicked
  //     jQuery('body,html').animate({
  //         scrollTop : 0                       // Scroll to top of body
  //     }, 500);
  // });

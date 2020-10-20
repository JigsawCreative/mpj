/**
 * ------------------------------------------------------------------------
 * Montpelier Theme JS File
 * ------------------------------------------------------------------------
 */

 /* Slick Carousel for Case Studies */
 jQuery(function($) {
    $('.case-studies-carousel').slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 5000,
    });
 });

 /* Smooth scroll internal links */
jQuery(function($) {
  var $root = $('html, body');
  topOffset = 117; // Offset allowing for a fixed header
  $('a.scroll').click(function() {
      $root.animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top - topOffset
      }, 500);
      return false;
  });
});

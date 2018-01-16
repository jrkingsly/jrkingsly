jQuery(document).ready(function(){
	jQuery('#hamburger').on('click', function(){
		jQuery(this).toggleClass('open');
		jQuery('#nav').toggleClass('open');
	});
});

jQuery(function(){
 var shrinkHeader = 100;
  jQuery(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           jQuery('.header').addClass('shrink');
        }
        else {
            jQuery('.header').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});
jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='responsive-embed widescreen'/>");
    } else {
      jQuery(this).wrap("<div class='responsive-embed'/>");
    }
  });

});

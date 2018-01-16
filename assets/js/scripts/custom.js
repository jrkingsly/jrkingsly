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
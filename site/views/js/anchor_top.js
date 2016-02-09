// JavaScript Document

jQuery(document).ready(function(){

	// hide #back-top first
	jQuery("#anchor1").hide();
	
	// fade in #back-top
	$(function () {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 700) {
				jQuery('#anchor1').fadeIn();
			} else {
				jQuery('#anchor1').fadeOut();
			}
		});

	
	});

});


// When the Document Object Model is ready
jQuery(document).ready(function(){
	// 'catTopPosition' is the amount of pixels #cat
	// is from the top of the document
	var catTopPosition = jQuery('#header').offset().top;
	
	// When #scroll is clicked
	jQuery('#anchor1').click(function(){
		// Scroll down to 'catTopPosition'
		jQuery('html, body').animate({scrollTop:catTopPosition}, 'slow');
		// Stop the link from acting like a normal anchor link
		return false;
	});
});
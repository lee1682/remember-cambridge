(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		//Header # Button
		$( ".header_button" ).click(function() {
			console.log('clicked');
			$('.menu').toggleClass( "hide" );
		});
		//Header # Button

		// FAQS # Accordion
		$('.accordion-wrapper__item').on('click', '.accordion-wrapper__question', function(){
			if( $(this).parent('.accordion-wrapper__item').hasClass('active') ) {
				$('.accordion-wrapper__item').removeClass('active');
				console.log("removed");
			}else {
				$('.accordion-wrapper__item').removeClass('active');
				$(this).parent('.accordion-wrapper__item').addClass('active');
				console.log("added");
			}
			});	
		// FAQS # Accordion
		
	});
})(jQuery, this);



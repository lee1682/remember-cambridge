(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		console.log('js working');

		$( ".header_button" ).click(function() {
			console.log('clicked');
			$('.header_nav').toggleClass( "hide" );
		});
	});
})(jQuery, this);

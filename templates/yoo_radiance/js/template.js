/* Copyright (C) YOOtheme GmbH, YOOtheme Proprietary Use License (http://www.yootheme.com/license) */

(function($){

	$(document).bind('ready', function() {

		var config = $('body').data('config') || {};

		// Firefly effect
		if ($.firefly) {
			var images = [];

			switch(config.style){

				case "beige":
				case "black":
				case "brown":
				case "green":
				case "iceblue":
				case "orange":
				case "pink":
				case "red":
				case "white":
					
					images = [WarpThemePath+'/styles/'+config.style+'/images/firefly/spark1.png', WarpThemePath+'/styles/'+config.style+'/images/firefly/spark2.png'];
					break;

				default:
					images = [WarpThemePath+'/images/firefly/spark1.png', WarpThemePath+'/images/firefly/spark2.png'];
			}

			$.firefly({ "images": images, total: 75 });
		}
		
		// Accordion menu
		$('.menu-sidebar').accordionMenu({ mode:'slide' });

		// Dropdown menu
		$('#menu').dropdownMenu({ mode: 'slide', dropdownSelector: 'div.dropdown'});

		// Smoothscroller
		$('a[href="#page"]').smoothScroller({ duration: 500 });

		// Fix Browser Rounding
		$('.grid-block').matchWidth('.grid-h');

		// Social buttons
		$('article[data-permalink]').socialButtons(config);

		// Match height of div tags
		var matchHeight = function(){
			$('#top-a .grid-h').matchHeight('.deepest');
			$('#top-b .grid-h').matchHeight('.deepest');
			$('#bottom-a .grid-h').matchHeight('.deepest');
			$('#bottom-b .grid-h').matchHeight('.deepest');
			$('#innertop .grid-h').matchHeight('.deepest');
			$('#innerbottom .grid-h').matchHeight('.deepest');
			$('#maininner, #sidebar-a, #sidebar-b').matchHeight();
		};

		matchHeight();

		$(window).bind("load", matchHeight);

	});
	
})(jQuery);
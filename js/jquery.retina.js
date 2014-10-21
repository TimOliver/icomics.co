/*
jquery.retina.js
jQuery plugin for detecting when the user's monitor is HiDPI and
subsequently asyncrnously loading 2x image assets where needed.

Originally developed by Troy Mcilvena (http://www.troymcilvena.com)
Modifications by Tim Oliver (http://timoliver.com.au)
*/

(function($) {
	var settings = {'retinaSuffix': '-2x'};
	var retinaListenerAttached	= false;
	var retinaSelectors 		= new Array();

	var windowPixelRatioChanged = function()
	{
		//If the window context changed, re-do the retina processing
		for (i=0; i<retinaSelectors.length; i++)
			$(retinaSelectors[i]).retina();
	}

	// A seperate function to globally change the format of the Retina suffix
	$.retinaOptions = function(retinaSuffix) {
		if (retinaSuffix) { jQuery.extend(settings, { 'retinaSuffix': retinaSuffix } ) };
	};

	//when a selector query is performed, save a copy that can be triggered later
	$.fn.retina = function() {
		//save the selector (if it doesn't already exist in the list)
		if (retinaSelectors.indexOf(this.selector))
			retinaSelectors.push(this.selector);

		//if not added yet, add an event listener for when the window pixel ratio changes
		if (retinaListenerAttached==false)
		{
			retinaListener = window.matchMedia('(-webkit-device-pixel-ratio:1)').addListener(windowPixelRatioChanged);
			retinaListenerAttached = true;
		}

		// Set default retina file part to '-2x'
		// Eg. some_image.jpg will become some_image-2x.jpg		
		this.each(function(index, element) { 
			if (!$(element).attr('src')) 
				return;
			
			var checkForRetinaQuery = new RegExp("(.+)("+settings['retinaSuffix']+"\\.\\w{3,4})");
			var checkForRetina = checkForRetinaQuery.test($(element).attr('src'));

			if (window.devicePixelRatio >= 2) {
				//Return if URL is already retina
				if (checkForRetina) 
					return;

				//create the new URL with the Retina component inserted
				var new_image_src = $(element).attr('src').replace(/(.+)(\.\w{3,4})$/, "$1"+ settings['retinaSuffix'] +"$2");
				
				//check if we've already requested Retina content in the past
				var alreadyRequestedRetinaContent = $(element).data('alreadyRequestedRetinaContent');
				var retinaContentWasFound = $(element).data('retinaContentWasFound');
				if (!alreadyRequestedRetinaContent)
				{
					$.ajax({url: new_image_src, type: "HEAD", success: function() {
						$(element).attr('src', new_image_src);
						$(element).data('retinaContentWasFound', true);
					}});
				
					$(element).data('alreadyRequestedRetinaContent', true);
				}
				else if ($(element).data('retinaContentWasFound')==true)
				{
					$(element).attr('src', new_image_src);
				}
			}
			else
			{
				//return if URL is already not retina
				if (!checkForRetina)
					return;

				//strip out the retina component
				var new_image_src = $(element).attr('src').replace(settings['retinaSuffix']+".", ".");
				//set the image back to its original URL
				$(element).attr('src', new_image_src);
			}
		});

		return this;
	}
})(jQuery);

/*
	Author: Troy Mcilvena (http://troymcilvena.com), Tim Oliver (http://timoliver.com.au)
	Twitter: @mcilvena, @TimOliverAU
	Date: 19 June 2013
	Version: 1.4
	
	Revision History:
		1.0 (23/08/2010)	- Initial release.
		1.1 (27/08/2010)	- Made plugin chainable
		1.2 (10/11/2010)	- Fixed broken retina_part setting. Wrapped in self executing function (closure)
		1.3 (29/10/2011)	- Checked if source has already been updated (via mattbilson)
		1.4 (19/06/2013)	- Renamed 'part' to suffix. Implemented pixel ratio event listener. (-Tim)
*/

(function( $ ){
	$.fn.retina = function(retina_suffix) {
		// Set default retina file part to '-2x'
		// Eg. some_image.jpg will become some_image-2x.jpg
		var settings = {'retina_suffix': '-2x'};
		if(retina_suffix) jQuery.extend(settings, { 'retina_suffix': retina_suffix });

		if(window.devicePixelRatio >= 2) {
			this.each(function(index, element) {
				if(!$(element).attr('src')) return;

				var checkForRetina = new RegExp("(.+)("+settings['retina_suffix']+"\\.\\w{3,4})");
				if(checkForRetina.test($(element).attr('src'))) return;

				var new_image_src = $(element).attr('src').replace(/(.+)(\.\w{3,4})$/, "$1"+ settings['retina_suffix'] +"$2");
				$.ajax({url: new_image_src, type: "HEAD", success: function() {
					$(element).attr('src', new_image_src);
				}});
			});
		}
		return this;
	}
})( jQuery );

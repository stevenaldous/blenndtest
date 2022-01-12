/************
 *
 * Video Player Module
 *
 ***********/

import jQuery from 'jquery';
import Swiper from 'swiper/swiper-bundle.min.js';

(($) => {

	$.fn.videoPlayerComponent = function() {
		return this.each(function() {
			let $this = $(this);

			if( $this.length > 0 ){

				new MediaElementPlayer($this[0], {  // eslint-disable-line no-undef
					clickToPlayPause :true,
					autoRewind : false,
					stretching : "responsive",

					success: function(mediaElement, originalNode, instance) { // eslint-disable-line no-unused-vars
						// Player Loading Success
					}
				});
			}
		});
	};

	$(document).ready(function(){
		$('.video-player__video-media').videoPlayerComponent();
	});


})(jQuery);

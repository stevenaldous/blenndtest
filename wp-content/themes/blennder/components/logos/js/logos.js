/************
 *
 * Logo Scroller Module
 *
 ***********/
import jQuery from 'jquery';
import Swiper from 'swiper/swiper-bundle.min.js';
(($) => {

	$('.logos__slider').each(function (){
		var $this = $(this);
		// Get the json encoded config attribute with swiper options
		var config = $this.data('config');
		var id =  $this.attr('id');
		if ($this.find('.swiper-slide').length > 0) {
			// // Set up the default options
			var defaults = {
				setWrapperSize : true,
				slidesPerView: 2,
				spaceBetween: 10,
				slidesPerGroup: 1,
				allowTouchMove: false,
				freeMode: true,
				watchOverflow: true,
				breakpointsInverse: true,
				breakpoints: {
					768: {
						slidesPerView: 4,
						spaceBetween: 40
					},
					992: {
						slidesPerView: 5,
						spaceBetween: 50
					}
				}
			};
			// Overwrite the default options with the dynamic config variable
			var opts = $.extend(true, defaults, config);
			new Swiper('#'+id, opts);
		}
	});

})(jQuery);

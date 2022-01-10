/************
 *
 * Slider Component
 *
 ***********/

import jQuery from 'jquery';
import Swiper from 'swiper/swiper-bundle.min.js';

(($) => {

	$('.slider__slider').each(function (){

		var $this = $(this);
		let slidesPerView = 1;
		let spaceBetween = 0;
		if( $(this).hasClass('slider--preview-next') ) {
			slidesPerView = 'auto';
			spaceBetween = 10;
		}
		var id =  $this.attr('id');
		var config = $this.data('config');
		if ($this.find('.swiper-slide').length) {
			var defaults = {
				spaceBetween : spaceBetween,
				slidesPerView : slidesPerView,
				setWrapperSize : true,
				speed: 1000,
				watchOverflow: true,
				navigation: {
					nextEl: '#'+id+' .swiper-button-next',
					prevEl: '#'+id+' .swiper-button-prev',
				},
				pagination: {
					el: '#'+id+' .swiper-pagination',
					clickable: true,
				},
				breakpointsInverse: true,
				breakpoints: {
					768: {
						allowTouchMove: false
					},
				}
			};
			// Overwrite the default options with the dynamic config variable
			var opts = $.extend(true, defaults, config);
			new Swiper('#'+id, opts);
		}
	});


})(jQuery);

/************
 *
 * Image Gallery Component
 *
 ***********/

import jQuery from 'jquery';
import Swiper from 'swiper/swiper-bundle.min.js';
import Masonry from 'masonry-layout';

(($) => {

	// Masonry Layout
	$('.image-gallery .grid').each(function (){
		new Masonry( $(this)[0], {
			itemSelector: '.grid-item',
			columnWidth: '.grid-item',
			gutter: '.grid-gutter',
			transitionDuration: '0.15s',
			percentPosition: true,
			stagger: 10,
			horizontalOrder: true
		});
	});

	// Carousel & Slider Layouts
	$('.image-gallery__slider, .image-gallery__carousel').each(function (){
		var $this = $(this);
		var id =  $this.attr('id');
		var wrapperId =  $this.closest('.image-gallery__wrapper').attr('id');
		// Get the json encoded config attribute with swiper options
		var config = $this.data('config');

		if ($this.find('.swiper-slide').length > 0) {
			// Set up the default options
			var defaults = {
				setWrapperSize : true,
				watchOverflow: true,
				watchSlideVisibility: true,
				speed: 800,
				navigation: {
					nextEl: '#'+wrapperId+' .swiper-button-next',
					prevEl: '#'+wrapperId+' .swiper-button-prev',
				},
				pagination: {
					el: '#'+wrapperId+' .swiper-pagination',
					clickable: true,
				}
			};
			// Overwrite the default options with the dynamic config variable
			var opts = $.extend(true, defaults, config);
			new Swiper('#'+id, opts);
		}
	});

})(jQuery);
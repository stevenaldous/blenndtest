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

	$('.video-player__slider').each(function (){
		var $this = $(this);
		var id = $this.attr('id');
		var wrapperId =  $this.closest('.video_player__slider-wrapper').attr('id');
		// Get the json encoded config attribute with swiper options
		var config = $this.data('config');

		var doPartialSlide = function(){
			if((this.params.slidesPerView % 1 !== 0)) {
				let partialSlideIndex = this.activeIndex + ( Math.ceil(this.params.slidesPerView) - 1 );
				$(this.$el).find('.swiper-slide').removeClass('swiper-slide-partial');
				$(this.slides[partialSlideIndex]).addClass('swiper-slide-partial');
			}else {
				$(this.$el).find('.swiper-slide').removeClass('swiper-slide-partial');
			}
		};

		if ($this.find('.swiper-slide').length > 0) {
			// Set up the default options
			if(config.loop){
				config.loopAdditionalSlides = 1;
			}
			var defaults = {
				setWrapperSize : true,
				slidesPerView: 1,
				slidesPerGroup: 1,
				spaceBetween: 0,
				speed: 750,
				allowTouchMove: true,
				watchOverflow: true,
				watchSlidesVisibility: true,
				navigation: {
					nextEl: '#'+wrapperId+' .swiper-button-next',
					prevEl: '#'+wrapperId+' .swiper-button-prev',
				},
				pagination: {
					el: '#'+wrapperId+' .swiper-pagination',
					clickable: true,
				},
				breakpointsInverse: true,
				breakpoints: {
					768: {
						slidesPerView: 1,
						allowTouchMove: false
					},
					1020: {
						slidesPerView: 1,
						allowTouchMove: false
					}
				},
				on : {
					init: function(){
						doPartialSlide.call(this);
					},
					slideChangeTransitionStart: function(){
						doPartialSlide.call(this);
						$(this.slides[this.previousIndex]).find('video')[0].pause();
					},
					breakpoint: function() {
						doPartialSlide.call(this);
					},
					reachEnd : function(){
						$(this.slides[this.slides.length-1]).removeClass('swiper-slide-partial');
					},
					fromEdge: function(){
						if ( ! this.isEnd ) {
							$(this.slides[this.slides.length-1]).addClass('swiper-slide-partial');
						}
					}
				}
			};
			// Overwrite the default options with the dynamic config variable
			var opts = $.extend(true, defaults, config);
			new Swiper('#'+id, opts);
		}
	});

})(jQuery);

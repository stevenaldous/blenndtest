/************
 *
 * Team Module
 *
 ***********/

import jQuery from 'jquery';
import Swiper from 'swiper/swiper-bundle.min.js';

(($) => {

	$('.team__slider').each(function (){
		var $this = $(this);
		var wrapperId =  $this.closest('.team__slider-wrapper').attr('id');
		var id = $this.attr('id');
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
			var defaults = {
				setWrapperSize : true,
				slidesPerView: 1,
				slidesPerGroup: 1,
				spaceBetween: 0,
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
						slidesPerView: 2,
						allowTouchMove: false
					},
					1020: {
						slidesPerView: 3,
						allowTouchMove: false
					}
				},
				on : {
					init: function(){
						doPartialSlide.call(this);
					},
					slideChange: function(){
						doPartialSlide.call(this);
					},
					breakpoint: function() {
						doPartialSlide.call(this);
					},
					fromEdge: function(){
						if( ! this.isEnd ) {
							$(this.slides[this.slides.length-1]).addClass('swiper-slide-partial');
						}
					},
					reachEnd : function(){
						$(this.slides[this.slides.length-1]).removeClass('swiper-slide-partial');
					},
				}
			};
			// Overwrite the default options with the dynamic config variable
			var opts = $.extend(true, defaults, config);
			new Swiper('#'+id, opts);
		}
	});



	// $('#teamModal').on('show.bs.modal', function (event) {
	$('.js-team-modal').on('click', function (event) {
		event.preventDefault();
		var $el = $(event.currentTarget);
		var id = $el.data('id');

		$.ajax({
			type: 'GET',
			url: '/wp-json/team/v1/team_get_member',
			dataType: 'json',
			data: {
				id: id
			},
			success: function(data) {
				let $modal = $('#teamModal');
				// Swap the image background image property on the modal img
				$modal.find('.modal-img').css('background-image', 'url('+data.post_thumbnail+')');
				// Update the modal title
				$modal.find('.modal-title').text(data.post_title);

				// Create the sub header element content
				let sub_header = '';
				if ( data.post_meta.position !== null ) {
					sub_header = '<span class="modal-sub-header">'+data.post_meta.position+'</span>';
				}
				if ( data.post_meta.linkedin !== null ) {
					sub_header += '<a class="team__social h5" href="'+data.post_meta.linkedin+'" target="_blank"><i class="fab fa-linkedin"></i></a>';
				}
				$modal.find('.modal-meta').html(sub_header);

				//Trick to decode the encoded content.
				let content = $('<textarea />').html(data.post_content).text();
				$modal.find('.modal-body').html(content);

				// Show the modal
				$('#teamModal').modal('show');
			},
			error: function(request, error) {
				console.log(error);
			}
		});
	});


})(jQuery);
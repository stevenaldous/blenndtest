/************
 *
 * CTA Component
 *
 ***********/

import jQuery from 'jquery';

(($) => {

	$.fn.ctaComponent = function() {
		return this.each(function() {
			let player;
			let initialLoad = true;
			let $this = $(this);
			let $pause_btn = $this.find('.cta__video-pause');

			let mql_video_handler = (mql) =>{
				var data = player.$media.data(),
					newSrc = [];
				if ( mql.matches ) {
					if( 'mp4Mobile' in data ) {
						newSrc.push({src: data.mp4Mobile, type: 'video/mp4'});
					}
					if( 'webmMobile' in data ) {
						newSrc.push({src: data.webmMobile, type: 'video/webm'});
					}
					if( newSrc.length > 0 ){
						player.setSrc(newSrc);
					}
				} else if ( mql.matches === false && false === initialLoad) {
					if( 'mp4' in data ) {
						newSrc.push({src: data.mp4, type: 'video/mp4'});
					}
					if( 'webm' in data ) {
						newSrc.push({src: data.webm, type: 'video/webm'});
					}
					if( newSrc.length > 0 ){
						player.setSrc(newSrc);
					}
				}
				initialLoad = false;
			};

			if( $this.find('#cta__video-media').length > 0 ){
				player = new MediaElementPlayer('cta__video-media', { // eslint-disable-line no-undef
					features : [],
					clickToPlayPause :true,
					autoRewind : false,
					stretching : "responsive",

					success: function(mediaElement, originalNode, instance) { // eslint-disable-line no-unused-vars
						// Video Loading Success
						$('.mejs-container.mejs-video').attr('tabindex', -1);
						let $videoEl = $this.find('#hero__video-media')[0];

						$videoEl.addEventListener('playing', function() {
							$('#western').fadeOut(300).addClass('sr-only');
							setTimeout(function(){
								$this.find('.hero__video').addClass('video-loaded');
							},300);
							$this.removeClass('cta--video-paused');
						});

						$videoEl.addEventListener('pause', function() {
							$this.addClass('cta--video-paused');
						});
					}
				});

				$pause_btn.on('click keypress', function(e) {
					if ( e.type === 'keypress' && e.which === 32 ) {
						e.preventDefault();
					}
					if( ! player.paused ){
						player.pause();
						$(this).find('i').removeClass('fa-pause-circle');
						$(this).find('i').addClass('fa-play-circle');
					}else {
						player.play();
						$(this).find('i').removeClass('fa-play-circle');
						$(this).find('i').addClass('fa-pause-circle');
					}
				});
				//Media query listener for swapping desktop/mobile video sources
				let mql = window.matchMedia("(max-width: 480px)");
				mql.addListener(mql_video_handler);
				mql_video_handler(mql);
			}
		});
	};

	$(document).ready(function(){
		$('.cta').ctaComponent();
	});


})(jQuery);

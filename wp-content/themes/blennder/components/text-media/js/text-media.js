/************
 *
 * Text Media Component
 *
 ***********/

import jQuery from 'jquery';

(($) => {

	$.fn.textMedia = function() {
		return this.each(function() {
			let player;
			let $this = $(this);
			let $pause_btn = $this.find('.text-media__video-pause');

			if( $this.find('#text-media__video-media').length > 0 ){
				player = new MediaElementPlayer('text-media__video-media', { // eslint-disable-line no-undef
					features : [],
					clickToPlayPause :true,
					autoRewind : false,
					stretching : "responsive",

					success: function(mediaElement, originalNode, instance) { // eslint-disable-line no-unused-vars
						// Video Loading Success
						$this.find('.mejs-container.mejs-video').attr('tabindex', -1);
					}
				});

				$pause_btn.on('click keypress', function(e) {
					e.preventDefault();
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
			}
		});
	};

	$(document).ready(function(){
		$('.text-media').textMedia();
	});


})(jQuery);

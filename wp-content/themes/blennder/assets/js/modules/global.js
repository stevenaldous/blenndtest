import jQuery from 'jquery';
import imagesLoaded from 'imagesloaded';

(($) => {

	imagesLoaded( { background: true }, function() {
		$('body').addClass('loaded');
		setTimeout(function(){
			$('#loader-wrapper').remove();
		}, 1500);
	});

	$("[data-target='#navbarDropdownMenu'").click(function(){
		$('body').toggleClass('mobile-menu-expanded');
	});

	const component_rendered = function(mql) {
		$('.component').each(function(){
			let $this = $(this);
			let data = $this.data();
			for( var key in data ) {
				if(
					'background_image' === key &&
					mql.matches &&
					null != data[ 'background_image_mobile' ]
				) {
					$this.css('background-image',data['background_image_mobile']);
					continue;
				}
				if( key.indexOf( 'background' ) >= 0 ) {
					let k = key.replaceAll( '_', '-' );
					if( 'background-custom-size' === k ) {
						k = 'background-size';
					}
					$this.css(k,data[key]);
				}
			}
		});
	};
	var mql = window.matchMedia("(max-width: 768px)");
	mql.addListener(component_rendered);
	component_rendered(mql);
	document.addEventListener('component-rendered', component_rendered, false);

})(jQuery);

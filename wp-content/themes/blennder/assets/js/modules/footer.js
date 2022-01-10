/************
 *
 * Global Footer
 *
 ***********/

import jQuery from 'jquery';

(($) => {

	var $footer = $('.footer__main'),
		$footerParents = $footer.find('.footer__menu-header');

	$(document).ready(function(){
		var mql = window.matchMedia("(max-width: 768px)");
		mql.addListener(footer_mql);
		footer_mql(mql);
	});

	var handleFooterMobile = function(e) {
		if ( e.type === 'keypress' && e.which !== 13 ) {
			return;
		}
		e.preventDefault();
		var $this = $(this);
		var $subMenu = $this.siblings().not('script');
		if(!$this.hasClass('open')){
			$this.addClass('open');
			$subMenu.slideDown();
		}else {
			$this.removeClass('open');
			$subMenu.slideUp();
		}
	};

	var handleFooterDesktop = function(e) {
		e.preventDefault();
	};


	function footer_mql(mql){
		if ( mql.matches ) {
			$footerParents.on('keypress click', handleFooterMobile);
			$footerParents.off('keypress click', handleFooterDesktop);
		} else {
			$footerParents.off('keypress click', handleFooterMobile);
			$footerParents.on('keypress click', handleFooterDesktop);
			$footerParents.removeClass('open');
			$footerParents.siblings().removeAttr('style');
		}
	}

})(jQuery);

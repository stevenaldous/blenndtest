import jQuery from 'jquery';

(($) => {

	$("[data-target='#secondary'").click(function(){
		$('body').toggleClass('menu-open');
	});

})(jQuery);

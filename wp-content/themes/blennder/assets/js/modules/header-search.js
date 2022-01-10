/************
 *
 * Header Search
 *
 ***********/

import jQuery from 'jquery';

(($) => {
	$('.header-search').click(function(){
		$(this).toggleClass('active');
		$('#header-search').toggle("slow");
	});

	$('.btn-close').click(function(){
		$(this).parent().toggle("slow");
	});

	$(document).click(function(event) { 
		var $target = $(event.target);
		if(!$target.closest('.header-search, #header-search').length && $('#header-search').is(":visible")) {
			$('#header-search').toggle("slow");
			$('.header-search').removeClass('active');
		}        
	});

	$('.menu-item-has-children').hover(function(){
		if($('#header-search').is(":visible")) {
			$('#header-search').toggle("slow");
			$('.header-search').removeClass('active');
		}
	});
})(jQuery);

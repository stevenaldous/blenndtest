import jQuery from 'jquery';

(($) => {

	$('.menu-btn-wrap').click(function(){
		$(this).toggleClass('open');
		$(this).find('.hamburger-toggler').toggleClass('closed-burger');
	});

	const $dropdown = $(".dropdown");
	const $dropdownToggle = $(".dropdown-toggle");
	const $dropdownMenu = $(".dropdown-menu");
	const showClass = "show";
	$(window).on("load resize", function() {
		if (this.matchMedia("(min-width: 768px)").matches) {
		$dropdown.hover(
			function() {
				const $this = $(this);
				$this.addClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "true");
				$this.find($dropdownMenu).addClass(showClass);
			},
				function() {
				const $this = $(this);
				$this.removeClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "false");
				$this.find($dropdownMenu).removeClass(showClass);
			}
		);
		} else {
			$dropdown.off("mouseenter mouseleave");
		}
		if ($(window).width() < 768) {
			$(".dropdown-toggle").attr('data-toggle', 'dropdown');
		} else {
			$(".dropdown-toggle").removeAttr('data-toggle dropdown');
		}
	});
	$('.mobile-nav .dropdown-item').click(function(){
		$('.mobile-nav .navbar-collapse').toggleClass('show');
		$(".navbar-toggler").toggleClass('collapsed');
	});

	function navigation_mql(mql) {
		if ( mql.matches ) {
			// Mobile
			let ll = $('#login-links');
			let contact = $('#header .mobile-contact');
			$('#main-menu-wrapper').append(ll);
			$('#main-menu-wrapper').append(contact);
		}
		else {
			// Desktop
			let ll = $('#login-links');
			let contact = $('#header .mobile-contact');
			$('#preheader .container').append(ll);
			contact.hide();
		}
	}

	//Media query listener for swapping desktop/mobile video sources
	var mql = window.matchMedia("(max-width: 768px)");
	mql.addListener(navigation_mql);
	navigation_mql(mql);
})(jQuery);

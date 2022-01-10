import jQuery from 'jquery';

(($) => {

	$('[data-blog-view]').on('click', function(e){
		e.preventDefault();
		let $this = $(this),
			view = $this.data('blog-view'),
			$feedEl = $('.blog-feed');

		// If the view is already active, dont continue
		if( $this.hasClass('active') ) return;

		//Update the active class on the toggle buttons
		$('[data-blog-view]').removeClass('active');
		$this.addClass('active');

		// Add or remove the list view class to the blog-feed element
		if(view === 'list') {
			$feedEl.addClass('blog-feed--list-view');
		}else if(view === 'grid'){
			$feedEl.removeClass('blog-feed--list-view');
		}

	});

})(jQuery);

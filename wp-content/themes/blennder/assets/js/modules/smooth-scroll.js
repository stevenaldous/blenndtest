import jQuery from 'jquery';

function parseURL(url) {
	var a = document.createElement('a');
	a.href = url;
	return {
			source: url,
			protocol: a.protocol.replace(':',''),
			host: a.hostname,
			port: a.port,
			query: a.search,
			params: (function(){
					var ret = {},
					seg = a.search.replace(/^\?/,'').split('&'),
					len = seg.length, i = 0, s;
					for (;i<len;i++) {
							if (!seg[i]) { continue; }
							s = seg[i].split('=');
							ret[s[0]] = s[1];
					}
					return ret;
			})(),
			/* eslint-disable */
			file: (a.pathname.match(/\/([^\/?#]+)$/i) || [,''])[1],
			hash: a.hash.replace('#',''),
			path: a.pathname.replace(/^([^\/])/,'/$1'),
			relative: (a.href.match(/tps?:\/\/[^\/]+(.+)/) || [,''])[1],
			segments: a.pathname.replace(/^\//,'').split('/')
			/* eslint-enable */
	};
}

(($) => {

	// Before the document is ready, get the hash
	var target = window.location.hash;

	target = target.replace('#', '');
	if(target) {
		history.replaceState("", document.title, window.location.pathname);
		let a = document.getElementById( target );
		smoothScroll('#'+target,a.outerHTML);
	}

	function smoothScroll(hash, link) {
		var target = $(hash),
			offset = 0;

		if(link !== null && typeof $(link).data('scroll-offset') !== 'undefined') {
			offset = $(link).data('scroll-offset');
		}

		if (target.length) {
			$('html').animate({
				scrollTop: target.offset().top - offset
			}, 1000, function () {
				target.focus();
				if (target.is(":focus")){ //checking if the target was focused
					return false;
				}else{
					target.attr('tabindex','-1'); //Adding tabindex for elements not focusable
					target.focus(); //Setting focus
				}
			});
		}
	}

	// Select all links with hashes
	$('body').on('click', 'a[href*=\\#]:not([href=\\#])', function (e) {
		let url = parseURL($(this).attr('href'));
		let cur = parseURL(location.href);
		if( cur.path !== url.path ){
			window.location.replace( $(this).attr('href'));
			return;
		}

		e.preventDefault();

		// Abort if element has a data-toggle attribute, tabs use data-toggle too so removed the tabs conditional
		let $dataToggle = $(this).attr('data-toggle');
		if ( typeof($dataToggle) != "undefined" && $dataToggle.length > 0 ) return;

		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
			var hash = this.hash;
			smoothScroll(hash, this);
		}
	});

})(jQuery);

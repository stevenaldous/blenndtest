<article id="components__tabs">
	<div class="sg-example">
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="#">Tab 1</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Tab 2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Tab 3</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Tab 4</a>
			</li>
		</ul>
		<?php /*echo do_shortcode(
			'[tabs]
				[tab title="Tab 1"]Tab Content 1[/tab]
				[tab title="Tab 2"]Tab Content 2[/tab]
				[tab title="Tab 3"]Tab Content 3[/tab]
				[tab title="Tab 4"]Tab Content 4[/tab]
			[/tabs]' ); */?>

	</div>
	<div class="sg-code">
		<?php
		echo code_output(
			'<!-- WP SHORTCODE -->' . PHP_EOL .
			'[tabs]' . PHP_EOL .
			'	[tab title="Tab 1"]Tab Content 1[/tab]' . PHP_EOL .
			'	[tab title="Tab 2"]Tab Content 2[/tab]' . PHP_EOL .
			'	[tab title="Tab 3"]Tab Content 3[/tab]' . PHP_EOL .
			'	[tab title="Tab 4"]Tab Content 4[/tab]' . PHP_EOL .
			'[/tabs]' . PHP_EOL . PHP_EOL .
			'<!-- HTML -->' . PHP_EOL .
			'<ul class="nav nav-tabs">' . PHP_EOL .
			'	<li class="nav-item">' . PHP_EOL .
			'		<a class="nav-link active" href="#">Tab 1</a>' . PHP_EOL .
			'	</li>' . PHP_EOL .
			'	<li class="nav-item">' . PHP_EOL .
			'		<a class="nav-link" href="#">Tab 2</a>' . PHP_EOL .
			'	</li>' . PHP_EOL .
			'</ul>'
		);
		?>
	</div>
</article>
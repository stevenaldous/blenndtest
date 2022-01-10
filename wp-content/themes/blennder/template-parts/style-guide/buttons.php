<article id="buttons__solid">
	<h4>Solid Buttons</h4>
	<p>The <code>.btn</code> class can be used on an link, button or form submit element.</p>
	<div class="sg-example">
		<a href="#" class="btn btn-primary mb-1">Primary</a>
		<a href="#" class="btn btn-secondary mb-1">Secondary</a>
		<a href="#" class="btn btn-tertiary mb-1">Tertiary</a>
		<a href="#" class="btn btn-success mb-1">Success</a>
		<a href="#" class="btn btn-warning mb-1">Warning</a>
		<a href="#" class="btn btn-danger mb-1">Danger</a>
		<a href="#" class="btn btn-light mb-1">Light</a>
		<a href="#" class="btn btn-dark mb-1">Dark</a>
	</div>
	<div class="sg-code">
		<?php echo code_output(
			'<!-- HTML -->' . PHP_EOL .
			'<a href="#" class="btn btn-primary">Learn more</a>' . PHP_EOL . PHP_EOL .
			'<!-- WP SHORTCODE -->' . PHP_EOL .
			'[button url="http://western.com" text="Learn More" style="primary"]'
		); ?>
	</div>
</article>

<article id="buttons__outline">
	<h4>Outline Buttons</h4>
	<div class="sg-example bg-gray-600">
		<div class="">
			<a href="#" class="btn btn-outline-primary mb-1">Primary</a>
			<a href="#" class="btn btn-outline-secondary mb-1">Secondary</a>
			<a href="#" class="btn btn-outline-tertiary mb-1">Tertiary</a>
			<a href="#" class="btn btn-outline-success mb-1">Success</a>
			<a href="#" class="btn btn-outline-warning mb-1">Warning</a>
			<a href="#" class="btn btn-outline-danger mb-1">Danger</a>
			<a href="#" class="btn btn-outline-light mb-1">Light</a>
			<a href="#" class="btn btn-outline-dark mb-1">Dark</a>
		</div>
	</div>
	<div class="sg-code">
		<?php echo code_output( '<a href="#" class="btn btn-outline-light">Learn More</a>' ); ?>
	</div>
</article>

<article id="buttons__sizes">
	<h4>Buttons Sizes</h4>
	<div class="sg-example">
		<p><a href="#" class="btn btn-primary btn-sm">Small</a></p>
		<p><a href="#" class="btn btn-primary">Default</a></p>
		<p><a href="#" class="btn btn-primary btn-lg">Large</a></p>
	</div>
	<div class="sg-code">
		<?php echo code_output(
			'<a href="#" class="btn btn-primary btn-sm">Small</a>' . PHP_EOL .
			'<a href="#" class="btn btn-primary btn-lg">Large</a>'
		); ?>
	</div>
</article>

<article id="buttons__text">
	<h4>Text Links</h4>
	<div class="sg-example">
		<p class="p-2"><a href="#" class="btn btn-text">Text Link</a></p>
		<p class="bg-tertiary p-2"><a href="#" class="btn btn-text text-white">Text Link White</a></p>
	</div>
	<div class="sg-code">
		<?php echo code_output(
			'<a href="#" class="btn btn-text">Text Link</a>' . PHP_EOL .
			'<a href="#" class="btn btn-text btn-text-white">Text Link White</a>'
		 ); ?>
	</div>
</article>

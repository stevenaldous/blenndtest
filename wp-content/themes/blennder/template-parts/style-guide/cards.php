<article id="cards__default">
	<h4>Basic Card</h4>
	<div class="sg-example">
		<div class="cards py-0">
			<div class="card" style="max-width:350px;">
				<div class="card-body">
					<h3 class="card-title">Card Title</h3>
					<h4 class="card-subtitle">Card Subtitle</h4>
					<p class="card-text">Card text content with two lines for long descriptions.</p>
					<a class="card-link btn btn-primary stretched-link mt-auto" href="#" title="Button" target="_self" tabindex="0">Button</a>
				</div>
			</div>
		</div><!-- .cards -->
	</div>
	<div class="sg-code">
		<?php
			echo code_output(
				'<div class="card">' . PHP_EOL .
				'	<div class="card-body">' . PHP_EOL .
				'		<h3 class="card-title">...</h3>' . PHP_EOL .
				'		<h4 class="card-subtitle">...</h4>' . PHP_EOL .
				'		<p class="card-text">...</p>' . PHP_EOL .
				'		<a href="#" class="card-link btn btn-primary stretched-link mt-auto" title="...">...</a>' . PHP_EOL .
				'	</div>' . PHP_EOL .
				'</div>'
			);
		?>
	</div><!-- .sg-code -->
</article>

<article id="cards__default">
	<h4>Image Card - Top</h4>
	<div class="sg-example">
		<div class="card" style="max-width:350px;">
			<img width="400" height="400" src="https://picsum.photos/350/205" class="card-img-top" alt="Image Card">
			<div class="card-body">
				<h3 class="card-title">Card Title</h3>
				<h4 class="card-subtitle">Card Subtitle</h4>
				<p class="card-text">Card text content with two lines for long descriptions.</p>
				<a class="card-link btn btn-primary stretched-link mt-auto" href="#" title="Button" target="_self" tabindex="0">Button</a>
			</div>
		</div>
	</div>
	<div class="sg-code">
		<?php
			echo code_output(
				'<div class="card">' . PHP_EOL .
				'	<img src="..." class="card-img-top" alt="...">' . PHP_EOL .
				'	<div class="card-body">' . PHP_EOL .
				'		<h3 class="card-title">...</h3>' . PHP_EOL .
				'		<h4 class="card-subtitle">Card Subtitle</h4>' . PHP_EOL .
				'		<p class="card-text">...</p>' . PHP_EOL .
				'		<a class="card-link btn btn-primary stretched-link mt-auto" href="#" title="...">...</a>' . PHP_EOL .
				'	</div>' . PHP_EOL .
				'</div>'
			);
		?>
	</div>
</article>

<article id="cards__img">
	<h4>Image Card - Overlay</h4>
	<div class="sg-example">
		<div class="card card--img-cover" style="max-width:350px;">
			<img width="400" height="400" src="https://picsum.photos/350" class="card-img" alt="Image Card">
			<div class="card-img-overlay">
				<h3 class="card-title">Card Subitle</h3>
				<h4 class="card-subtitle">Card Title</h4>
				<p class="card-text">Card text content with two lines for long descriptions.</p>
				<a class="card-link btn btn-primary stretched-link" href="#" title="Button" target="_self" tabindex="0">Button</a>
			</div>
		</div>
	</div>
	<div class="sg-code">
		<?php
			echo code_output(
				'<div class="card card--img-cover">' . PHP_EOL .
				'	<img src="..." class="card-img" alt="...">' . PHP_EOL .
				'	<div class="card-img-overlay">' . PHP_EOL .
				'		<h3 class="card-title">...</h3>' . PHP_EOL .
				'		<h4 class="card-subtitle">...</h4>' . PHP_EOL .
				'		<p class="card-text">...</p>' . PHP_EOL .
				'		<a class="card-link btn btn-primary stretched-link" href="#" title="...">...</a>' . PHP_EOL .
				'	</div>' . PHP_EOL .
				'</div>'
			);
		?>
	</div>
</article>
<article id="component__accordions">
	<div class="sg-example">
		<div class="accordion" id="sg-accordion">
			<div class="accordion__card card">
				<div class="card-header" id="heading-01">
					<a href="#" class="accordion__btn btn btn-block collapsed" data-toggle="collapse" data-target="#target-01" aria-expanded="true" aria-controls="#target-01">
						Accordion Heading 1
						<i class="fal fa-plus float-right icon icon-collapsed"></i>
						<i class="fal fa-minus float-right icon icon-collapse"></i>
					</a>
				</div>
				<div id="target-01" class="collapse" aria-labelledby="heading-01" data-parent="#sg-accordion">
					<div class="card-body">
						Accordion Content 1
					</div>
				</div>
			</div>
			<div class="accordion__card card">
				<div class="card-header" id="heading-02">
					<a href="#" class="accordion__btn btn btn-block collapsed" data-toggle="collapse" data-target="#target-02" aria-expanded="true" aria-controls="#target-02">
						Accordion Heading 2
						<i class="fal fa-plus float-right icon icon-collapsed"></i>
						<i class="fal fa-minus float-right icon icon-collapse"></i>
					</a>
				</div>
				<div id="target-02" class="collapse" aria-labelledby="heading-02" data-parent="#sg-accordion">
					<div class="card-body">
						Accordion Content 2
					</div>
				</div>
			</div>
			<div class="accordion__card card">
				<div class="card-header" id="heading-03">
					<a href="#" class="accordion__btn btn btn-block collapsed" data-toggle="collapse" data-target="#target-03" aria-expanded="true" aria-controls="#target-03">
						Accordion Heading 3
						<i class="fal fa-plus float-right icon icon-collapsed"></i>
						<i class="fal fa-minus float-right icon icon-collapse"></i>
					</a>
				</div>
				<div id="target-03" class="collapse" aria-labelledby="heading-03" data-parent="#sg-accordion">
					<div class="card-body">
						Accordion Content 3
					</div>
				</div>
			</div>
		</div>

		<?php /*echo do_shortcode(
				'[accordions]
					[accordion title="Accordion Heading 1"]Accordion Content 1[/accordion]
					[accordion title="Accordion Heading 2"]Accordion Content 2[/accordion]
					[accordion title="Accordion Heading 3"]Accordion Content 3[/accordion]
				[/accordions]' ); */?>
	</div><!-- .sg-example -->
	<div class="sg-code">
		<?php
			echo code_output(
				'<!-- WP SHORTCODE -->' . PHP_EOL .
				'[accordions]' . PHP_EOL .
				'	[accordion title="Accordion Heading 1"]Accordion Content 1[/accordion]' . PHP_EOL .
				'	[accordion title="Accordion Heading 2"]Accordion Content 2[/accordion]' . PHP_EOL .
				'	[accordion title="Accordion Heading 3"]Accordion Content 3[/accordion]' . PHP_EOL .
				'[/accordions]'. PHP_EOL . PHP_EOL .
				'<!-- HTML -->' . PHP_EOL .
				'<div class="accordion" id="accordion">' . PHP_EOL .
				'	<div class="accordion__card card">' . PHP_EOL .
				'		<div class="card-header" id="heading-01">' . PHP_EOL .
				'			<a href="#" class="accordion__btn btn-block collapsed" data-toggle="collapse" data-target="#target-01" aria-expanded="true" aria-controls="#target-01">' . PHP_EOL .
				'				<div class="accordion__item_title">Accordion Heading 1</div>' . PHP_EOL .
				'				<i class="fal fa-plus float-right icon icon-collapsed"></i>' . PHP_EOL .
				'				<i class="fal fa-minus float-right icon icon-collapse"></i>' . PHP_EOL .
				'			</a>' . PHP_EOL .
				'		</div>' . PHP_EOL .
				'		<div id="target-01" class="collapse" aria-labelledby="heading-01" data-parent="#accordion">' . PHP_EOL .
				'			<div class="card-body">' . PHP_EOL .
				'				Accordion Content 1' . PHP_EOL .
				'			</div>' . PHP_EOL .
				'		</div>' . PHP_EOL .
				'	</div>' . PHP_EOL .
				'</div>' . PHP_EOL
			);
			?>
	</div><!-- .sg-code -->
</article>
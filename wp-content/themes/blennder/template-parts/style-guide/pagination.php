<article id="component__blog-pagination">
	<h6>Blog Pagination</h6>
	<div class="sg-example">
		<nav class="navigation pagination" role="navigation">
			<h2 class="screen-reader-text">Posts navigation</h2>
			<div class="nav-links">
				<a class="prev page-numbers" href="#"><i class="smaller far fa-chevron-left"></i> <span>Prev</span></a>
				<span aria-current="page" class="page-numbers current">1</span>
				<a class="page-numbers" href="#">2</a>
				<a class="page-numbers" href="#">3</a>
				<span class="page-numbers dots">…</span>
				<a class="page-numbers" href="#">10</a>
				<a class="page-numbers" href="#">11</a>
				<a class="next page-numbers" href="#"><span>Next</span> <i class="smaller far fa-chevron-right"></i></a>
			</div>
		</nav>
	</div>
	<div class="sg-code">
		<!-- HTML Structure -->
		<?php
			echo code_output(
				'<nav class="navigation pagination" role="navigation">' . PHP_EOL .
				'	<h2 class="screen-reader-text">Posts navigation</h2>' . PHP_EOL .
				'	<div class="nav-links">' . PHP_EOL .
				'		<span aria-current="page" class="page-numbers current">1</span>' . PHP_EOL .
				'		<span class="page-numbers dots">…</span>' . PHP_EOL .
				'		<a class="page-numbers" href="#">2</a>' . PHP_EOL .
				'		<a class="next page-numbers" href="#"><i class="far fa-long-arrow-right"></i></a>' . PHP_EOL .
				'	</div>' . PHP_EOL .
				'</nav>'
			);
		?>
		<!-- Output in PHP -->
		<?php echo code_output(
				'the_posts_pagination(array(' . PHP_EOL .
				'	\'prev_text\' => \'<i class="smaller far fa-chevron-left"></i> <span>Prev</span>\',' . PHP_EOL .
				'	\'next_text\' => \'<span>Next</span> <i class="smaller far fa-chevron-right"></i>\',' . PHP_EOL .
				'));'
			);
		?>
	</div>
</article>

<article id="component__slider-pagination">
	<h6>Swiper Pagination</h6>
	<div class="sg-example">
		<div class="row">
			<div class="col-md">
				<h5>Dots</h5>
				<div class="mb-4 position-static text-left swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination--lg">
					<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
				</div>
				<div class="mb-4 position-static text-left swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
					<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
				</div>
				<div class="mb-4 position-static text-left swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination--sm">
					<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
				</div>
			</div><!-- .col-md -->
			<div class="col-md">
				<h5>Squares</h5>
				<div class="mb-4 position-static text-left swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination--square swiper-pagination--lg">
					<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
				</div>
				<div class="mb-4 position-static text-left swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination--square">
					<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
				</div>
				<div class="mb-4 position-static text-left swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination--square swiper-pagination--sm">
					<span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span>
				</div>

			</div><!-- .col-md -->
		</div><!-- .row -->

	</div>
	<div class="sg-code">
		<?php
			echo code_output(
				'// Default Circle' . PHP_EOL .
				'<div class="swiper-pagination"></div>' . PHP_EOL .
				'// Small Circle' . PHP_EOL .
				'<div class="swiper-pagination swiper-pagination--sm"></div>' . PHP_EOL .
				'// Large Circle' . PHP_EOL .
				'<div class="swiper-pagination swiper-pagination--lg"></div>' . PHP_EOL .
				'// Default Square' . PHP_EOL .
				'<div class="swiper-pagination swiper-pagination--square"></div>' . PHP_EOL .
				'// Small Square' . PHP_EOL .
				'<div class="swiper-pagination swiper-pagination--sm swiper-pagination--sm"></div>' . PHP_EOL .
				'// Large Square' . PHP_EOL .
				'<div class="swiper-pagination swiper-pagination--lg swiper-pagination--sm"></div>'
			);
		?>
	</div>
</article>

<article id="component__slider-navigation">
	<h6>Swiper Navigation</h6>
	<div class="sg-example">
		<div class="swiper-navigation py-3">
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
	<div class="sg-code">
		<?php
			echo code_output(
				'<div class="swiper-button-prev"></div>' . PHP_EOL .
				'<div class="swiper-button-next"></div>'
			);
		?>
	</div>
</article>

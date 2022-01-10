<article id="typography__font">
	<h4>Fonts</h4>
	<div class="sg-example">
		<h1 class="font-open-sans">Open Sans</h1>
	</div>
	<div class="sg-code">
		<?php echo code_output('<h1 class="font-open-sans">Open Sans</h1>'); ?>
	</div>
</article>

<article id="typography__headings">
	<h4>Headings</h4>
	<div class="sg-example">
		<div class="row align-items-center border-bottom mb-2 pb-2 d-none d-md-flex">
			<div class="col-md-6"><strong>Headings</strong></div><!-- .col-md -->
			<div class="col"><strong>Desktop</strong></div><!-- .col-md -->
			<div class="col"><strong>Mobile</strong></div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h1 class="m-0">Heading 1</h1></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Extrabold<br>
					Size: 65px | Line Height 78px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 45px | Line Height 52px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h2 class="m-0">Heading 2</h2></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 45px | Line Height 55px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 30px | Line Height 36px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h3 class="m-0">Heading 3</h3></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 35px | Line Height 45px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 24px | Line Height 32px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h4 class="m-0">Heading 4</h4></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 26px | Line Height 34px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 18px | Line Height 26px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h5 class="m-0">Heading 5</h5></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 22px | Line Height 32px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 18px | Line Height 26px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center">
			<div class="col-md-6"><h6 class="m-0">Heading 6</h6></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 18px | Line Height 26px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 16px | Line Height 24px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->
	</div>
	<div class="sg-code">
		<?php
		echo code_output(
			'<h1>Heading 1</h1>' . PHP_EOL .
			'<h2>Heading 2</h2>' . PHP_EOL .
			'<h3>Heading 3</h3>' . PHP_EOL .
			'<h4>Heading 4</h4>' . PHP_EOL .
			'<h5>Heading 5</h5>' . PHP_EOL .
			'<h6>Heading 6</h6>'
		);
		?>
	</div>
</article>

<article id="typography__display-headings">
	<h3>Display Headings</h3>
	<div class="sg-example">
		<div class="row align-items-center border-bottom mb-2 pb-2 d-none d-md-flex">
			<div class="col-md-6"><strong>Headings</strong></div><!-- .col-md -->
			<div class="col"><strong>Desktop</strong></div><!-- .col-md -->
			<div class="col"><strong>Mobile</strong></div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h1 class="display-1 m-0">Display 1</h1></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Extrabold<br>
					Size: 65px | Line Height 78px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 45px | Line Height 52px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h2 class="display-2 m-0">Display 2</h2></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 45px | Line Height 55px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 30px | Line Height 36px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h3 class="display-3 m-0">Display 3</h3></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 35px | Line Height 45px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 24px | Line Height 32px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->

		<div class="row align-items-center border-bottom mb-2 pb-2">
			<div class="col-md-6"><h4 class="display-4 m-0">Display 4</h4></div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Desktop</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 26px | Line Height 34px
				</p>
			</div><!-- .col-md -->
			<div class="col">
				<strong class="d-md-none small">Mobile</strong>
				<p class="small font-weight-normal m-0">
					Open Sans Bold<br>
					Size: 18px | Line Height 26px
				</p>
			</div><!-- .col-md -->
		</div><!-- .row -->
	</div>
	<div class="sg-code">
		<?php
		echo code_output(
			'<h1 class="display-1">Display 1</h1>' . PHP_EOL .
			'<h2 class="display-2">Display 2</h2>' . PHP_EOL .
			'<h3 class="display-3">Display 3</h3>' . PHP_EOL .
			'<h4 class="display-4">Display 4</h4>'
		);
		?>
	</div>
</article>

<article id="typography__lead">
	<h4>Lead Text</h4>
	<p>Apply <code>.lead</code> to the paragraph to turn it into a lead text.</p>
	<div class="row">
		<div class="col">
			<p class="small"><strong class="small">Desktop</strong><br>
			Open Sans Regular<br>
			Size: 22px | Line Height: 34px</p>

		</div><!-- .col -->
		<div class="col">
			<p class="small"><strong class="small">Mobile</strong><br>
			Open Sans Regular<br>
			Size: 18px | Line Height: 24px</p>
		</div><!-- .col -->
	</div><!-- .row -->

	<div class="sg-example">
		<p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Ea at voluptatem eius veniam numquam laborum voluptates? Eveniet quam laboriosam laudantium velit voluptate, ipsam, error commodi quae, dolor, deleniti esse eaque.</p>
	</div>
	<div class="sg-code">
		<?php echo code_output( '<p class="lead">...</p>' ); ?>
	</div>
</article>

<article id="typography__paragraphs">
	<h4>Body Copy</h4>

	<div class="row">
		<div class="col">
			<p class="small"><strong class="small">Desktop</strong><br>
			Open Sans Regular<br>
			Size: 16px | Line Height: 26px</p>

		</div><!-- .col -->
		<div class="col">
			<p class="small"><strong class="small">Mobile</strong><br>
			Open Sans Regular<br>
			Size: 14px | Line Height: 22px</p>
		</div><!-- .col -->
	</div><!-- .row -->

	<div class="sg-example">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam explicabo nisi, reprehenderit magnam reiciendis fugiat aut dignissimos ad ipsum, similique laboriosam enim, ab ex distinctio porro ipsam itaque et.</p>
		<p>Cupiditate tenetur modi nobis expedita aperiam excepturi dolore dignissimos, quibusdam officiis, et ut rem nemo debitis. Odio voluptas rerum magnam, eveniet libero.</p>
	</div>
	<div class="sg-code">
		<?php echo code_output( '<p>...</p>' ); ?>
	</div>
</article>

<article id="typography__small">
	<h4>Small Text</h4>
	<p>Apply <code>.small</code> to the paragraph to turn it into small text.</p>
	<div class="sg-example">
		<p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolorum fugit odit iste. Iste ea, maxime alias, eaque aspernatur, ipsa accusantium omnis repellat cum earum nostrum odit pariatur cupiditate modi. </p>
	</div>
	<div class="sg-code">
		<?php echo code_output( '<p class="small">...</p>' ); ?>
	</div>

	<div class="sg-example">
		<p class="smaller">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat dolorum fugit odit iste. Iste ea, maxime alias, eaque aspernatur, ipsa accusantium omnis repellat cum earum nostrum odit pariatur cupiditate modi. </p>
	</div>
	<div class="sg-code">
		<?php echo code_output( '<p class="smaller">...</p>' ); ?>
	</div>
</article>

<article id="typography__blockquotes">
	<h4>Blockquotes</h4>
	<div class="sg-example">
		<blockquote class="blockquote">
			<p>A block quotation (also known as a long quotation or extract) is a quotation in a written document, that is set off from the main text as a paragraph, or block of text.</p>
			<footer class="blockquote-footer">
				<cite>Said no one, ever.</cite>
			</footer>
		</blockquote>
	</div>
	<div class="sg-code">
		<?php
		echo code_output(
			'<blockquote class="blockquote">' . PHP_EOL .
			'	<p>...</p>' . PHP_EOL .
			'	<footer class="blockquote-footer">' . PHP_EOL .
			'		<cite>Said no one, ever.</cite>' . PHP_EOL .
			'	</footer>' . PHP_EOL .
			'</blockquote>' . PHP_EOL
		);
		?>
	</div>
</article>

<article id="typography__lists">
	<h4>Definition list</h4>
	<dl>
		<dt>Definition List Title</dt>
		<dd>This is a definition list division.</dd>
	</dl>

	<h4>Lists</h4>
	<p>Use <code>.list-styled</code></p>
	<h6>Ordered List <code>&lt;ol&gt;</code></h6>
	<ol class="list-styled">
		<li><strong>List Item 1:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
		</li>
		<li><strong>List Item 2:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
		<li><strong>List Item 3:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
		<li><strong>List Item 4:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
			<ol>
				<li>Sub List Item 1</li>
				<li>Sub List Item 2</li>
			</ol>
		</li>
	</ol>

	<h6>Unordered List <code>&lt;ul&gt;</code></h6>
	<ul class="list-styled">
		<li><strong>List Item 1:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
		</li>
		<li><strong>List Item 2:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
		<li><strong>List Item 3:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
		<li><strong>List Item 4:</strong> Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.
			<ul>
				<li>Sub List Item 1</li>
				<li>Sub List Item 2</li>
			</ul>
		</li>
	</ul>
</article>

<article id="text__inline">
	<h4>Inline Elements</h4>
	<p><a href="#!">This is a text link</a>.</p>
	<p><strong>Strong is used to indicate strong importance.</strong></p>
	<p><em>This text has added emphasis.</em></p>
	<p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation.</p>
	<p><s>This text has a strikethrough</s>.</p>
	<p>Superscript<sup>&reg;</sup>.</p>
	<p>Subscript for things like H<sub>2</sub>O.</p>
</article>
<article id="element__tables">
	<div class="sg-example">
		<table class="table">
			<caption>Table Caption</caption>
			<thead class="">
				<tr>
					<th>Table Heading 1</th>
					<th>Table Heading 2</th>
					<th>Table Heading 3</th>
					<th>Table Heading 4</th>
					<th>Table Heading 5</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Table Cell 1</td>
					<td>Table Cell 2</td>
					<td>Table Cell 3</td>
					<td>Table Cell 4</td>
					<td>Table Cell 5</td>
				</tr>
				<tr>
					<td>Table Cell 1</td>
					<td>Table Cell 2</td>
					<td>Table Cell 3</td>
					<td>Table Cell 4</td>
					<td>Table Cell 5</td>
				</tr>
				<tr>
					<td>Table Cell 1</td>
					<td>Table Cell 2</td>
					<td>Table Cell 3</td>
					<td>Table Cell 4</td>
					<td>Table Cell 5</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="sg-code">
		<?php
			echo code_output(
				'<table>' . PHP_EOL .
				'	<caption>Table Caption</caption>' . PHP_EOL .
				'	<thead>' . PHP_EOL .
				'		<tr>' . PHP_EOL .
				'			<th>Table Heading 1</th>' . PHP_EOL .
				'			<th>Table Heading 2</th>' . PHP_EOL .
				'			<th>Table Heading 3</th>' . PHP_EOL .
				'			<th>Table Heading 4</th>' . PHP_EOL .
				'			<th>Table Heading 5</th>' . PHP_EOL .
				'		</tr>' . PHP_EOL .
				'	</thead>' . PHP_EOL .
				'	<tbody>' . PHP_EOL .
				'		<tr>' . PHP_EOL .
				'			<td>Table Cell 1</td>' . PHP_EOL .
				'			<td>Table Cell 2</td>' . PHP_EOL .
				'			<td>Table Cell 3</td>' . PHP_EOL .
				'			<td>Table Cell 4</td>' . PHP_EOL .
				'			<td>Table Cell 5</td>' . PHP_EOL .
				'		</tr>' . PHP_EOL .
				'	</tbody>' . PHP_EOL .
				'</table>' . PHP_EOL
			);
		?>
	</div><!-- .sg-code -->
</article>
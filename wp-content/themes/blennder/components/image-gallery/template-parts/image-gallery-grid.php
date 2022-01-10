<?php

echo do_shortcode(
	sprintf( '[gallery link="file" size="gallery" columns="%1$s" ids="%2$s"]',
		$fields['image_gallery_columns'],
		implode( ',', image_gallery_ids() )
	)
);

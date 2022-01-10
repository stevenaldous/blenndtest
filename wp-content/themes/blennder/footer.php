<?php
/**
 * The template for displaying the footer.
 */
?>

<footer id="footer" class="footer">
	<!-- Footer goes here -->
	<div class="footer__main py-5">
		<div class="container">
			<div class="row">
				<div class="col-footer col-12 col-md-4 col-lg-3 text-center text-md-left order-md-first d-md-flex flex-column justify-content-<?php the_theme_option( 'footer_vertical_align' ); ?>">
					<div class="footer-brand">
						<?php the_logo(); ?>
					</div>
					<?php
					if( footer_social_media( 'main', 'left' ) ) : ?>
						<div class="footer-social footer-social-main footer-social-left">
							<?php social_media_icons(); ?>
						</div>
					<?php endif; ?>
				</div>
				<?php footer_widgets( $number_of_widgets = 4 ); ?>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md text-<?php footer_legal_text_align(); ?>">
					<div class="d-block d-md-inline">
						<?php
						if( $bottom_bar = get_theme_option( 'footer_bottom_bar' ) ) {
							echo $bottom_bar;
						}
						else {
							printf(
								'<span>© %1$s</span> %2$s. All Rights Reserved',
								date('Y'),
								get_bloginfo( 'title' )
							);
						}
						?>
					</div>
					<?php
						// If the footer legal menu is not assigned in the admin, our fallback has been moved to the inc/template-tags.php file as a fallback function
						wp_nav_menu( array(
							'theme_location' => 'footer-legal',
							'container'      => '',
							'depth' => 2,
							'before' => ' ',
							'menu_class'     => 'd-inline-block list-inline footer-legal',
							'menu_id' => 'footer-legal',
							'echo' => true,
							'fallback_cb' => 'footer_legal_fallback',
						) );
					?>
				</div>
				<?php if( footer_social_media( 'legal' ) ) : ?>
					<div class="col-md-auto footer-social footer-social-legal footer-social-<?php the_theme_option( 'footer_social_media_position' );?> order-<?php social_media_order(); ?>">
						<?php social_media_icons(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</footer>
<!-- #footer -->
<?php wp_footer(); ?>
</body>

</html>

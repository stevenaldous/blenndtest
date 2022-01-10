<?php
declare( strict_types = 1 );
namespace App\Setup\Widgets;

/**
 * Adds Links widget.
 */
class Links extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		$ops = [
			'classname' => 'links',
			'description' => 'A list of generic links.',
		];
		parent::__construct(
			'links', // Base ID
			'Links', // Name
			$ops
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		if ( ! isset( $args['widget_id'] ) ) {
			$args[ 'widget_id' ] = $this->id;
		}
		$w_id = 'widget_' . $args[ 'widget_id' ];
		$orientation = get_field( 'orientation', $w_id ) ?? 'vertical';

		if( 'horizontal' === $orientation ) {
			$args['before_title'] = str_replace( 'class="', 'class="d-md-none ', $args['before_title'] );
		}
		if( false === strpos( $args[ 'before_widget' ], 'class' ) ) {
			$args[ 'before_widget' ] = str_replace( '<div', '<div class="w-100"', $args[ 'before_widget' ] );
		}
		else {
			$args[ 'before_widget' ] = str_replace( 'class=', 'class="w-100 ', $args[ 'before_widget' ] );
		}

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
				echo $args['before_title'] . $title . $args['after_title'];
		}
		ob_start();
		?>
		<div class="menu-footer-links-container">
			<ul class="links-list links-list-<?php echo $orientation; ?><?php if( 'horizontal' === $orientation ) echo ' d-md-flex'; ?> justify-content-<?php echo get_field( 'position', $w_id ); ?>">
				<?php while( have_rows( 'items', $w_id ) ) : ?>
					<?php the_row(); ?>
					<?php $link = [ 'link' => get_sub_field( 'item', $w_id ) ]; ?>
					<li class="menu-item">
						<?php acf_link( 'link', [ 'class' => 'menu-item-link' ], $link ); ?>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
		<?php
		echo ob_get_clean();
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : '';
		$orientation = ! empty( $instance['orientation'] ) ? $instance['orientation'] : '';
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo 'Title:'; ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		 <?php
	 }


	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	 public function update( $new_instance, $old_instance ) {
		 $instance = array();

		 $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		 return $instance;
	 }


} // class Links

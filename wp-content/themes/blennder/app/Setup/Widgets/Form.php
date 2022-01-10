<?php
declare( strict_types = 1 );
namespace App\Setup\Widgets;

/**
 * Adds Form widget.
 */
class Form extends \WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
			'form', // Base ID
			'Form' // Name
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

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
				echo $args['before_title'] . $title . $args['after_title'];
		}
		ob_start();
		?>
		<div class="menu-footer-forms-container">
			<ul>
				<?php
					if ( ! isset( $args['widget_id'] ) ) {
						$args[ 'widget_id' ] = $this->id;
					}
					$w_id = 'widget_' . $args[ 'widget_id' ];
					$form = get_field( 'form', $w_id );
					gravity_form( $form, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $tabindex = null, $echo = true );
					?>
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


} // class Form

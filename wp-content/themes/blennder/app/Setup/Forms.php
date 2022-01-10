<?php
declare( strict_types = 1 );
namespace App\Setup;

class Forms
{
	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init()
	{
		// Add hidden option to GF form labels
		add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

		// Disable the confirmation anchor functionality that will automatically scroll the page to the confirmation text or validation message
		add_filter( 'gform_confirmation_anchor', '__return_true' );

		/*
		 * Gravity forms v2.5+ introduces a new form builder with new styles.
		 * This allows the basic.css to load for all the grid builder stuff
		 * without adding on GF's opinionated theme.css design styles.
		 */
		add_filter( 'gform_disable_form_theme_css', '__return_true' );

		add_filter( 'gform_field_container',  [__CLASS__, 'add_bootstrap_container_class'], 10, 6 );
	}

	/**
	 * Add Bootstrap Container Class to form group li elements
	 */
	public static function add_bootstrap_container_class( $field_container, $field, $form, $css_class, $style, $field_content ) {
		$id = $field->id;
		$field_id = is_admin() || empty( $form ) ? "field_{$id}" : 'field_' . $form['id'] . "_$id";
		return '<li id="' . $field_id . '" class="' . $css_class . ' form-group">{FIELD_CONTENT}</li>';
	}
}

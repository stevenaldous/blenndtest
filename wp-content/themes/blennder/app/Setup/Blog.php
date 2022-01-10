<?php
declare( strict_types = 1 );
namespace App\Setup;

class Blog {

	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init() {
		add_filter( 'get_the_archive_title', [__CLASS__, 'blennder_archive_title'] );
	}

	/**
	 * Blennder Archive Title
	 * Remove the Category/Tag/Taxonomy Prefix from archive titles
	 */
	public static function blennder_archive_title($title) {
		if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
		} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
		} elseif ( is_tax() ) {
			$title = single_term_title( '', false );
		}

		return $title;
	}
}

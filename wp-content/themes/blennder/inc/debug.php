<?php
declare( strict_types = 1 );

/*
 * Debug Functions
 */


/**
 * Prints a variable recursively to the screen.
 *
 * @since 0.7.0
 *
 * @param mixed $obj Mixed-value variable to print.
 */
function print_echo( $obj ) {
	echo "<pre>";
	print_r( $obj );
	echo "</pre>";
}

<?php
declare( strict_types = 1 );

/**
 * Output Helpers
 */

/**
 * Returns the string value within <code> tags.
 *
 * @since 0.7.0
 *
 * @param  array $data
 *
 * @return string The escaped code within <code> tags.
 */
function code_output_pre( $data ) {
	preg_match('@(<code.*>)(.*)(<\/code>)@isU', $data[2], $matches );
	if( !empty( $matches ) ) {
		return $data[1] . $matches[1] . str_replace( array( '&', '<', '>' ), array( '&amp;', '&lt;', '&gt;' ), $matches[2] ) . $matches[3] . $data[3];
	}
	else {
		return $data[1] . str_replace( array( '&', '<', '>' ), array( '&amp;', '&lt;', '&gt;' ), $data[2] ) . $data[3];
	}
}

/**
 * Wraps the code in `<pre>` tags.
 *
 * @since 0.7.0
 *
 * @param  string $content The content to be wrapped in `<pre>` tags.
 * @return string          The content wrapped in `<pre>` tags.
 */
function code_output( $content ) {
	$wrap =  '<pre>'.$content.'</pre>';
	$content = preg_replace_callback('@(<pre.*>)(.*)(<\/pre>)@isU', 'code_output_pre', $wrap );
	return $content;
}

/**
 * Print the HTML attributes
 *
 * @since 0.7.6
 *
 * @param  array         $attr      Associative array of attribute names and values.
 * @param  callable|null $callback  Callback function to escape values for HTML attributes.
 */
function html_atts( array $attr, callable $callback = null ) {
	echo get_html_atts( $attr, $callback );
}

/**
 * Generate a string of HTML attributes
 *
 * @since 0.7.0
 *
 * @param  array         $attr      Associative array of attribute names and values.
 * @param  callable|null $callback  Callback function to escape values for HTML attributes.
 *                                  Defaults to `htmlspecialchars()`.
 * @return string                   Returns a string of HTML attributes.
 */
function get_html_atts(array $attr, callable $callback = null)
{
	if (!count($attr)) {
		return '';
	}

	$html = array_map(
		function ($val, $key) use ($callback) {
			if (is_bool($val)) {
				return ($val ? $key : '');
			} elseif (isset($val)) {
				if ($val instanceof Closure) {
					$val = $val();
				} elseif ($val instanceof JsonSerializable) {
					$val = json_encode(
						$val->jsonSerialize(),
						(JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE)
					);
				} elseif (is_callable([ $val, 'toArray' ])) {
					$val = $val->toArray();
				} elseif (is_callable([ $val, '__toString' ])) {
					$val = strval($val);
				}

				if (is_array($val)) {
					if (function_exists('is_blank')) {
						$filter = function ($var) {
							return !is_blank($var);
						};
					} else {
						$filter = function ($var) {
							return !empty($var) || is_numeric($var);
						};
					}
					$val = implode(' ', array_filter($val, $filter));
				}

				if (is_callable($callback)) {
					$val = call_user_func($callback, $val);
				} elseif (function_exists('esc_attr')) {
					$val = esc_attr($val);
				} else {
					$val = htmlspecialchars($val, ENT_QUOTES);
				}

				if (is_string($val)) {
					return sprintf('%1$s="%2$s"', $key, $val);
				}
			}
		},
		$attr,
		array_keys($attr)
	);

	return implode(' ', $html);
}

/**
 * Sets up a components attributes for output
 *
 * @since 0.7.0
 *
 * @param  string $color Hex value of a color.
 * @return array          Returns a rgba representation of a hex value
 */
function hex2rgb( $color ) {
	if ( $color[0] == '#' ) {
			 $color = substr( $color, 1 );
	}
	if ( strlen( $color ) == 6 ) {
		list( $r, $g, $b ) = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	} elseif ( strlen( $color ) == 3 ) {
		list( $r, $g, $b ) = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	} else {
		return false;
	}
	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );
	return array( 'r' => $r, 'g' => $g, 'b' => $b );
}

/**
 * Takes a PHP Array and returns a json encoded config object
 *
 * @since 0.7.0
 *
 * @param  array  $config Multidimensional array of options.
 * @return string         Returns a json_encoded representation of the array
 */
function blennder_array_to_json( $config ) {
	return htmlspecialchars(json_encode( $config, JSON_FORCE_OBJECT | JSON_NUMERIC_CHECK ));
}

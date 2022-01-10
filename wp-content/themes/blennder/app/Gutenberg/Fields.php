<?php
declare( strict_types = 1 );
namespace App\Gutenberg;

/**
 * Fields class.
 *
 * @category Builder
 */
class Fields extends DefaultFields {


	/**
	 * 	@var array The array of Advanced Custom Field data.
	 *
	 * @since 0.7.0
	 */
	public $acf;

	/**
	 * @var string The component name.
	 *
	 * @since 0.7.0
	 */
	public $name;

	/**
	 * @var string The component label.
	 *
	 * @since 0.7.0
	 */
	public $label;

	/**
	 * Constructor. Sets up the component.
	 *
	 * @since 0.7.0
	 *
	 * @param string $file Fully qualified path to the file to include.
	 */
	function __construct( $file ) {
		$this->acf = include $file;
		$this->set_name( $file );
		$this->set_label( );
		$this->setup_tabs( );
	}


	/*
	* Some Components we dont want to use the design tab on
	* This allows us to not include it when registering the component
	* Add this in your {component}-acf.php file after the 'fields' array
	* We can extend this to do more down the road
	*
	* 'config' => array(
	*	'background_tab' => false
	* )
	*
	* @since 0.7.0
	*/
	public function setup_tabs( ) {
		if( isset( $this->acf[ 'config' ][ 'heading' ] ) && false === $this->acf[ 'config' ][ 'heading' ] ) {
			$tab = array_shift( $this->content_tab );
			$this->content_tab = [ $tab ];
		}

		$fields = array_merge( $this->content_tab ?? [], $this->acf[ 'fields' ]  ?? [] );

		// Add addition tabs if wanted
		$tabs = [
			'design'     => $this->design_tab,
			'background' => $this->background_tab,
		];

		foreach( $tabs as $key => $tab ) {
			if( $this->config_tab( $key ) ) {
				$prop   = "{$key}_tab";
				$val    = $this->$prop ?? $this->acf['fields'];
				$fields = array_merge( $fields, $val );

				if( isset( $this->acf[ $prop ] ) && is_array( $this->acf[ $prop ] ) ) {
					$fields = array_merge( $fields, $this->acf[ $prop ] );
				}
			}
		}
		$this->acf[ 'fields' ] = $fields;
	}

	/**
	 * Return whether the tab should be added to the component.
	 *
	 * @param string $tab The name of the tab to be configured.
	 *
	 * @return bool Whether the tab is shown or not.
	 */
	 public function config_tab( string $tab ) : bool {
		return ! isset( $this->acf[ 'config' ][ "{$tab}_tab" ] ) || false !== $this->acf[ 'config' ][ "{$tab}_tab" ];
	}

	/**
	 * Set the component name from the file path by splitring off the -acf off the name
	 *
	 * @since 0.7.0
	 *
	 * @param $file - The full file path
	 */
	public function set_name( $file ){
		$this->name = preg_split( "/(-acf.php)+/", basename( $file ) )[0];
	}

	/**
	 *  Get the ACF Field Group title to use as the Layout Label
	 *
	 * @since 0.7.0
	 */
	public function set_label( ) {
		$this->label = $this->acf['title'];
	}

}

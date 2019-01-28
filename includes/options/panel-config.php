<?php

// Language  name for smart admin texts
$lang = bf_get_current_lang();
if ( $lang != 'none' ) {
	$lang = bf_get_language_name( $lang );
} else {
	$lang = '';
}

$panel = array(
	'config'     => array(
		'parent'              => 'perla',
		'slug'                => 'hrpro-design/hrpro-reviews',
		'name'                => __( 'HRPro Reviews', 'perla' ),
		'page_title'          => __( 'HRPro Reviews', 'perla' ),
		'menu_title'          => __( 'Reviews', 'perla' ),
		'capability'          => 'manage_options',
		'icon_url'            => NULL,
		'position'            => 80.04,
		'exclude_from_export' => FALSE,
	),
	'texts'      => array(

		'panel-desc-lang'     => '<p>' . __( '%s Language Options.', 'perla' ) . '</p>',
		'panel-desc-lang-all' => '<p>' . __( 'All Languages Options.', 'perla' ) . '</p>',

		'reset-button'     => ! empty( $lang ) ? sprintf( __( 'Reset %s Options', 'perla' ), $lang ) : __( 'Reset Options', 'perla' ),
		'reset-button-all' => __( 'Reset All Options', 'perla' ),

		'reset-confirm'     => ! empty( $lang ) ? sprintf( __( 'Are you sure to reset %s options?', 'perla' ), $lang ) : __( 'Are you sure to reset options?', 'perla' ),
		'reset-confirm-all' => __( 'Are you sure to reset all options?', 'perla' ),

		'save-button'     => ! empty( $lang ) ? sprintf( __( 'Save %s Options', 'perla' ), $lang ) : __( 'Save Options', 'perla' ),
		'save-button-all' => __( 'Save All Options', 'perla' ),

		'save-confirm-all' => __( 'Are you sure to save all options? this will override specified options per languages', 'perla' )

	),
	'panel-name' => _x( 'HRPro Reviews', 'Panel title', 'perla' ),
	'panel-desc' => '<p>' . __( 'HRPro Reviews Plugin', 'perla' ) . '</p>',
);

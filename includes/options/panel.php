<?php

add_filter( 'hrpro-framework/panel/add', 'hrpro_reviews_panel_add', 10 );

if ( ! function_exists( 'hrpro_reviews_panel_add' ) ) {
	/**
	 * Callback: Ads panel
	 *
	 * Filter: hrpro-framework/panel/options
	 *
	 * @param $panels
	 *
	 * @return array
	 */
	function hrpro_reviews_panel_add( $panels ) {

		$panels[ HRPro_Reviews::$panel_id ] = array(
			'id' => HRPro_Reviews::$panel_id,
		);

		return $panels;
	}
}


add_filter( 'hrpro-framework/panel/' . HRPro_Reviews::$panel_id . '/config', 'hrpro_reviews_panel_config', 10 );

if ( ! function_exists( 'hrpro_reviews_panel_config' ) ) {
	/**
	 * Callback: Init's BF options
	 *
	 * @param $panel
	 *
	 * @return array
	 */
	function hrpro_reviews_panel_config( $panel ) {

		include HRPro_Reviews::dir_path( 'includes/options/panel-config.php' );

		return $panel;
	} // hrpro_reviews_panel_config
}


add_filter( 'hrpro-framework/panel/' . HRPro_Reviews::$panel_id . '/std', 'hrpro_reviews_panel_std', 10 );

if ( ! function_exists( 'hrpro_reviews_panel_std' ) ) {
	/**
	 * Callback: Init's BF options
	 *
	 * Filter: hrpro-framework/panel/options
	 *
	 * @param $fields
	 *
	 * @return array
	 */
	function hrpro_reviews_panel_std( $fields ) {

		$fields['add_rich_snippet'] = array(
			'std' => TRUE,
		);

		return $fields;
	}
}


add_filter( 'hrpro-framework/panel/' . HRPro_Reviews::$panel_id . '/fields', 'hrpro_reviews_panel_fields', 10 );

if ( ! function_exists( 'hrpro_reviews_panel_fields' ) ) {
	/**
	 * Callback: Init's BF options
	 *
	 * Filter: hrpro-framework/panel/options
	 *
	 * @param $fields
	 *
	 * @return array
	 */
	function hrpro_reviews_panel_fields( $fields ) {

		$fields['add_rich_snippet'] = array(
			'name'      => __( 'Enable Schema SEO Rich Snippet Review Microdata', 'perla' ),
			'id'        => 'add_rich_snippet',
			'desc'      => __( 'Use for adding Microformats to get Rich Snippets showing for your site and increase the CTR from Google.', 'perla' ),
			'type'      => 'switch',
			'on-label'  => __( 'Enable', 'perla' ),
			'off-label' => __( 'Disable', 'perla' ),
		);

		return $fields;
	}
}

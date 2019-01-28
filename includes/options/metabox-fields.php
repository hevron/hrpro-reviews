<?php

$fields['_style_options']                = array(
	'name' => __( 'Style', 'perla' ),
	'id'   => '_style_options',
	'type' => 'tab',
	'icon' => 'bsai-paint',
);
$fields['_bs_review_enabled']            = array(
	'name'      => __( 'Enable Review', 'perla' ),
	'id'        => '_bs_review_enabled',
	'type'      => 'switch',
	'on-label'  => __( 'Enable', 'perla' ),
	'off-label' => __( 'Disable', 'perla' ),
	'desc'      => __( 'Enabling this will adds review box to post', 'perla' ),
);
$fields['_bs_review_pos']                = array(
	'name'    => __( 'Review Box Position', 'perla' ),
	'id'      => '_bs_review_pos',
	'type'    => 'select',
	'desc'    => __( 'Chose position of review box on page.', 'perla' ),
	'options' => array(
		'none'       => __( 'Do Not Display', 'perla' ),
		'top'        => __( 'Top', 'perla' ),
		'bottom'     => __( 'Bottom', 'perla' ),
		'top-bottom' => __( 'Top & Bottom', 'perla' ),
	)
);
$fields['_bs_review_rating_type']        = array(
	'name'          => __( 'Rating Style', 'perla' ),
	'desc'          => __( 'Chose style of review', 'perla' ),
	'id'            => '_bs_review_rating_type',
	'type'          => 'image_radio',
	'section_class' => 'style-floated-left bordered',
	'options'       => array(
		'stars'      => array(
			'img'   => HRPro_Reviews::dir_url() . 'img/review-star.png',
			'label' => __( 'Stars', 'perla' ),
		),
		'percentage' => array(
			'img'   => HRPro_Reviews::dir_url() . 'img/review-bar.png',
			'label' => __( 'Percentage', 'perla' ),
		),
		'points'     => array(
			'img'   => HRPro_Reviews::dir_url() . 'img/review-point.png',
			'label' => __( 'Points', 'perla' ),
		)
	)
);


/**
 * => Verdict Options
 */
$fields['_verdict_options']           = array(
	'name' => __( 'Verdict', 'perla' ),
	'id'   => '_verdict_options',
	'type' => 'tab',
	'icon' => 'bsai-verdict',
);
$fields['_bs_review_heading']         = array(
	'name' => __( 'Heading', 'perla' ),
	'id'   => '_bs_review_heading',
	'type' => 'text',
	'desc' => __( 'Optional title for review box', 'perla' ),
);
$fields['_bs_review_verdict']         = array(
	'name' => __( 'Verdict', 'perla' ),
	'id'   => '_bs_review_verdict',
	'type' => 'text',
	'desc' => __( '1 or 2 word for overall verdict. ex: Awesome', 'perla' ),
);
$fields['_bs_review_verdict_summary'] = array(
	'name' => __( 'Verdict Description - Top', 'perla' ),
	'desc' => __( 'Verdict description that will be shown on top of criteria', 'perla' ),
	'id'   => '_bs_review_verdict_summary',
	'type' => 'textarea',
);
$fields['_bs_review_extra_desc']      = array(
	'name' => __( 'Verdict Description - Bottom', 'perla' ),
	'desc' => __( 'Verdict description that will be shown under criteria', 'perla' ),
	'id'   => '_bs_review_extra_desc',
	'type' => 'textarea',
);


/**
 * => Criteria Options
 */
$fields['_criteria_options']   = array(
	'name' => __( 'Criteria', 'perla' ),
	'id'   => '_criteria_options',
	'type' => 'tab',
	'icon' => 'bsai-list-bullet',
);
$fields['_bs_review_criteria'] = array(
	'name'          => __( 'Criteria', 'perla' ),
	'id'            => '_bs_review_criteria',
	'type'          => 'repeater',
	'add_label'     => '<i class="fa fa-plus"></i> ' . __( 'Add Criterion', 'perla' ),
	'delete_label'  => __( 'Delete Criterion', 'perla' ),
	'item_title'    => __( 'Criterion', 'perla' ),
	'section_class' => 'full-with-both',
	'std'           => array(
		array(
			'label' => __( 'Sound Quality', 'perla' ),
			'rate'  => '8',
		)
	),
	'default'       => array(
		array(
			'label' => __( 'Sound Quality', 'perla' ),
			'rate'  => '8',
		)
	),
	'options'       => array(
		'label' => array(
			'name'          => __( 'Label', 'perla' ),
			'id'            => 'label',
			'std'           => '',
			'type'          => 'text',
			'section_class' => 'full-with-both bs-review-field-label',
			'repeater_item' => TRUE
		),
		'rate'  => array(
			'name'          => __( 'Rating / 10', 'perla' ),
			'id'            => 'rate',
			'type'          => 'text',
			'std'           => '',
			'section_class' => 'full-with-both bs-review-field-rating',
			'repeater_item' => TRUE,
		),
	)
);


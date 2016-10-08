<?php
/**
 * Custom Fields
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_category-options',
		'title' => 'Category Options',
		'fields' => array (
			array (
				'key' => 'field_533c147d82c97',
				'label' => 'Category Color',
				'name' => 'category_color',
				'type' => 'color_picker',
				'instructions' => 'Pick the color for category.',
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 0,
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_post-options',
		'title' => 'Post Options',
		'fields' => array (
			array (
				'key' => 'field_565f8iab28461',
				'label' => 'Single Post Style',
				'name' => 'gp_theprint_single_post_style',
				'type' => 'select',
				'choices' => array (
					'style-a' => 'Style A',
					'style-b' => 'Style B',
					'style-c' => 'Style C',
					'style-d' => 'Style D',
					'style-e' => 'Style E',
					'style-f' => 'Style F',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'style-a',
			),
			array (
				'key' => 'field_53ad7fb9bd2bb',
				'label' => 'Make Featured',
				'name' => 'gp_theprint_featured_post_add',
				'type' => 'true_false',
				'message' => 'Make this post as the featured post.',
				'default_value' => 0,
			),
			array (
				'key' => 'field_53bt7ea95418d',
				'label' => 'Make Staff Pick',
				'name' => 'gp_theprint_staff_post_add',
				'type' => 'true_false',
				'message' => 'Make this post as the staff pick post.',
				'default_value' => 0,
			),
			array (
				'key' => 'field_53ae13db3187a',
				'label' => 'Make Trending',
				'name' => 'gp_theprint_trending_post_add',
				'type' => 'true_false',
				'message' => 'Make this post as the trending post.',
				'default_value' => 0,
			),
			array (
				'key' => 'field_531c4bce89731',
				'label' => 'Post Sidebar',
				'name' => 'gp_theprint_post_sidebar',
				'type' => 'radio',
				'choices' => array (
					'post_sidebar_on' => 'Enable',
					'post_sidebar_off' => 'Disable',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'post_sidebar_on',
				'layout' => 'horizontal',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));

	register_field_group(array (
		'id' => 'acf_post-score',
		'title' => 'Post Score',
		'fields' => array (
			array (
				'key' => 'field_531c4deba097f',
				'label' => 'Enable Post Rating',
				'name' => 'gp_theprint_enable_rating',
				'type' => 'true_false',
				'message' => 'Turn On the Score',
				'default_value' => 0,
			),
			array (
				'key' => 'field_531c4e16a0978',
				'label' => 'Rating Title',
				'name' => 'gp_theprint_rating_title',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_531c4deba097f',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_531c4e58a0980',
				'label' => 'Rating Note',
				'name' => 'gp_theprint_rating_note',
				'type' => 'textarea',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_531c4deba097f',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_531c4ed4a0982',
				'label' => 'Rating',
				'name' => 'gp_theprint_rating_module',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_531c4deba097f',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_531c4ef2a0983',
						'label' => 'Label',
						'name' => 'gp_theprint_score_label',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_531c4f13a0984',
						'label' => 'Score',
						'name' => 'gp_theprint_score_number',
						'type' => 'select',
						'column_width' => '',
						'choices' => array (
							1 => 1,
							2 => 2,
							3 => 3,
							4 => 4,
							5 => 5,
							6 => 6,
							7 => 7,
							8 => 8,
							9 => 9,
							10 => 10,
						),
						'default_value' => 1,
						'allow_null' => 0,
						'multiple' => 0,
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Score Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

/* Add-Ons
 * USING PREMIUN ADD-ONS OUTSIDE THIS THEME IS NOT ALLOWED!!!
 */

function gp_register_fields(){
	require get_template_directory() . '/inc/acf-fields/add-ons/acf-repeater/repeater.php';
}
add_action('acf/register_fields', 'gp_register_fields'); 
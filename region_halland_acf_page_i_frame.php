<?php

	/**
	 * @package Region Halland ACF Page I-Frame
	 */
	/*
	Plugin Name: Region Halland ACF Page I-Frame
	Description: Specialfunktion för att skapa en länk som visas i en i-frame 
	Version: 1.3.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa function om ACF är installerad
	add_action('acf/init', 'my_acf_page_i_frame_field_groups');

	// Function för att lägga till "field groups"
	function my_acf_page_i_frame_field_groups() {

		if (function_exists('acf_add_local_field_group')):

			acf_add_local_field_group(array(
			    'key' => 'group_1000137',
			    'title' => 'Visa sida i en i-frame',
			    'fields' => array(
			        0 => array(
			            'key' => 'field_1000138',
    					'label' => 'Ange länk till sidan. Ange fullständig adress inklusive http(s)://',
    					'name' => 'name_1000139',
    					'type' => 'text',
    					'instructions' => '',
    					'required' => 0,
	    				'conditional_logic' => 0,
    					'wrapper' => [
        					'width' => '',
        					'class' => '',
        					'id' => '',
    					],
    					'default_value' => '',
    					'placeholder' => '',
    					'prepend' => '',
    					'append' => '',
    					'maxlength' => '',
			        ),
			    ),
			    'location' => array(
			        0 => array(
			            0 => array(
			                'param' => 'page_template',
			                'operator' => '==',
			                'value' => 'views/template-i-frame.blade.php',
			            ),
			        )
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
			));

		endif;
	
	}

	// Returnera länk
	function get_region_halland_acf_page_i_frame_link() {
		return get_field('name_1000139');	
	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_page_i_frame_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_acf_page_i_frame_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_acf_page_i_frame_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_acf_page_i_frame_deactivate');

?>
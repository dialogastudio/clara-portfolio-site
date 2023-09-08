<?php
/**
 * Clara Figueiredo  v.0.0.1
 *
 * @link https://dialogastudio.com.br
 *
 * @package WordPress
 */

 	// customizar a lista da dashboard
	// https://www.smashingmagazine.com/2013/12/modifying-admin-post-lists-in-wordpress/
	// https://www.idiotinside.com/2015/02/18/how-to-disable-comments-on-custom-post-type/
	// https://developer.wordpress.org/reference/hooks/save_post/

	add_action('init', 'site_init');
	add_filter('admin_init', 'site_admin_init');

	add_theme_support( 'menus' );
	add_theme_support( 'page-thumbnails' ); 
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support( 'custom-logo' );

	function site_init() {

	}

	function site_admin_init() {
		/*
		add_settings_section('minha_secao', 'Minha seção', null, 'general');

		register_setting('general', 'custom_field', 'esc_attr');
		add_settings_field('custom_field', '<label for="custom_field">'.__('Custom Field' , 'custom_field' ).'</label>' , 'general_settings_custom_fields_html', 'general', 'minha_secao');
		*/

		add_settings_section('social_section', 'Redes Sociais', null, 'general');

		AddSettingField('social_section', 'social_whatsapp', 'Whatsapp');
		AddSettingField('social_section', 'social_instagram', 'Instagram');
		AddSettingField('social_section', 'social_email', 'E-mail');
	}

	function AddSettingField($parent, $id, $title) {
		register_setting('general', $id, 'esc_attr');
		add_settings_field($id, '<label for="' . $id . '">'.__($title , $id).'</label>' ,'DrawSettingField_' . $id, 'general', $parent);
	}

	function DrawSettingField_social_whatsapp() {
		DrawSettingField('social_whatsapp');
	}

	function DrawSettingField_social_instagram() {
		DrawSettingField('social_instagram');
	}

	function DrawSettingField_social_email() {
		DrawSettingField('social_email');
	}

	function DrawSettingField($id) {
		$value = get_option( $id, '' );
		echo '<input type="text" id="' . $id .'" name="' . $id .'" value="' . $value . '" />';
	}
?>
<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style','hello-elementor-header-footer' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/*Nom unique*/ /*Nom fonction*/ /*priorité*/ /*nombre d'arguments*/


function Ajout_Lien_Admin( $items, $args ) {

    if ( is_user_logged_in() && $args->theme_location == 'menu-1' ) {
				
        $Lien_Admin = '<li id="menu-item-102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-102"><a href="' . admin_url() . '">Admin</a></li>';
        
        $Pos_Dans_Menu = strpos( $items, 'Nous rencontrer' );

        $items = substr_replace( $items, $Lien_Admin, $Pos_Dans_Menu + strlen('Nous rencontrer'), 0);
		
		/*var_dump($args);*/
    }

    return $items;
}
add_filter( 'wp_nav_menu_items', 'Ajout_Lien_Admin', 10, 2 );
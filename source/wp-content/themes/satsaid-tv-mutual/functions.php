<?php 


//########################################### Definir Directorios #####################################################
define('THEME_URL', get_template_directory_uri());


//########################################### Borrar Version de Wordpress de la Cabecera #####################################################

remove_action('wp_head','wp_generator');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','rds_link');


//########################################### Registrar Javascript y CSS #####################################################




function mutual_registrar_js()
{
    
    //-----Registrar Scripts -----//
    
    // Desregistrar Jquery para cargar CDN
    wp_deregister_script( 'jquery' );
     
    // Register the library again from Google's CDN
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), '2.1.3', false );
     
    // Bootstrap
    wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', array( 'jquery' ), null, true );

    // Custom
    wp_register_script( 'custom', THEME_URL.'/js/custom.js', array( 'jquery' ), null, true );
    
    

    //Activar Scripts
    wp_enqueue_script( 'jquery' );   

    wp_enqueue_script( 'bootstrap' );
   
    wp_enqueue_script( 'custom' ); 
}
add_action( 'wp_enqueue_scripts', 'mutual_registrar_js' );





 

function mutual_registrar_css(){

    //-----Registrar CSS -----//

    //Registrar Estilos
    wp_register_style( 'bootstrap', THEME_URL.'/css/bootstrap.min.css' , array(), null,'all');
    wp_register_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(), null,'all');
    wp_register_style( 'style', THEME_URL.'/style.css', array(), null,'all');

    //Activar Estilo
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('style');


}

add_action( 'wp_enqueue_scripts', 'mutual_registrar_css' );


// ###################################### Menu ########################################## //



/* Theme setup */
add_action( 'after_setup_theme', 'mutal_registrar_navs' );


if ( ! function_exists( 'mutal_registrar_navs' ) ){
    function mutal_registrar_navs() {  
        register_nav_menu( 'primary', __( 'Menu Primario', 'mutual_satsaid' ) );
        register_nav_menu( 'secundary', __( 'Menu Secundario', 'mutual_satsaid' ) );
    }

}
        
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {

  show_admin_bar(false);

}






















 ?>
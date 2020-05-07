<?php
/**
 * Functions and definitions
 * 
 * @package Wordpress
 * @subpackage Newsroom
 * @since Newsroom 1.0
 * 
 */
 /***  1ª función importante ******/
 function newsroom_setup(){
  //Aquí definimos que funciones vamos a utilizar del core de WP, a que elementos damos sopote

      add_theme_support('post-thumbnails'); //añadir imagen destacada

      add_theme_support('custom-logo', //añadir logo
          array(  //en el array definimos argumentos
              'height' => 32,
              'width' => 234,
              'flex-width' => true,
              'flex-height' => true  //asi le permitimos recortar la imagen
             ) );

      add_theme_support( 'custom-background' ); //añadir fondo

      add_theme_support( 'wp-block-styles' ); //relacionado con gutenberg, estilos por defecto, son a nivel de layouts

      add_theme_support( 'html5', 
          array( //dar soporte a html5, por defecto WP hay una serie de etiquetas que no saca en html5 de la versión 4.9 para abajo
        'search-form',  //formulario de búsqueda
        'comment-form',  //formulario de comentariod
        'comment-list',
        'gallery',
        'caption',
    ) );

        load_theme_textdomain( 'newsroom', get_template_directory() . '/languages' );//decimos donde estará la carpeta de lenguaje para que el tema sea traducible
        
        //definimos las localizaciones donde se pueden ubicar los menús
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'newsroom'), //con el segundo parametro hacemos que sea traducible
                'menu-2' => esc_html__( 'Footer Menu', 'newsroom'),
                'social' => esc_html__( 'Social Links Menu', 'newsroom'),
                //en este caso menú principal, footer y menú social, se pueden añadir mas elementos al array
            ));
 }
 //para que se produzca la acción y enganche antes de cargar nuestras funciónes de soporte, añadimos lo siguiente: 
 add_action('after_setup_theme', 'newsroom_setup');


 /***  2ª función importante, aqui vamos a decir como cargar todos los estilos, librerias, scripts, etc ****/
 function newsroom_scripts_styles() {
    
    // Load Custom JavaScript functionality.
    wp_enqueue_script( 'newsroom-script', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), '1.0', true );
    //recuperamos los scrips que tendremos en la carpeta assets/js... ademas añadimos que cargue jquery y que los scripts vayan en footer(esto lo decimos con el último parametro 'true')
    
    // recuperamos la hoja de estilos principal del tema con la version, en el array podríamos añadir más hojas de estilo si las hubiera
    $theme_version = wp_get_theme()->get( 'Version' ); //variable que recupera la versión del tema y que pasamos como parametro a continuación
    
	wp_enqueue_style( 'newsroom-style', get_stylesheet_uri(), array(), $theme_version );
}
//para que se produzca la acción y enganche esta segunda función
add_action( 'wp_enqueue_scripts', 'newsroom_scripts_styles' );

//con esta lo que hacemos es decir que cargue lo que tenemos en la carpeta inc (include) 
require get_template_directory() . '/inc/template-tags.php';
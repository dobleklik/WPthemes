<?php
/**
 * Functions and definitions
 * 
 * @package Wordpress
 * @subpackage Newsroom
 * @since Newsroom 1.0
 * 
 */

 function newsroom_setup(){
  //en esta función definimos que funciones vamos a utilizar del core de WP, a que elementos damos sopote

      add-theme_support( 'post-thumbnails'); //recuperar la imagen destacada

 }
 //para que se produzca la acción y enganche añadimos lo siguiente: 
 add_action('after_setup_theme', 'newsroom_setup');
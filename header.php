<?php
/**
 * The header of the theme
 * 
 * @package WordPress
 * @subpackage Newsroom
 * @since Newsroom 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--añadimos a la etiqueta el idioma a través de función WP-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>"> 
<!--Con la función bloginfo() obtenemos información de nuestro propio sitio, de la propia instalación
del usuario-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--preparado para responsive-->

<?php wp_head(); ?>
</head>

<body <?php body_class():?>>
<!--muy importante la función body_class() nos da información como la página donde nos encontramos,
si el usuario está logado, etc-->
    <?php wp_body_open(); ?> <!--añadimos esta función, dentro de ella podremos meter todas las
    acciones que queramos que actuen justo tras la apertura de body-->
    <div id="page" class="site"> <!-- usa este div para meter a partir de aqui todo el contenido 
           de nuestro tema, así no choca con posibles plugins que el usuario instale y den estilo 
               body   (lo cierra en el archivo footer.php -->
   
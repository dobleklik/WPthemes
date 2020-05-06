<?php
/**
 * The main template (definir que tipo de template es, en este caso el main)
 * 
 * @package WordPress (estamos trabajando sobre Wordpress)
 * @subpackage Newsroom (nombre de nuestro tema)
 * @since Newsroom 1.0  (estará presente en la versión x, para controlar los cambios que vayamos haciendo)
 */
?>
<<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?> <!-- hacemos una llamada a esta función, es un hook que nos permite enganchar-->
</head>
<body>
<?php 
 //loop, el nº de entradas que traerá son las que hemos definido en Ajustes>Ajustes de lectura> Nº máximo de entradas
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
    <!-- hemos cerrado php y ahora le decimos como queremos que nos muestre las entradas que encuentre-->
        <article class="hentry"> <!--irán dentro de la etiqueta article-->
            <?php the_post_thumbnail(); ?> <!-- llamamos a la función para añadir la imagen destacada de la entrada-->
            <?php the_title( sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h2>'); ?>
            <!--dentro de la función the_title podemos añadir una serie de argumentos utilizando la función php sprintf-->
            <!--utiliza este div para poder luego jugar en css con padding o márgenes por ejemplo igual ocurre en el 
            siguiente caso, con entry-sumary, si mostramos el extracto-->
            <div class="entry-content">
             <?php the_content(); ?>
            </div> 

           <!-- <div class="entry-summary">
            <?php //the_excerpt(); ?>
            </div>-->
        </article>

<?php endwhile;

endif;
?>   

<?php wp_footer(); ?>
</body>
</html>
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
 //loop 
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <article class="hentry">
            <?php the_post_thumbnail(); ?>
            <?php the_title( sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink())), '</a></h2>'); ?>
            <div class="entry-summary">
            <?php the_excerpt(); ?>
            </div>
        </article>

<?php endwhile;

endif;
?>   

<?php wp_footer(); ?>
</body>
</html>
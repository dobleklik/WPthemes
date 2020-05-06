<?php
/**
 * The main template
 * 
 * @package WordPress
 * @subpackage Newsroom
 * @since Newsroom 1.0
 */
?>
<<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
</head>
<body>
<?php
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
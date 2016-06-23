<?php
/**
 * Template Name: Demo template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
?>

<div class="block">
    <h2>DEMO PAGE</h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="page-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>

    <?php endif; ?>
</div>

<?php get_footer(); ?>

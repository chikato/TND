<?php
/**
 * Template Name: Page Content template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
?>

<div class="block">
    <div class="page" id="page">
        <section class="section main-section" style="background: url('<?php the_post_thumbnail_url('full'); ?>')">
            <div class="mask fp-table container">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1><?php wp_title(""); ?></h1>
                    </div>
                </div>
            </div>
            <?php get_template_part("parts/part", "scroll-down"); ?>
            <div class="banner-sidebar">
                <?php get_sidebar("contact") ?>
            </div>
        </section>
        <section class="section content-wrapper">
            <div class="container">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Page Contact template
 *
 * @package WordPress
 * @subpackage Lse
 * @since Lse 1.0
 */
get_header();
?>

<div class="block">
    <div class="page" id="fullpage">
        <section class="section" style="background: url('<?php the_post_thumbnail_url('full'); ?>')">
            <div class="mask fp-table container">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1><?php wp_title(""); ?></h1>
                        <?php get_template_part("parts/part", "scroll-down"); ?>
                    </div>
                </div>
            </div>
            <div class="banner-sidebar">
                <?php get_sidebar("contact") ?>
            </div>
        </section>
        <section class="section content-wrapper">
            <div class="container table-center">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="page-content">
                        <?php the_content(); ?>
                        <div class="social-contact"></div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>

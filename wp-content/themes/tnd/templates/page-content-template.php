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
    <div id="fullpage" class="page">
        <section class="section" style="background: url('<?php the_post_thumbnail_url('full'); ?>')">
            <div class="mask fp-table container">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1><?php wp_title(""); ?></h1>
                        <?php get_template_part("parts/part", "scroll-down"); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section fp-table">
            <div class="fp-tableCell container">
                <div class="content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="page-content">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="flex">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>

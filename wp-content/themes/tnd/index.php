<?php get_header(); ?>
<div class="block">
    <div id="fullpage">
        <section class="section" id="section1" style="background: url('<?php echo get_bloginfo('template_url').'/img/content/home/bg1.jpg'; ?>')">
            <div class="mask fp-table container">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1><?php echo get_bloginfo("name"); ?></h1>
                        <?php get_template_part("parts/part", "scroll-down"); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
            $pages  = get_pages( array( 'sort_column' => 'menu_order' ) );
            $length = count($pages);
            $index = 0;

            foreach ( $pages as $page ) {
                $index++;
                if (has_post_thumbnail($page->ID)) {
                    $thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($page->ID),'thumbnail-size', true)[0];
                } else {
                    $thumb_url = "";
                }
            ?>
        <section class="section" id="section<?php echo $index + 1; ?>"  style="background: url('<?php echo $thumb_url; ?>')">
            <div class="mask fp-table container">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1><?php echo $page->post_title; ?></h1>
                        <div>
                            <a class="view-more" href="<?php echo get_page_link( $page->ID ); ?>">
                                <span class="view-more-label">VIEW MORE</span>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                if($index == $length) {
                    get_template_part("parts/part", "scroll-up");
                } else {
                    get_template_part("parts/part", "scroll-down");
                }
                ?>
            </div>
        </section>
        <?php } ?>
    </div>
</div>


<?php get_footer(); ?>

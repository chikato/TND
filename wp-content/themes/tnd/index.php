<?php get_header(); ?>

<div class="block">
    <div id="fullpage">
        <section class="section" id="section1">
            <img data-src="<?php echo get_bloginfo('template_url').'/img/content/home/bg1.jpg'; ?>">
            <div class="mask fp-table">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1>mark e. watson iii</h1>
                        <?php get_template_part("parts/part", "scroll-down"); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section2">
            <img data-src="<?php echo get_bloginfo('template_url').'/img/content/home/bg2.jpg'; ?>">
            <div class="mask fp-table">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1>executive</h1>
                        <?php get_template_part("parts/part", "view-more"); ?>
                        <?php get_template_part("parts/part", "scroll-down"); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section3">
            <img data-src="<?php echo get_bloginfo('template_url').'/img/content/home/bg3.jpg'; ?>">
            <div class="mask fp-table">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1>competitor</h1>
                        <?php get_template_part("parts/part", "view-more"); ?>
                        <?php get_template_part("parts/part", "scroll-down"); ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section4">
            <img data-src="<?php echo get_bloginfo('template_url').'/img/content/home/bg4.jpg'; ?>">
            <div class="mask fp-table">
                <div class="fp-tableCell">
                    <div class="content">
                        <h1>philanthropist</h1>
                        <?php get_template_part("parts/part", "view-more"); ?>
                        <?php get_template_part("parts/part", "scroll-up"); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer(); ?>

<div id="menu">
    <button class="menu-icon"><span></span></button>
</div>
<div id="nav">
    <div class="table-center">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_class' => 'menu',
            'menu_id' => 'primary',
            'container' => FALSE,
        ));
        ?>
    </div>
</div>
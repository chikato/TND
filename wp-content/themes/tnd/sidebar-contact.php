<?php
    if ( ! is_active_sidebar('contact-sidebar') ) {
        return;
    }

    dynamic_sidebar( 'contact-sidebar' );
?>

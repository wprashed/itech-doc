<?php

require_once( __DIR__ . '/doc/post.php' );
require_once( __DIR__ . '/doc/tax.php' );

function itech_doc_custom_css(){ ?>

<style>
.section.docs-heading{
    background: <?php echo carbon_get_the_post_meta('itech_doc_header_background'); ?>; 
}
.big-title h1{
    color: <?php echo carbon_get_the_post_meta('itech_doc_header_color'); ?>;
}
.big-title p{
    color: <?php echo carbon_get_the_post_meta('itech_doc_version_color'); ?>;
}
.docs-sidebar{
    background-color:<?php echo carbon_get_the_post_meta('itech_doc_sidebar_background_color'); ?> ;
}
.docs-sidebar .nav>li>a{
    color: <?php echo carbon_get_the_post_meta('itech_doc_menu_color'); ?>;
}
.docs-sidebar .nav>.active>a{
    color: <?php echo carbon_get_the_post_meta('itech_doc_active_menu_color'); ?>;
    border-left-color: <?php echo carbon_get_the_post_meta('itech_doc_active_menu_border_color'); ?>;
}
.docs-sidebar .nav>li:not(.active)>a:hover{
    color: <?php echo carbon_get_the_post_meta('itech_doc_active_menu_color'); ?>;
    border-left-color: <?php echo carbon_get_the_post_meta('itech_doc_active_menu_border_color'); ?>;
}
</style>

<?php

}

add_action('wp_head','itech_doc_custom_css');
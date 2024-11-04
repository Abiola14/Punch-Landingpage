<?php
function landingpage_theme_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    // Enqueue additional stylesheets or scripts here if needed
    // Example: wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css');
}
add_action('wp_enqueue_scripts', 'landingpage_theme_enqueue_styles');
?>

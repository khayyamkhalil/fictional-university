<?php 
// Create and define a function to point to the stylesheet
function university_files() {
    wp_enqueue_script("university-main-js", get_theme_file_uri('/js/scripts-bundled.js'), NULL, "1.0", true); // Dependencies, version number, do you want to load this file right before the closing body tag.
    wp_enqueue_style("custom-google-fonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("university_main_style", get_stylesheet_uri());
}

// To call the above function, we need to add a WORDPRESS function
add_action("wp_enqueue_scripts", "university_files");


<?php 
// Create and define a function to point to the stylesheet
function university_files() {
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style("university_main_style", get_stylesheet_uri());
}

// To call the above function, we need to add a WORDPRESS function
add_action("wp_enqueue_scripts", "university_files");


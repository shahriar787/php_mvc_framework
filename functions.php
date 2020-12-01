<?php 
// Header
function get_header(){
    include('inc/header.php');
}

// Slider
function get_slider(){
    include('inc/slider.php');
}

// Sidebar
function get_sidebar(){
    include('inc/sidebar.php');
}

// Content
function get_content(){
    include('inc/content.php');
}

// Recruiters
function get_recruiters(){
    include('inc/recruiters.php');
}
// Footer
function get_footer(){
    include('inc/footer.php');
}

/*
Search Template
-----------------------
*/ 
function get_search_content(){
    include('partials/search/search.php');
}
/*
Job Details Template
-----------------------
*/ 
function the_job_content(){
    include('partials/job-details/job-details.php');
}

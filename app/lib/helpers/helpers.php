<?php
function dnd($dirty){
    echo '<div class="jumbo" style="background-color: #ccc;padding:6px;"><pre>';
    var_dump($dirty);
    echo '</pre></div>';
    die();
}

function sanitize($junk){
    return htmlentities($junk, ENT_QUOTES, 'UTF-8');
}

function currentUser(){
    return Users::currentLoggedInUser();
}

function posted_values($post){
    $clean_array = [];
    foreach ($post as $key => $value) {
        $clean_array[$key] = sanitize($value);
    }
    return $clean_array;
}

function currentPage(){
    $currentPage = $_SERVER['REQUEST_URI'];
    if($currentPage == FROOT || $currentPage == FROOT.'home/index'){
        $currentPage = FROOT . 'home';
    }
    return $currentPage;
}
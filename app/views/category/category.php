<?php get_header(); ?>

<?php
foreach ($data as $key) {
    echo $key['one'] . '<br/>';
    echo $key['two'] . '<br/>';
    echo $key['three'] . '<br/>';
}
?>
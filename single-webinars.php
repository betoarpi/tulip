<?php
/*
 * Template Name: Webinar Tulip
 * Template Post Type: post
 */

get_header();

?>

<?php

if (have_posts()) {

    while (have_posts()) {

        the_title();
        the_post();
    }
}

?>


<?php

get_footer();
?>
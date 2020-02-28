<?php
/*
 *  Post Type: Post
 */

get_header();

?>

<main class="container default post">
    <section class="default__content post__content">

        <?php

        if (have_posts()) {

            while (have_posts()) {
                the_post();

                get_template_part('template-parts/post-hero');
                get_template_part('template-parts/share-networks');
                get_template_part('template-parts/content');
            }
        }

        ?>


    </section>
</main>

<?php
get_footer();
?>
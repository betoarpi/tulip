<?php
/*
* Template Name: Blog
 *  Post Type: Posts
 */

get_header();

?>

<main class="container resources">

    <?php




    $args_featured = array(
        'post_type' => "post",
        'order'    => 'ASC',
        'showposts' => 1
    );

    $featured = new WP_Query($args_featured);
    if ($featured->have_posts()) :


        while ($featured->have_posts()) : $featured->the_post();

    ?>
            <section class="featured">
                <div class="featured__image">
                    <?php echo get_the_post_thumbnail(get_the_ID(), "large"); ?>
                </div>
                <div class="featured__description">
                    <h3>Featured</h3>
                    <h2 class="featured__description-title">
                        <?php the_title(); ?>
                    </h2>
                    <a class="link featured__description-btn" href="<?php echo get_permalink(); ?>">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </section>

        <?php
        endwhile;
        wp_reset_postdata();
        wp_reset_query();

    else : ?>

        <p>Nothing Here.</p>

    <?php endif; ?>



   <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-resources',
                'items_wrap' => '<div class="resources__menu"><ul>%3$s</ul></div>',
                'container'=> ''));
    ?>

    <section class="resources__grid posts-grid" id="blog">
        <h2 class="resources__grid__title">Blog Posts</h2>

        <?php
        $args_post = array(
            'post_type' => 'post',
            'order'    => 'DESC',
            'showposts' => 6
        );

        $posts = new WP_Query($args_post);
        if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();

        ?>

                <article class='post-item'>
                    <figure class="post-item__thumbnail">
                        <?php echo get_the_post_thumbnail(get_the_ID(), "medium"); ?>
                    </figure>
                    <h4 class="post-item__title"><?php the_title(); ?></h4>
                    <div class="post-item__excerpt">
                        <p><?php echo get_excerpt(150); ?></p>
                    </div>
                    <a class="post-item__link link" href="<?php echo get_permalink(); ?>">Read More <i class="fas fa-arrow-right"></i></a>
                </article>


            <?php
            endwhile;
            wp_reset_postdata();
            wp_reset_query();
            ?>

        <?php
        else : ?>

            <p>Nothing Here.</p>

        <?php endif;
        ?>

    </section>


</main>

<?php
get_footer();
?>
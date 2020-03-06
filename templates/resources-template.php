<?php
/*
* Template Name: Resource Overview
 *  Post Type: Page
 */

get_header();

?>

<main class="container resources">

    <?php
    $args_featured = array(
        'post_type' => array('post', 'webinars', 'whitepapers'),
        'order'    => 'DESC',
        'showposts' => 1,
        'category_name' => 'featured'
    );

    $featured = new WP_Query($args_featured);
    if ($featured->have_posts()) : while ($featured->have_posts()) : $featured->the_post();

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

    <?php endif; ?>

   <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-resources',
                'items_wrap' => '<div class="resources__menu"><ul>%3$s</ul></div>',
                'container'=> ''));
    ?>

    <section class="resources__grid posts-grid" id="blog">
        <h2 class="resources__grid__title">Featured Blog Posts</h2>

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
                        <a href="<?php echo get_permalink(); ?>">
                        <?php
                            if( has_post_thumbnail() ):
                                echo get_the_post_thumbnail(get_the_ID(), "resources-image");
                            else: ?>
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/placeholder-img.png" />
                            <?php endif; ?>
                        </a>
                    </figure>
                    <h4 class="post-item__title"><?php the_title(); ?></h4>
                    <div class="post-item__excerpt">
                        <p><?php echo get_excerpt(140); ?></p>
                    </div>
                    <a class="post-item__link link" href="<?php echo get_permalink(); ?>">Read More <i class="fas fa-arrow-right"></i></a>
                </article>


            <?php
            endwhile;
            wp_reset_postdata();
            wp_reset_query();
            ?>
            <a class="btn--blue resources__grid__btn" href="<?php echo home_url() . "/blog/"; ?>">View All</a>
        <?php
        else : ?>

            <p>Nothing Here.</p>

        <?php endif;
        ?>

    </section>

    <section class="resources__grid webinars-grid" id="webinars">
        <h2 class="resources__grid__title">Webinars</h2>

        <?php
        $args_webinar = array(
            'post_type' => 'webinars',
            'order'    => 'DESC',
            'showposts' => 6,
            'post_status' => array('publish', 'pending', 'draft')
        );

        $webinars = new WP_Query($args_webinar);
        if ($webinars->have_posts()) : while ($webinars->have_posts()) : $webinars->the_post();

        ?>

                <article class='post-item'>
                    <figure class="post-item__thumbnail">
                        <a href="<?php echo get_permalink(); ?>">
                        <?php
                            if( has_post_thumbnail() ):
                                echo get_the_post_thumbnail(get_the_ID(), "resources-image");
                            else:
                                echo "<img src='https://via.placeholder.com/360x240' />";
                            endif;
                        ?>
                        </a>
                    </figure>
                    <h4 class="post-item__title"><?php the_title(); ?></h4>
                    <div class="post-item__excerpt">
                        <p><?php echo get_excerpt(140); ?></p>
                    </div>
                    <a class="post-item__link link" href="<?php echo get_permalink(); ?>">Read More <i class="fas fa-arrow-right"></i></a>
                </article>


            <?php
            endwhile;
            wp_reset_postdata();
            wp_reset_query();
            ?>
            <a class="btn--blue resources__grid__btn" href="<?php echo get_post_type_archive_link('webinars'); ?>">View All</a>
        <?php
        else : ?>

            <p>Nothing Here.</p>

        <?php endif;

        ?>

    </section>

    <section class="resources__grid whitepapers-grid" id="whitepapers">
        <h2 class="resources__grid__title">Whitepapers</h2>

        <?php
        $args_whitepaper = array(
            'post_type' => 'whitepapers',
            'order'    => 'DESC',
            'showposts' => 6,
            'post_status' => array('publish', 'pending', 'draft')
        );

        $whitepapers = new WP_Query($args_whitepaper);
        if ($whitepapers->have_posts()) : while ($whitepapers->have_posts()) : $whitepapers->the_post();

        ?>

                <article class='post-item'>
                    <figure class="post-item__thumbnail">
                        <a href="<?php echo get_permalink(); ?>">
                        <?php
                            if( has_post_thumbnail() ):
                                echo get_the_post_thumbnail(get_the_ID(), "resources-image");
                            else:
                                echo "<img src='https://via.placeholder.com/360x240' />";
                            endif;
                        ?>
                        </a>
                    </figure>
                    <h4 class="post-item__title"><?php the_title(); ?></h4>
                    <div class="post-item__excerpt">
                        <p><?php echo get_excerpt(140); ?></p>
                    </div>
                    <a class="post-item__link link" href="<?php echo get_permalink(); ?>">Read More <i class="fas fa-arrow-right"></i></a>
                </article>


            <?php
            endwhile;
            wp_reset_postdata();
            wp_reset_query();
            ?>
            <a class="btn--blue resources__grid__btn" href="<?php echo get_post_type_archive_link('whitepapers'); ?>">View All</a>
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
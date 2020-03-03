<?php
/*
* Template Name: Archives
 *  Post Type: Post, Webinars and Whitepapers
 */

get_header();

?>

<main class="container resources">

    <?php

    //Obtener post type

    $post_type = get_post_type();
    $pt = get_post_type_object($post_type);


    $args_featured = array(
        'post_type' =>  $post_type,
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
	
	

    <section class="resources__grid " id="">
        <h2 class="resources__grid__title"> <?php echo $pt->label; ?> </h2>

        <?php
        if (have_posts()) :

            while (have_posts()) : the_post();

        ?>

                <article class='post-item'>
                    <figure class="post-item__thumbnail">
                        <?php
                            if( has_post_thumbnail() ):
                                echo get_the_post_thumbnail(get_the_ID(), "resources-image");
                            else:
                                echo "<img src='https://via.placeholder.com/360x240' />";
                            endif;
                        ?>
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

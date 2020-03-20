 <div class="post__hero">
     <div class="post__hero__image">
     <?php if ( has_post_thumbnail() ) : ?>
         
             <?php echo get_the_post_thumbnail(get_the_ID(), "resources-hero"); ?>
         
     <?php endif; ?>
     </div>
     <div class="post__hero__description">
         <h3><?php if ('post' == get_post_type()) {
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                    }
                } else {
                    echo get_post_type();
                }
                ?></h3>
         <h1 class="post__hero__description-title">
             <?php the_title(); ?>
         </h1>
     </div>
 </div>

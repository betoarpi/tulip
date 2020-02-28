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
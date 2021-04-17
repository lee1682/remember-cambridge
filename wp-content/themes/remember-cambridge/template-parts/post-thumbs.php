 <?php if (have_rows('post_thumbs')) : ?>
 <section class="post-thumbs">
     <div class="container-large">
         <div class="col-12 post-thumbs_header">
             <h2 class="spacer"> <?php the_field('post_heading'); ?></h2>
             <p class="intro"><?php the_field('thumbs_intro_text'); ?> </p>
         </div>
         <div class="col-12 container-row">
             <?php while (have_rows('post_thumbs')) : the_row(); ?>
             <?php
                        $image = get_sub_field('image');
                        $item_heading = get_sub_field('item_heading');
                        $text = get_sub_field('text');
                        $link = get_sub_field('link');
                        $link_text = get_sub_field('link_text');
                        ?>
             <div class="col-12 col-lg-4">
                 <a href="<?php echo $link ?>" class="post-thumbs_wrapper">
                     <div class="post-thumbs_single">
                         <div class="image">
                             <img src="<?php echo $image ?>" alt="">
                         </div>
                         <h3> <?php echo $item_heading ?></h3>
                         <p><?php echo $text ?></p>
                         <a href=" <?php echo $link ?>"> <?php echo $link_text ?> </a>

                     </div>
                 </a>
             </div>
             <?php endwhile; ?>
         </div>

     </div>
 </section>
 <?php endif; ?>
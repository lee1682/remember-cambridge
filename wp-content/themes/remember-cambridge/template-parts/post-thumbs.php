<section class="post-thumbs">
    <div class="container-large">
        <div class="col-12 post-thumbs_header">
            <h2 class="spacer"> <?php the_field('post_heading'); ?></h2>
            <p class="intro"><?php the_field('thumbs_intro_text'); ?> </p>
        </div>

        <!-- displays blog posts on homepage -->
        <?php if ( get_the_ID() === 9) { ?>
        <div class="col-12 container-row">
            <?php   $args = array( 'post_type'=> 'blog',); $the_query = new WP_Query( $args ); if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="post-thumbs_single col-lg-4">
                <a href="<?php the_permalink() ?>" class="post-thumbs_wrapper">
                    <div class="image">
                        <?php the_post_thumbnail(''); ?>
                    </div>
                    <h3><?php the_title();?></h3>
                    <p><?php the_excerpt() ?></p>
                    <button>Read more</button>
                </a>
            </div>
            <?php endwhile; endif; ?>
        </div>

        <!-- Pulls ACF fields from river tours page -->
        <?php } else {  ?>

        <div class="col-12 container-row flex-start">

            <?php  if( have_rows('post_thumbs') ): while( have_rows('post_thumbs') ) : the_row(); ?>

            <div class="post-thumbs_single col-lg-3">
                <a href="<?php echo get_sub_field('link') ?>" class="post-thumbs_wrapper">
                    <div class="image">
                        <img src="<?php echo get_sub_field('image'); ?>"
                            alt=" <?php echo get_sub_field('item_heading');?> ?>">
                    </div>
                    <h3><?php echo get_sub_field('item_heading');?></h3>
                    <p><?php echo get_sub_field('text'); ?></p>
                    <button>Read more</button>
                </a>
            </div>
            <?php endwhile; endif;?>
        </div>

        <?php  } ?>
    </div>
    </div>
</section>
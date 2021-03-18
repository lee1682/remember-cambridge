<section class="post-thumbs">
    <div class="container-large">
        <div class="col-12 post-thumbs_header">
            <h2> <?php the_field('heading'); ?></h2>
        </div>
        <?php if( have_rows('post_thumbs') ): ?>
        <div class="col-12 container-row">
            <?php while( have_rows('post_thumbs') ) : the_row(); ?>
            <?php 
                $image = get_sub_field('image');
                $item_heading = get_sub_field('item_heading');
                $text = get_sub_field('text');
                $link = get_sub_field('link');
            ?>
            <div class="col-12 col-lg-4">
                <a href="<?php echo $link ?>" class="post-thumbs_wrapper">
                    <div class="post-thumbs_single">
                        <div class="image">
                            <img src="<?php echo $image?>" alt="">
                        </div>
                        <h3> <?php echo $item_heading ?></h3>
                        <p>
                            <?php echo $text ?>
                        </p>
                        <a href=""> Read More</a>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif;?>
    </div>
</section>
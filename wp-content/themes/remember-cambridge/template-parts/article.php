<section class="article">
    <div class="container">
        <div class="container-row nav-date">
            <div class="article_breadcrumbs">
                <p> Cambridge History</p>
            </div>
            <div class="article_date">
                <p>
                    Published : 1st March 2020
                </p>
            </div>
        </div>

        <div class="article_image">
            <img src="<?php echo get_field('img')?>" alt="">
        </div>

        <article>
            <?php if( have_rows('article') ): ?>
            <?php while( have_rows('article') ): the_row(); ?>
            <?php if( get_row_layout() == 'paragraph' ): ?>
            <p> <?php the_sub_field('paragraph'); ?> </p>
            <?php elseif( get_row_layout() == 'heading' ): ?>
            <h2> <?php the_sub_field('heading'); ?></h2>
            <?php elseif( get_row_layout() == 'lead' ): ?>
            <p> <?php the_sub_field('lead'); ?></p>
            <?php elseif( get_row_layout() == 'image' ): 
            $image = get_sub_field('image');
            ?>
            <img src="<?php echo $image ?>" alt="">
            <?php endif; ?>
            <?php endwhile ?>
            <?php endif; ?>
        </article>



        <!-- <div class="article_more-posts container-row">

            <h2> Read More From Our Blogs</h2>
            <div class="post col-4">
                <img src="<?php echo get_field('img')?>" alt="">
                <h3> Post Title</h3>
            </div>

            <div class="post col-4">
                <img src="<?php echo get_field('img')?>" alt="">
                <h3> Post Title</h3>
            </div>

            <div class="post col-4">
                <img src="<?php echo get_field('img')?>" alt="">
                <h3> Post Title</h3>
            </div>
        </div> -->


    </div>

</section>
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
            <img src=" <img src=<?php echo get_the_post_thumbnail()?>">
        </div>

        <?php if (have_rows('hero')) : ?>
        <?php while (have_rows('hero')) : the_row();
                          $heading = get_sub_field('title');?>
        <section class="intro-text container-large container-row ">
            <div class="col-12">
                <h2 class="spacer"> <?php echo $heading ?></h2>
            </div>
        </section>
        <?php endwhile; ?>
        <?php endif; ?>
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
</section>
<?php get_header(); ?>

<main role="main">
    <section class="hero">
        <div class="container-large container-row">
            <div class="heading col-12">
                <h1>Cambridge Colleges</h1>
                <P> Collages of cambridge </P>
            </div>
        </div>
    </section>

    <section class="archive-college">
        <div class="container-large container-row">
            <div class="col-12">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if (has_post_thumbnail()) :  ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(array(120, 120)); // Declare pixel size you need inside the array 
                                    ?>
                    </a>
                    <?php endif; ?>


                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <!-- 
                    <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span> -->
                    <!-- <span class="author"><?php _e('Published by', 'html5blank'); ?>
                        <?php the_author_posts_link(); ?></span> -->
                    <!-- <span
                        class="comments"><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'html5blank'), __('1 Comment', 'html5blank'), __('% Comments', 'html5blank')); ?></span> -->


                    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php 
                            ?>

                    <!-- <?php edit_post_link(); ?> -->

                </article>

                <?php endwhile; ?>
                <?php else : ?>

                <article>
                    <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
                </article>

                <?php endif; ?>
                <?php get_template_part('pagination'); ?>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
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
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <!-- <?php if (have_rows('text_and_image')) : ?>
                    <?php while (have_rows('text_and_image')) : the_row();
                                            $image = get_sub_field('image');
                                            $heading = get_sub_field('heading');
                                            $text = get_sub_field('text');
                                            $link = get_sub_field('link');
                                            $link_text = get_sub_field('link_text'); ?>
                    <?php endwhile; ?>
                    <?php endif; ?> -->

                    <div class="container-row">
                        <div class="col-12 col-lg-4 colleges_image-wrapper">
                            <div class="image">
                                <img src="<?php echo $image ?>" alt="">
                                <a href="<?php the_permalink() ?>">More Info</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 colleges_text-wrapper">
                            <h2> <?php the_field('title'); ?> </h2>
                            <p> <?php the_excerpt() ?> </p>
                            <!-- 
                            <ul>
                                <li><strong>Address</strong> Kings Parade CB1 2ND</li>
                                <li><strong>Telephone</strong> 01233 321 123</li>
                            </ul> 
                            -->

                        </div>
                        <div class="col-12 col-lg-2 colleges_highlights">
                            <!-- 
                            <h2> highlights</h2>
                            <ul>
                                <li>highlight</li>
                                <li>highlight</li>
                                <li>highlight</li>
                            </ul> 
                            -->
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
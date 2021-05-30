<?php get_header(); ?>
<main role="main">
    <section class="hero">
        <div class="container-large container-row">
            <div class="heading col-12">
                <h1>Cambridge Colleges</h1>
                <P> Colleges Of Cambridge </P>
            </div>
        </div>
    </section>

    <section class="intro-text container-large container-row ">
        <div class="col-12">
            <?php if (have_rows('intro_text', 34)) : ?>
            <?php while (have_rows('intro_text', 34)) : the_row(); ?>
            <h2 class="spacer"> <?php echo get_sub_field('heading') ?></h2>
            <p>
                <?php echo get_sub_field('text') ?>
            </p>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="content-items archive-college ">
        <?php
        $args = array(
            'posts_per_page'      => -1,
            'post_type'     => 'colleges',
            'orderby', 'date',
            'order'    => 'ASC',
        ); ?>

        <!-- refactor later to improve performance -->
        <?php query_posts($args); ?>
        <!-- refactor later to improve performance -->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="content-item">
                <div class="container-row">
                    <?php if (have_rows('text_and_image')) : ?>
                    <?php while (have_rows('text_and_image')) : the_row();
                                    $image = get_sub_field('image');
                                    $heading = get_sub_field('heading');
                                    $text = get_sub_field('text');
                                    $link = get_sub_field('link');
                                    $link_text = get_sub_field('link_text');
                                ?>
                    <div class="content-item_text col-12 col-lg-6">
                        <h2 class="spacer-left"> <?php the_title() ?>
                        </h2>
                        <p><?php the_excerpt() ?></p>
                        <a href="<?php echo get_post_permalink() ?>"> More Information </a>
                    </div>
                    <div class="content-item_image col-12 col-lg-6">
                        <a href="<?php echo get_sub_field('link') ?>">
                            <img src="<?php echo get_sub_field('image') ?> ">
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>
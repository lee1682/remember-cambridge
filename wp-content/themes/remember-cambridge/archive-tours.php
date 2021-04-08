<?php get_header(); ?>
<main role="main">
    <section class="hero">
        <div class="container-large container-row">
            <div class="heading col-12">
                <h1>Cambridge Tours</h1>
                <P> Tours Of Cambridge </P>
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


    <section class="content-items">
        <?php if (have_rows('item', 34)) : ?>
        <?php while (have_rows('item', 34)) : the_row(); ?>
        <div class="content-item">
            <div class="container-row <?php echo get_sub_field('layout'); ?>">
                <div class="content-item_text col-12 col-lg-6">
                    <h2 class="spacer-left"> <?php echo get_sub_field('heading'); ?>
                    </h2>
                    <p><?php echo get_sub_field('text') ?></p>
                    <a href="<?php echo get_sub_field('link') ?>"> More Information</a>
                </div>
                <div class="content-item_image col-12 col-lg-6">
                    <a href="<?php echo get_sub_field('link') ?>">
                        <img src="<?php echo get_sub_field('image') ?> ">
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>
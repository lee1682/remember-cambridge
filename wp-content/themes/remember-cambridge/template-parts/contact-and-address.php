<?php if (have_rows('contact_and_address')) : ?>
<?php while (have_rows('contact_and_address')) : the_row();
    ?>
<section class="contact-and-address container-row">
    <div class="container-large container-row">
        <div class="col-12">
            <h2><?php echo get_sub_field('heading') ?></h2>
        </div>
        <div class="contact-and-address_contact col-12 col-lg-6 container-row ">

            <div class="col-6  ">
                <h3><?php echo get_sub_field('address_heading') ?></h3>
                <p> <?php echo get_sub_field('address') ?> </p>
            </div>

            <div class="col-6">
                <?php if (have_rows('contact')) : ?>
                <?php while (have_rows('contact')) : the_row(); ?>

                <?php $phone = get_sub_field('phone') ?>
                <?php $web = get_sub_field('web') ?>

                <h3>Contact</h3>
                <h4>Phone</h4>
                <p><?php echo $phone ?></p>
                <a href="<?php echo $web ?>"> Visit Online</a>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- 
            <?php
            $link = get_field('link');
            if ($link) : ?>
            <a class="btn-primary-outline" href="<?php echo esc_url($link); ?>">Visit Site</a>
            <?php endif; ?> 
            -->
        </div>

        <div class="contact-and-address_map col-12 col-lg-6">
            <?php $location = get_field('map'); ?>
            <img src="<?php echo get_sub_field('map') ?>" alt="">
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php endif; ?>
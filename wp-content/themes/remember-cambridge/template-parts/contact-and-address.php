<?php if (have_rows('contact_and_address')) : ?>
<?php while (have_rows('contact_and_address')) : the_row();
    ?>
<section class="contact-and-address container-row">
    <div class="container-large container-row">

        <div class="col-12 col-lg-6 contact-and-address_left">

            <div class="col-12 col-lg-6">
                <h2><?php echo get_sub_field('heading') ?></h2>
            </div>

            <div class="contact-and-address_contact col-6 container-row ">


                <div class="col-12 ">
                    <h3><?php echo get_sub_field('address_heading') ?></h3>
                    <p> <?php echo get_sub_field('address') ?> </p>
                </div>

                <div class="col-12">
                    <?php if (have_rows('contact')) : ?>
                    <?php while (have_rows('contact')) : the_row(); ?>

                    <?php $phone = get_sub_field('phone') ?>
                    <?php $web = get_sub_field('web') ?>

                    <h3>Contact</h3>

                    <?php if (have_rows('phone')) { ?>
                    <h4>Phone</h4>
                    <p><?php echo $phone ?></p>
                    <?php } ?>
                    <h4>Phone</h4>
                    <p><?php echo $phone ?></p>



                    <?php if (have_rows('web')) { ?>
                    <a href="<?php echo $web ?>"> Visit Online</a>
                    <?php } ?>






                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <?php
                        $link = get_field('link');
                        if ($link) : ?>
                <a class="btn-primary-outline" href="<?php echo esc_url($link); ?>">Visit Site</a>
                <?php endif; ?>
            </div>
        </div>

        <div class="contact-and-address_map col-12 col-lg-6">

            <?php
                    $location = get_sub_field('map');
                    if ($location) : ?>
            <div class="acf-map" data-zoom="16">
                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>"
                    data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php endif; ?>
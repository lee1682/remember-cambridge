<?php if (have_rows('contact_and_address')) : ?>
<?php while (have_rows('contact_and_address')) : the_row();
    ?>
<section class="contact-and-address container-row">

    <div class="container-large container-row">
        <div class="contact-and-address_contact col-12 col-lg-6 container-row ">
            <div class="col-12">
                <h2><?php echo get_sub_field('heading') ?></h2>
            </div>
            <div class="col-12">
                <h3><?php echo get_sub_field('address_heading') ?></h3>
                <p> <?php echo get_sub_field('address') ?> </p>
            </div>

            <div class="col-12">
                <h3> <?php echo get_sub_field('contact_heading') ?></h3>
                <p> <?php echo get_sub_field('contact') ?> </p>
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
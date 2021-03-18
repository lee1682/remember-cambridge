<?php if( have_rows('contact_and_address') ): ?>
<?php while( have_rows('contact_and_address') ): the_row(); 
?>
<section class="contact-and-address">
    <div class="container-large container-row">
        <div class="contact-and-address_contact col-12 col-lg-4 container-row ">
            <div class="col-12">
                <h2><?php  echo get_sub_field('heading') ?></h2>
            </div>
            <div class="col-12">
                <h3> <?php  echo get_sub_field('contact_heading') ?></h3>
                <p> <?php  echo get_sub_field('contact') ?> </p>
            </div>
            <div class="col-12">
                <h3><?php  echo get_sub_field('address_heading') ?></h3>


                <?php if (have_rows('Address')): ?>
                <ul>
                    <?php while ( have_rows('Address') ) : the_row();?>
                    <?php $bold_text = get_sub_field('bold_text');?>
                    <li>
                        <strong> <?php echo $bold_text ?> </strong> <?php echo $regular_text ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <!-- 
            <?php 
            $link = get_field('link');
            if( $link ): ?>
            <a class="btn-primary-outline" href="<?php echo esc_url( $link ); ?>">Visit Site</a>
            <?php endif; ?> -->





            </div>
        </div>

        <div class="col-12 col-lg-8">
            <div class="contact-and-address_map">
                <?php $location = get_field('map');?>
                <img src="<?php echo get_sub_field('map') ?>" alt="">
            </div>
        </div>
    </div>
</section>


<?php endwhile; ?>
<?php endif; ?>
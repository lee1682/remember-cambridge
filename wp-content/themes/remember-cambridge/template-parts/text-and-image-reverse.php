<?php if( have_rows('text_and_image_reverse') ): ?>
<?php while( have_rows('text_and_image_reverse') ): the_row(); 
    // Get sub field values.
    $image = get_sub_field('image');
    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
    $link = get_sub_field('link');
    $link_link = get_sub_field('link_text');
?>
<section class="text-and-image-reverse">
    <div class="container-large container-row">
        <div class="col-12 col-lg-6">
            <div class="text-and-image_img">
                <img src="<?php echo $image ?>" />
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="text-and-image_text">
                <h2> <?php echo $heading ?></h2>
                <p> <?php echo $text ?></p>
                <a href="<?php echo $link ?>"> <?php echo $link_text ?> </a>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>



<!-- <section class="text-and-image-bottom">
    <div class="container-large container-row">
        <div class="col-12 col-lg-6">
            <div class="text-and-image_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ph.jpg">
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="text-and-image_text">

                <h2> Expert Knowledge</h2>

                <p>Our local, friendly team are experts in all things tourist related around Cambridge. We have used our
                    knowledge and experience to compile everything a visitor to Cambridge needs online and in one place.
                </p>
            </div>
        </div>
    </div>
</section> -->
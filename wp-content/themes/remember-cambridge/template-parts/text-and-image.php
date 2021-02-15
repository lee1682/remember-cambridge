<?php if( have_rows('text_and_image') ): ?>
<?php while( have_rows('text_and_image') ): the_row(); 
    // Get sub field values.
    $image = get_sub_field('image');
    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
?>
<section class="text-and-image">
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
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>



<!-- <section class="text-and-image">
    <div class="container-large container-row">
        <div class="col-12 col-lg-6">
            <div class="text-and-image_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ph.jpg">
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="text-and-image_text">

                <h2>Free Information</h2>

                <p> ot only is tourist information for the city now in one place but it is all completely free. Browse
                    the site for information on things to do, places to eat and top tips from our blog. Or if you want a
                    more in-depth look at the city download a self-guided tour. </p>
            </div>
        </div>
    </div>
</section> -->
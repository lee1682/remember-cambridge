<?php if (have_rows('text_and_image_reverse')) : ?>
<?php while (have_rows('text_and_image_reverse')) : the_row();
        $image = get_sub_field('image');
        $heading = get_sub_field('heading');
        $text = get_sub_field('text');
        $link = get_sub_field('link');
        $link_text = get_sub_field('link_text');
    ?>
<section class="text-and-image-reverse" id="text-and-image-reverse">
    <div class="container-large container-row">
        <div class="col-12 col-lg-6">
            <?php if (!$link) { ?>
            <div class="text-and-image_img">
                <img src="<?php echo $image ?>" />
            </div>
            <?php   } else { ?>
            <a class="" href=" <?php echo $link ?>">
                <div class="text-and-image_img">
                    <img src="<?php echo $image ?>" />
                </div>
            </a>
            <?php } ?>
        </div>
        <div class="col-12 col-lg-6">
            <div class="text-and-image_text">
                <h2 class="spacer-left"> <?php echo $heading ?></h2>
                <p> <?php echo $text ?></p>
                <a class="btn-outline-green" href="<?php echo $link ?>"> <?php echo $link_text ?> </a>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
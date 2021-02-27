<?php if( have_rows('full_width_image') ): ?>
<?php while( have_rows('full_width_image') ): the_row(); 
    $image = get_sub_field('image');
    $caption = get_sub_field('caption');
?>
<section class="full-width-image">
    <div class="container-large container-row">
        <div class="col-12">
            <div class="full-width-image_img">
                <img src="<?php echo $image ?>" />
            </div>
        </div>
        <div class="col-12">
            <div class="full-width-image_caption">
                <p> <?php echo $caption ?></p>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
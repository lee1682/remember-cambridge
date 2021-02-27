<?php if( have_rows('item') ):?>
<section class="content-items">
    <?php while( have_rows('item') ) : the_row(); ?>
    <?php $heading = get_sub_field('heading'); ?>
    <?php $text = get_sub_field('text'); ?>
    <?php $image = get_sub_field('image'); ?>
    <?php $layout = get_sub_field('layout');?>
    <div class="content-item">
        <div class="container-row <?php echo $layout?>">
            <div class="content-item_text col-12 col-lg-6">
                <h2> <?php echo $heading ?> </h2>
                <p> <?php echo $text ?> </p>
            </div>
            <div class="content-item_image col-12 col-lg-6">
                <img src="<?php echo $image ?> ">
            </div>
        </div>
    </div>
    <?php endwhile ?>
</section>
<?php endif;?>
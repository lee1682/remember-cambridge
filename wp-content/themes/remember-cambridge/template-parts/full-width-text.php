<?php if( have_rows('full_width_text') ):?>
<section class="full-width-text">
    <div class="container-large">
        <div class="col-12">
            <?php while( have_rows('full_width_text') ) : the_row();?>
            <?php 
                $heading = get_sub_field('heading');
                $text = get_sub_field('text');
            ?>
            <h2> <?php echo $heading ?></h2>
            <p> <?php echo $text ?></p>
            <?php endwhile;?>
        </div>
    </div>
</section>
<?php endif;?>
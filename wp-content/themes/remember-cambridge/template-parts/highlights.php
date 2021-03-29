<?php if( have_rows('highlights') ): ?>
<section class="highlights">
    <div class="container-large">
        <div class="col-12 highlights_header">
            <?php $heading =  get_field('heading')?>
            <h2> <?php echo $heading?> </h2>
        </div>
        <div class="col-12 container-row highlights_wrapper">
            <?php while( have_rows('highlights') ) : the_row(); ?>
            <?php 
                $icon = get_sub_field('icon');
                $sub_heading = get_sub_field('sub_heading');
                $text = get_sub_field('text');
            ?>
            <div class="col-12 col-lg-4">
                <div class="highlights_single center-aligned">
                    <div class="icon">
                        <img src="<?php echo $icon?>" alt="">
                    </div>
                    <h3>
                        <?php echo $sub_heading?>
                    </h3>
                    <p>
                        <?php echo $text ?>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>
<?php endif;?>
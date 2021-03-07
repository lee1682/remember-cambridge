<?php if( have_rows('intro_text') ): ?>
<?php while( have_rows('intro_text') ): the_row(); 
    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
    ?>
<section class="intro-text container-large container-row ">
    <div class="col-12">
        <h2> <?php echo $heading ?></h2>
        <p>
            <?php echo $text ?>
        </p>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php if( have_rows('featured_post') ): ?>
<?php while( have_rows('featured_post') ): the_row(); 
    $heading = get_sub_field('heading');
    $text = get_sub_field('text');
    ?>

<section class="featured-post">
    <div class="container-large container-row">
        <div class="col-12 col-lg-12">
            <div class="featured-post_text">
                <h2> <?php echo $heading ?></h2>
                <p> <?php echo $text ?> </p>
                <a href=""> Cookie </a>
            </div>

        </div>
    </div>
</section>

<?php endwhile; ?>
<?php endif; ?>
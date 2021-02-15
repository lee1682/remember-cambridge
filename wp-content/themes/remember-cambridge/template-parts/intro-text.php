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


<!-- 
<section class="intro-text container-large container-row ">
    <div class="col-12">
        <h2> Category Intro Text</h2>

        <p> Cambridge is a small yet vibrant city packed with things to do, from stepping inside inspiring buildings to
            gliding down the river on a punt.

            Discover Cambridge on the go with free PDF guides to the perfect visit. Plus, book onto one of our
            professional walking tours or download our free self-guided tours and discover Cambridge in an unforgettable
            way!
        </p>
    </div>
</section> -->
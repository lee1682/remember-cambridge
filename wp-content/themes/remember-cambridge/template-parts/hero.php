<section class="<?php if( is_page_template ( 'front-page.php' ) ) {
    echo 'hero full-page'; }else{ echo 'hero';}?>">
    <div class="container-large container-row">
        <div class="heading col-12">
            <h1><?php the_field('title'); ?></h1>
            <P> <?php the_field('tag');?></P>
        </div>
    </div>
</section>
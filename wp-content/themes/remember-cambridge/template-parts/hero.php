<?php $bg = the_field('image');?>
<section class="<?php if( is_page_template ( 'front-page.php' ) ) { echo 'hero full-page'; }else{ echo 'hero';}?>"
    style="background-image: url('http://localhost/remember-cambridge/wp-content/uploads/2021/02/ph.jpg');">
    <div class="container-large container-row">
        <div class="heading col-12">
            <h1><?php the_field('title'); ?></h1>
            <P> <?php the_field('tag');?></P>
        </div>
    </div>
</section>
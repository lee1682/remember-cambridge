<section class="post-thumbs">
    <div class="container-large">
        <div class="col-12 post-thumbs_header">
            <h2> <?php the_field('heading'); ?></h2>
        </div>
        <?php if( have_rows('post_thumbs') ): ?>
        <div class="col-12 container-row">
            <?php while( have_rows('post_thumbs') ) : the_row(); ?>
            <?php 
                $image = get_sub_field('image');
                $item_heading = get_sub_field('item_heading');
                $text = get_sub_field('text');
            ?>
            <div class="col-12 col-lg-4">
                <div class="post-thumbs_single">
                    <div class="image">
                        <img src="<?php echo $image?>" alt="">
                    </div>
                    <h3> <?php echo $item_heading ?></h3>
                    <p>
                        <?php echo $text ?>
                    </p>
                    <a href=""> Icecream</a>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif;?>
    </div>
</section>

<!-- <section class="post-thumbs">

    <div class="container-large">
        <div class="col-12 post-thumbs_header">
            <h2> Post Thumbs</h2>
        </div>

        <div class="col-12 container-row">

            <div class="col-12 col-lg-4">
                <div class="post-thumbs_single center-aligned">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ph.jpg">
                    </div>
                    <h3> Jelly Beans Pie</h3>
                    <p>Topping fruitcake gummi bears fruitcake caramels marzipan. Donut donut sugar plum topping gummi
                        bears.
                        sweet roll chocolate bar muffin chupa chups lemon drops cheesecake. Gummi bears
                        donut croissant
                        powder.
                    </p>
                    <a href=""> Icecream</a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="post-thumbs_single center-aligned">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ph.jpg">
                    </div>
                    <h3> Jelly Beans Pie</h3>
                    <p>Topping fruitcake gummi bears fruitcake caramels marzipan. Donut donut sugar plum topping gummi
                        bears.
                        sweet roll chocolate bar muffin chupa chups lemon drops cheesecake. Gummi bears
                        donut croissant
                        powder.
                    </p>
                    <a href=""> Icecream</a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="post-thumbs_single center-aligned">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ph.jpg">
                    </div>
                    <h3> Jelly Beans Pie</h3>
                    <p>Topping fruitcake gummi bears fruitcake caramels marzipan. Donut donut sugar plum topping gummi
                        bears.
                        sweet roll chocolate bar muffin chupa chups lemon drops cheesecake. Gummi bears
                        donut croissant
                        powder.
                    </p>
                    <a href=""> Icecream</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="article">
    <div class="container">
        <div class="container-row nav-date">
            <div class="article_breadcrumbs">
                <p> Breadcrumbs</p>
            </div>
            <div class="article_date">
                <p>
                    1st January 2020
                </p>
            </div>
        </div>

        <div class="article_image">
            <img src="<?php echo get_field('img')?>" alt="">
        </div>

        <article>
            <p class="lead">
                <?php the_field('lead')?>
            </p>

            <div>
                <?php the_field('text')?>

            </div>


        </article>

        <!-- <div class="article_more-posts container-row">

            <h2> Read More From Our Blogs</h2>
            <div class="post col-4">
                <img src="<?php echo get_field('img')?>" alt="">
                <h3> Post Title</h3>
            </div>

            <div class="post col-4">
                <img src="<?php echo get_field('img')?>" alt="">
                <h3> Post Title</h3>
            </div>

            <div class="post col-4">
                <img src="<?php echo get_field('img')?>" alt="">
                <h3> Post Title</h3>
            </div>
        </div> -->


    </div>
</section>
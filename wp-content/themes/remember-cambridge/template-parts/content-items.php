<?php if (have_rows('item')) : ?>
    <section class="content-items">
        <?php while (have_rows('item')) : the_row(); ?>
            <?php $heading = get_sub_field('heading'); ?>
            <?php $text = get_sub_field('text'); ?>
            <?php $image = get_sub_field('image'); ?>
            <?php $layout = get_sub_field('layout'); ?>
            <?php $link = get_sub_field('link'); ?>
            <?php $link_text = get_sub_field('link_text'); ?>
            <div class="content-item">
                <div class="container-row <?php echo $layout ?>">
                    <div class="content-item_text col-12 col-lg-6">
                        <?php if ($link) {
                        ?>
                            <h2> <a href="<?php echo $link ?>"> <?php echo $heading ?> </a></h2>
                            <p> <?php echo $text ?> </p>
                            <a class="btn-outline-green" href="<?php echo $link ?>"> <?php echo $link_text ?> </a>

                        <?php
                        } else {
                        ?>
                            <h2><?php echo $heading ?></h2>
                            <p> <?php echo $text ?> </p>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="content-item_image col-12 col-lg-6">
                        <?php if ($link) {
                        ?>
                            <a href="<?php echo $link ?>">
                                <img src="<?php echo $image ?> ">
                            </a>
                        <?php
                        } else {
                        ?>
                            <img class="btn-primary-outline" src="<?php echo $image ?> ">
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </section>
<?php endif; ?>
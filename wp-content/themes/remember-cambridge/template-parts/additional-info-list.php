<section class="additional-info-list">
    <div class="container-large">
        <div class="col-12">
            <h2 class="spacer-left-white"><?php the_field('additional_info_heading'); ?></h2>
            <?php if (have_rows('additional_info_list')) : ?>
            <ul>
                <?php while (have_rows('additional_info_list')) : the_row(); ?>
                <?php
                        $bold_text = get_sub_field('bold_text');
                        $regular_text = get_sub_field('regular_text'); ?>
                <li>
                    <strong> <?php echo $bold_text ?> </strong> <?php echo $regular_text ?>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <!-- 
            <?php
            $link = get_field('link');
            if ($link) : ?>
            <a class="btn-primary-outline" href="<?php echo esc_url($link); ?>">Visit Site</a>
            <?php endif; ?> -->
        </div>
    </div>
</section>
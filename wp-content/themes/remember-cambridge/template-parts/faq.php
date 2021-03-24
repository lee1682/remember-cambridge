<section class="faq">

    <div class="container-large">
        <div class="col-12">
            <h2><?php the_field('faq_heading'); ?></h2>
        </div>
    </div>

    <div class="container-large container-row faq__content">
        <div class="col-12 col-lg-7">
            <?php if (have_rows('question_and_answer')): ?>
            <div class="accordion-wrapper">
                <?php while ( have_rows('question_and_answer') ) : the_row();?>
                <div class="accordion-wrapper__item">
                    <div class="accordion-wrapper__question">
                        <h3> <?php the_sub_field('question'); ?></h3>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px"
                            height="32px">
                            <path fill-rule="evenodd" fill="rgb(34, 48, 76)"
                                d="M27.314,27.314 C21.065,33.562 10.935,33.562 4.686,27.314 C-1.562,21.065 -1.562,10.935 4.686,4.686 C10.935,-1.562 21.065,-1.562 27.314,4.686 C33.562,10.935 33.562,21.066 27.314,27.314 ZM25.899,6.101 C20.432,0.633 11.568,0.633 6.100,6.101 C0.633,11.568 0.633,20.432 6.100,25.900 C11.568,31.367 20.432,31.367 25.899,25.900 C31.367,20.432 31.367,11.568 25.899,6.101 ZM21.714,16.953 L16.951,16.953 L16.951,21.713 C16.951,22.240 16.525,22.666 15.999,22.666 C15.473,22.666 15.047,22.239 15.047,21.713 L15.047,16.953 L10.287,16.953 C9.761,16.953 9.334,16.527 9.334,16.001 C9.334,15.475 9.760,15.049 10.286,15.049 L15.047,15.049 L15.047,10.287 C15.047,9.761 15.473,9.334 15.999,9.334 C16.525,9.334 16.951,9.761 16.951,10.287 L16.951,15.049 L21.713,15.049 C22.239,15.049 22.666,15.475 22.666,16.001 C22.666,16.527 22.239,16.953 21.714,16.953 Z" />
                        </svg>
                    </div>
                    <div class="accordion-wrapper__answer active">
                        <p><?php the_sub_field('answer'); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-12 col-lg-5">
            <div class="image-wrapper">
                <?php $image = get_field('faq_image'); ?>
                <img src="<?php echo $image; ?>" alt="">
            </div>
        </div>
    </div>
</section>
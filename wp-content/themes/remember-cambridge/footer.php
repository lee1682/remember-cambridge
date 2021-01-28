    <!-- footer -->
    <footer class="footer" role="contentinfo">
        <div class="container-large container-row">
            <div class="col-3 footer-column first">
                <div class="logo-wrapper">
                    <?php $footer_logo = get_field('footer_logo', 'option'); ?>
                    <?php if ($footer_logo) { ?>
                    <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
                    <?php 
								} ?>
                </div>
                <div class="sc-wrapper">
                    <?php if (get_field('facebook', 'option')) : ?>
                    <a href="<?php the_field('facebook', 'option'); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-facebook.svg"
                            alt="Facebook"></a>
                    <?php endif; ?>
                    <?php if (get_field('twitter', 'option')) : ?>
                    <a href="<?php the_field('twitter', 'option'); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-twitter.svg"
                            alt="Twitter"></a>
                    <?php endif; ?>
                    <?php if (get_field('instagram', 'option')) : ?>
                    <a href="<?php the_field('instagram', 'option'); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-instagram.svg"
                            alt="Instagram"></a>
                    <?php endif; ?>
                    <p>Copyright © <?php echo date('Y'); ?> SCC Kenya</p>
                </div>
            </div>
            <div class="col-3 footer-column second">
                <?php if (have_rows('reservation', 'option')) : ?>
                <?php while (have_rows('reservation', 'option')) : the_row(); ?>
                <div class="footer-title">
                    <h5><?php the_sub_field('title'); ?></h5>
                </div>
                <?php the_sub_field('information'); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-2 footer-column third">
                <?php wp_nav_menu('footer-menu'); ?>
            </div>
            <div class="col-4 footer-column fourth">
                <div class="footer-form">
                    <div class="footer-title">
                        <h5>Newsletter Sign Up</h5>
                    </div>
                    <?php echo do_shortcode('[contact-form-7 id="235" title="Newsletter Sign Up"]'); ?>
                </div>
                <div class="footer-sponsers">
                    <?php $footer_sponsors_logos = get_field('footer_sponsors_logos', 'option'); ?>
                    <?php if ($footer_sponsors_logos) { ?>
                    <img src="<?php echo $footer_sponsors_logos['url']; ?>"
                        alt="<?php echo $footer_sponsors_logos['alt']; ?>" />
                    <?php 
									} ?>
                </div>
            </div>
            <div class="mobile-socials">
                <div class="mobile-socials__icons">
                    <?php if (get_field('facebook', 'option')) : ?>
                    <a href="<?php the_field('facebook', 'option'); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-facebook.svg"
                            alt="Facebook"></a>
                    <?php endif; ?>
                    <?php if (get_field('twitter', 'option')) : ?>
                    <a href="<?php the_field('twitter', 'option'); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-twitter.svg"
                            alt="Twitter"></a>
                    <?php endif; ?>
                    <?php if (get_field('instagram', 'option')) : ?>
                    <a href="<?php the_field('instagram', 'option'); ?>"><img
                            src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icon-instagram.svg"
                            alt="Instagram"></a>
                    <?php endif; ?>
                </div>
                <p>Copyright © <?php echo date('Y'); ?> SCC Kenya</p>

                <a href="#topbanner" class="scroll-up"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll-down.png" /></a>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    </div>
    <!-- /wrapper -->

    <?php wp_footer(); ?>
    </body>

    </html>
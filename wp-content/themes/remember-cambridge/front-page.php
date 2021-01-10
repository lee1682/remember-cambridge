<?php /* Template Name: front-page */ get_header(); ?>


<?php get_template_part("sections/bc-nav");?>

<?php get_template_part("sections/intro-text" );?>

<?php get_template_part("sections/text-and-image-top" );?>

<?php get_template_part("sections/full-width-cta-banner" );?>

<?php get_template_part("sections/text-and-image-bottom" );?>

<!-- <?php get_template_part("sections/featured-post" );?> -->

<section class="3-col-highlights"></section>

<section class="3-col-post-thumbs"></section>

<section class="contact-cta"></section>

<?php get_footer(); ?>
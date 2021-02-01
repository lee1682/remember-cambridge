<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <!-- <script>
    conditionizr.com
    configure environment tests
    conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
    });
    </script> -->
</head>

<body <?php body_class(); ?>>
    <div id="page">
        <header class="header" role="banner">
            <div class="header_wrapper container-row">
                <div class="header_top-bar container-row col-12 col-lg-5">
                    <div class="header_logo">
                        <a href="">Remember Cambridge</a>
                    </div>
                    <button class="header_button">
                        <div class="line"></div>
                    </button>
                </div>
                <nav class="header_nav container-row col-12 col-lg-7 hide">
                    <a href=""> Icecream</a>
                    <a href=""> Icecream</a>
                    <a href=""> Icecream</a>
                    <a href=""> Icecream</a>
                </nav>
            </div>
        </header>
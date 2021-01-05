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
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>

	<body <?php body_class(); ?>>
		<div class="wrapper">
        
			<header class="header container-large" role="banner">
                <nav class="flex-row">

                    <a href="#"> Remember Cambridge</a>

                    <ul class="flex-row">
                        <li>
                            <a href="#"> Icecream</a>
                        </li>

                        <li>
                            <a href="#"> Icecream</a>
                        </li>

                        <li>
                            <a href="#"> Icecream</a>
                        </li>

                        <li>
                            <a href="#"> Icecream</a>
                        </li>
                    </ul>
                </nav>
                <div class="hero flex-column">
                    <h1> Remember Cambridge </h1>

                     <P> Cookie croissant carrot cake sesame snaps chocolate bar. Cheesecake cupcake cotton candy biscuit dragée caramels wafer cupcake toffee</P>
                
                </div>
            </header>


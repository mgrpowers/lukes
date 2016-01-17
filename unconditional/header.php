<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
    <script type="text/javascript" src="/wordpress/wp-content/themes/unconditional/assets/js/libs/jCarousel.js"></script>
    <script type="text/javascript" src="/wordpress/wp-content/themes/unconditional/assets/js/libs/tabby.js"></script>
    <script type="text/javascript" src="/wordpress/wp-content/themes/unconditional/assets/js/global.js"></script>
  </head>
<body <?php body_class(); ?>>

<?php

get_template_part( 'top-nav' );

if ( is_front_page() ) : ?>
<!--Video Section-->
<section class="header-section" id="section0">
  <div id="header-image">
    <img src="/wordpress/wp-content/uploads/2015/09/header.png" alt="Lukes Organic Logo">
  </div>
</section>

<!--Video Section Ends Here-->
<?php

else : ?>

<section class="header-section" id="section0">
	<div id="header-image">
		<img src="/wordpress/wp-content/uploads/2015/09/header.png" alt="Lukes Organic Logo">
	</div>
</section>
<?php endif; ?>

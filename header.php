<!doctype html>

<!--[if lt IE 7]><html class="ie6"><![endif]-->
<!--[if IE 7]><html class="ie7"><![endif]-->
<!--[if IE 8]><html class="ie8"><![endif]-->
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

    <head>

        <?php
            $description = is_single() ? get_the_excerpt() : get_bloginfo('name') . ' - ' . get_bloginfo('description');
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
        ?>

        <!-- General Meta START -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- General Meta END -->

        <meta name="description" content="<?php echo $description; ?>" />
        <!-- SEO Meta END -->

        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">

        <!-- Disable phone linking on mobile -->
        <meta name="format-detection" content="telephone=no">

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="<?php wp_title(''); ?>">
        <link rel="icon" sizes="192x192" href="<?php echo ICON_PATH; ?>/chrome-touch-icon-192x192.png"> <!-- dodać ikone -->

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="<?php wp_title(''); ?>">
        <link rel="apple-touch-icon" href="<?php echo ICON_PATH; ?>/apple-touch-icon.png"> <!-- dodać ikone -->

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="<?php echo ICON_PATH; ?>/ms-touch-icon-144x144-precomposed.png"> <!-- dodać ikone -->
        <meta name="msapplication-TileColor" content="#b5111c">

        <!-- Color the status bar on mobile devices -->
        <meta name="theme-color" content="#b5111c">

        <!-- Social media tags -->
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $description; ?>">
        <meta property="og:image" content="<?php
            if(is_single()) echo $thumb_url;
            else echo IMG_PATH .'/rff-facebook.jpg'; /* !---- dodać obraz*/
        ?>">
        <meta property="og:url" content="<?php
            if(is_single ()) echo get_permalink();
            else echo get_site_url();
        ?>">
        <meta name="twitter:card" content="summary_large_image">

        <!-- Wordpress Meta  -->
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


        <!-- Wordpress Head START -->
        <?php wp_head(); ?>
        <!-- Wordpress Head END -->
    </head>

    <body <?php body_class(); ?>>
      <?php get_template_part( 'components/header' ); ?>

<?php
/*
 * @package WordPress
 * @subpackage StylusGrafy
 * @since Tererê
 */
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_enqueue_style('style-custom', get_bloginfo('template_directory') . '/css/style.css'); ?>
        <?php wp_enqueue_style('style-custom', get_bloginfo('template_directory') . '/resources/demos/style.css'); ?>
        <?php wp_enqueue_style('jquery-ui', get_bloginfo('template_directory') . '/css/jquery-ui.css'); ?>

        <?php wp_enqueue_script('lightbox'); ?>
        <?php wp_enqueue_style('lightbox', get_bloginfo('template_directory') . '/css/lightbox.css'); ?>
        <?php add_action('wp_enqueue_scripts', 'my_scripts_method'); ?>

        <?php
        ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" language="javascript">
            $(function() {
                $("#tabs").tabs();
            });
        </script>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.min.js" type="text/javascript"></script>
        <![endif]-->

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>
        <header id="masthead" class="site-header" role="banner">
            <?php if (get_header_image()) : ?>
            <div class="cabecalho">  
                <h1>
                     <a href="<?php echo esc_url(home_url('/')); ?>">
                         <img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="Tererê Zionc"/>
                     </a>
                <?php endif; ?>
                </h1>
                <div class="zaionc"></div>
            </div>

            <hgroup>
                <h2 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h2>
                <h2 class="site-description"><?php bloginfo('description'); ?></h2>
            </hgroup>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <h3 class="menu-toggle"><?php _e('Menu', 'twentytwelve'); ?></h3>
                <a class="assistive-text" href="#content" title="<?php esc_attr_e('Skip to content', 'twentytwelve'); ?>"><?php _e('Skip to content', 'twentytwelve'); ?></a>
                <?php wp_nav_menu(array('menu' => 'menu-terere', 'theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->  
        <div id="fundo">
        <div id="page" class="hfeed site">
            <div id="main" class="wrapper">
                
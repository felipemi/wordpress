<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Engegreen
 * @since Engegreen
 */
?>
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
    <head profile="http://gmpg.org/xfn/11">
        <title>
            <?php
            if (is_single()) {
                single_post_title();
            } elseif (is_home() || is_front_page()) {
                bloginfo('name');
                print ' | ';
                bloginfo('description');
                get_page_number();
            } elseif (is_page()) {
                single_post_title('');
            } elseif (is_search()) {
                bloginfo('name');
                print ' | Resultados encontrados para ' . wp_specialchars($s);
                get_page_number();
            } elseif (is_404()) {
                bloginfo('name');
                print ' | Nada Encontrado';
            } else {
                bloginfo('name');
                wp_title('|');
                get_page_number();
            }
            ?>
        </title>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css"/>

        <?php wp_head(); ?>
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf(__('%s latest posts', 'engegreen'), wp_specialchars(get_bloginfo('name'), 1)); ?>" />
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf(__('%s latest comments', 'engegreen'), wp_specialchars(get_bloginfo('name'), 1)); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>

    </head>

    <body <?php body_class(); ?>>

        <div id="wrapper" class="hfeed">
            <div id="header">

                <div id="masthead">
                    <header id="header">
                        <div id="logo">
                            <div id="blog-title">
                                <span>
                                    <a href="<?php bloginfo('url') ?>/" title="<?php bloginfo('name') ?>" rel="home">
                                        <?php if (is_home() || is_front_page()) { ?>
                                        <h1 id="blog-description">
                                            <img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png"/>
                                        </h1>
                                        <?php } else { ?>
                                            <div id="blog-description"><?php bloginfo('description') ?></div>
                                        <?php } ?>
                                    </a>
                                </span>
                            </div>

                        </div>
                        <div id="access">
                            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                                <div class="skip-link">
                                    <a href="#content" title="<?php _e('Skip to content', 'engegreen') ?>">
                                        <?php _e('Skip to content', 'engegreen') ?>
                                    </a>
                                </div>
                                <?php wp_page_menu('sort_column=menu_order'); ?>
                            </nav>
                        </div>
                    </header>
                </div>

            </div>

            <div id="main">
<?php
/*
Theme Name: Engegreen
Theme URI: http://www.engegreen.com.br/
Description: Tempalte Wordpress para o web-site Engegreen
Author: StylusGrafy
Author URI: http://www.stylusgrafy.com.br
Version: 1.0
Tags: separadas por vírgulas para identificar seu template
 */
get_header();
?>

<div id="main-content" class="main-content">

    <?php
    if (is_front_page() && twentyfourteen_has_featured_posts()) {
        // Include the featured content template.
        get_template_part('featured-content');
    }
    ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php
            if (have_posts()) :
                // Start the Loop.
                while (have_posts()) : the_post();

                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part('content', get_post_format());

                endwhile;
                // Previous/next post navigation.
                twentyfourteen_paging_nav();

            else :
                // If no content, include the "No posts found" template.
                get_template_part('content', 'none');

            endif;
            ?>

        </div><!-- #content -->
    </div><!-- #primary -->
    <?php get_sidebar('content'); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();

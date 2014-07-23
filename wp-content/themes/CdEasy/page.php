<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Engegreen
 * @since Engegreen
 */
?>
<?php get_header(); ?>

<div id="container">
    <div id="content">

        <?php the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'engegreen') . '&after=</div>') ?>
                <?php edit_post_link(__('Edit', 'engegreen'), '<span class="edit-link">', '</span>') ?>
            </div><!-- .entry-content -->
        </div><!-- #post-<?php the_ID(); ?> -->                 

        <?php if (get_post_custom_values('comments')) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>                  

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

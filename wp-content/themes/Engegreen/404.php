<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Engegreen
 * @since Engegreen
 */
?>
<?php get_header(); ?>

<div id="container">
    <div id="content">

        <div id="post-0" class="post error404 not-found">
            <h2 class="entry-title"><?php _e('Não encontrada', 'engegreen'); ?></h2>
            <div class="entry-content">
                <p><?php _e('Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'your-theme'); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .entry-content -->
        </div><!-- #post-0 -->

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

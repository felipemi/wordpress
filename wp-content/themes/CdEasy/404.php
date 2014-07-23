<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage CdEasy
 * @since CdEasy
 */
?>
<?php get_header(); ?>

<div id="container">
    <div id="content">

        <div id="post-0" class="post error404 not-found">
            <header class="entry-header">
                <h2 class="entry-title">
                    <span class="ico-serv ico-serv-emp">
                        <?php _e('Nada Encontrado', 'cdeasy'); ?>
                    </span>
                </h2>
            </header>

            <div class="entry-content">
                <p><?php _e('Descuple. Erro 404 !!! A página que você digitou não se encontra online, ou não existe.', 'cdeasy'); ?></p>
                <?php get_search_form(); ?>
            </div><!-- .entry-content -->
        </div><!-- #post-0 -->

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage CdEasy
 * @since CdEasy
 */
?>
<?php get_header(); ?>

<div id="container">
    <div id="content">

        <?php if (have_posts()) : ?>
            <header class="entry-header">
                <h2 class="page-title">
                    <?php _e('Resultados de: ', 'cdeasy'); ?><span><?php the_search_query(); ?></span>
                </h2>
            </header>

            <?php
            global $wp_query;
            $total_pages = $wp_query->max_num_pages;
            if ($total_pages > 1) {
                ?>
                <div id="nav-above" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">«</span> Outros artigos', 'cdeasy')) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">»</span>', 'cdeasy')) ?></div>
                </div><!-- #nav-above -->
            <?php } ?>                                                      

            <?php while (have_posts()) : the_post() ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h3 class="entry-title">
                            <span class="ico-serv ico-serv-emp">
                                <a href="<?php the_permalink(); ?>" title="<?php printf(__('Links %s', 'cdeasy'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
                            </span>
                        </h3>
                    </header>

                    <?php if ($post->post_type == 'post') { ?>
                        <div class="entry-meta">
                            <span class="meta-prep meta-prep-author"><?php _e('Por ', 'cdeasy'); ?></span>
                            <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link(false, $authordata->ID, $authordata->user_nicename); ?>" title="<?php printf(__('View all posts by %s', 'cdeasy'), $authordata->display_name); ?>"><?php the_author(); ?></a></span>
                            <span class="meta-sep"> | </span>
                            <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'cdeasy'); ?></span>
                            <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time(get_option('date_format')); ?></abbr></span>
                            <?php edit_post_link(__('Edit', 'cdeasy'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t") ?>
                        </div><!-- .entry-meta -->
                    <?php } ?>

                    <div class="entry-summary">
                        <?php the_excerpt(__('Continue reading <span class="meta-nav">»</span>', 'cdeasy')); ?>
                        <?php wp_link_pages('before=<div class="page-link">' . __('Páginas:', 'cdeasy') . '&after=</div>') ?>
                    </div><!-- .entry-summary -->

                    <?php if ($post->post_type == 'post') { ?>
                        <div class="entry-utility">
                            <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e('Posted in ', 'cdeasy'); ?></span><?php echo get_the_category_list(', '); ?></span>
                            <span class="meta-sep"> | </span>
                            <?php the_tags('<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'cdeasy') . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n") ?>
                            <span class="comments-link"><?php comments_popup_link(__('Ver Comentários', 'cdeasy'), __('1 Comentário', 'cdeasy'), __('% Comentários', 'cdeasy')) ?></span>
                            <?php edit_post_link(__('Editar', 'cdeasy'), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n") ?>
                        </div><!-- #entry-utility -->
                    <?php } ?>
                </div><!-- #post-<?php the_ID(); ?> -->

            <?php endwhile; ?>

            <?php
            global $wp_query;
            $total_pages = $wp_query->max_num_pages;
            if ($total_pages > 1) {
                ?>
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">«</span> Outros Comentários', 'cdeasy')) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__('Novos comentários <span class="meta-nav">»</span>', 'cdeasy')) ?></div>
                </div><!-- #nav-below -->
            <?php } ?>                      

        <?php else : ?>

            <div id="post-0" class="post no-results not-found">
                <header class="entry-header">
                    <h3 class="entry-title">
                        <span class="ico-serv ico-serv-emp">
                            <?php _e('Nada Encontrado', 'cdeasy') ?>
                        </span>
                    </h3>
                </header>
                <div class="entry-content">
                    <p><?php _e('Desculpe, mas nada corresponde aos seus critérios de busca. Por favor, tente novamente com algumas palavras-chave diferentes.', 'cdeasy'); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- .entry-content -->
            </div>

        <?php endif; ?>                 

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
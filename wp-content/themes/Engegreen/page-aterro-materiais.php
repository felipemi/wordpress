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
 * Template Name: Pagina Aterro Materiais
 */
?>
<?php get_header(); ?>

<div id="container">
    <div id="content">

        <?php the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title">
                    <span class="ico-serv ico-serv-emp">
                        <?php the_title(); ?>
                    </span>
                </h2>
            </header>
            <h3 class="controle-material">
                <span>Operacional e <br />Manutenção de Aterro de Material</span> 
            </h3>
            <div class="entry-content sobre-empresa">
                <?php the_content(); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'engegreen') . '&after=</div>') ?>
                <?php edit_post_link(__('Edit', 'engegreen'), '<span class="edit-link">', '</span>') ?>
            </div><!-- .entry-content -->

            <div class="">

            </div>
        </div><!-- #post-<?php the_ID(); ?> -->      

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h2 class="entry-title">
                    <span class="ico-serv">Serviços</span>
                </h2>
            </header>
            <div class="lista-servicos">
                <ul>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-controle-pragas-urbanas.png" alt="Serviço Controle de Pragas Urbanas" width="185"/> 
                        <div class="box-content">
                            <span class="ico-flecha"></span>
                            <span class="text-box">
                                <a href="<?php echo get_page_link(55); ?>" title="<?php _e('Controle de Pragas Urbanas', 'engegreen') ?>">Controle de <br />Pragas Urbanas</a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-coleta-entulhos.png" alt="Serviço Coleta de Entuulhos" width="185"/> 
                        <div class="box-content">
                            <span class="ico-flecha"></span>
                            <span class="text-box coleta">
                                <a href="<?php echo get_page_link(67); ?>" title="<?php _e('Coleta de Entulhos', 'engegreen') ?>">Coleta de Entulhos</a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-coleta-transporte-residuos-solidos.png" alt="Serviço Transporte de Resíduos Sólidos" width="185"/> 
                        <div class="box-content">
                            <span class="ico-flecha"></span>
                            <span class="text-box">
                                <a href="<?php echo get_page_link(65); ?>" title="<?php _e('Transporte de Resíduos Urbanos', 'engegreen') ?>">Transporte de <br />Resíduos Urbanos</a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-operacional-aterros-materiais.png" alt="Serviço Controle Operacional Aterros Materiais" width="185"/> 
                        <div class="box-content">
                            <span class="ico-flecha"></span>
                            <span class="text-box">
                                <a href="<?php echo get_page_link(57); ?>" title="<?php _e('Aterro de Materiais', 'engegreen') ?>">Aterro e <br />Materiais</a>
                            </span>
                        </div>
                    </li>
                    <li>
                        <img src="<?= bloginfo('template_url') ?>/img/img-saneamento-basico.png" alt="Serviço Controle de Saneamento Básico" width="185"/> 
                        <div class="box-content">
                            <span class="ico-flecha"></span>
                            <span class="text-box coleta">
                                <a href="<?php echo get_page_link(61); ?>" title="<?php _e('Saneamento Básico', 'engegreen') ?>">Saneamento Básico</a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- #post-<?php the_ID(); ?> -->  

        <?php if (get_post_custom_values('comments')) comments_template() // Add a custom field with Name and Value of "comments" to enable comments on this page ?>                  

    </div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

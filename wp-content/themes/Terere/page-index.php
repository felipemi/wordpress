<?php
/*
 *
 * @package WordPress
 * @subpackage StylusGrafy
 * @since Tereré
 * Template Name: Inicio
 */
get_header();
?>

<div id="primary" style='margin-bottom: 50px;' class="site-content">
    <div id="content" role="main">
        <?php while (have_posts()) : the_post(); ?>
            <div class="entry-content" id="iniciopag">
                <div class="top">
                    <header class="entry-header linha-prod">
                        <h2 class="entry-title" style="text-align: right !important;">
                            Conheça Nossa Linha de Produtos
                        </h2>
                    </header>
                    <div class="index-img">
                        <figure>
                            <?php 
                                echo do_shortcode("[metaslider id=31]"); 
                            ?>
                        </figure>
                    </div>
                    <div class="index-produtos">
                         <a class="chas-naturais" href="produtos/#tabs-5" alt="chas-naturais">
                            <span class="texto-item">Chás Naturais</span>
                        </a>
                        <a class="erva-mate" href="produtos/#tabs-6" alt="erva-mate">
                            <span class="texto-item">Erva Mate</span>
                        </a>
                        <a class="cha-mate" href="produtos/#tabs-4" alt="cha-mate">
                            <span class="texto-item">Erva para Tereré</span>
                        </a>
                    </div>
                </div>
                <div class="center-video">
                    <div class="row">
                        <div class="video-inf">
                            <div class="left-video">
                                <video width="250" height="240" controls="controls">
                                    <source src="<?= bloginfo('template_url') ?>/video/cha-cha-terere.mp4" type="video/ogg"/>
                                </video>
                            </div>
                            <header class="entry-header entry-video">
                                <h2 class="entry-title p-s4" style="text-align: center !important;">
                                    Conheça mais <br />sobre o <strong>Nós</strong>
                                </h2>
                            </header>
                            <div class="right-video">
                                <video width="250" height="240" controls="controls">
                                    <source src="<?= bloginfo('template_url') ?>/video/erva-mate-terere.mp4" type="video/ogg"/>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
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
 * Template Name: Pagina Controle de Pragas
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
            <h3 class="controle-pragas">
                <span>Controle de <br />Pragas Urbanas</span> 
            </h3>
            <div class="entry-content sobre-empresa pragas-urb">
                <?php the_content(); ?>
                <?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'engegreen') . '&after=</div>') ?>
                <?php edit_post_link(__('Edit', 'engegreen'), '<span class="edit-link">', '</span>') ?>
            </div><!-- .entry-content -->
            <ul id="mycarousel" class="jcarousel jcarousel-skin-tango">
                <li>
                    <a href="#janela1" rel="modal" title="<?php _e('Baratas', 'engegreen') ?>">
                        <img src="<?= bloginfo('template_url') ?>/img/img-pragas-01.png" width="120" alt="Pragas Urbanas"/>
                    </a>
                </li>
                <li>
                    <a href="#janela2" rel="modal" title="<?php _e('Mosquitos', 'engegreen') ?>">
                        <img src="<?= bloginfo('template_url') ?>/img/img-pragas-02.png" width="120" alt="Pragas Urbanas"/>
                    </a>
                </li>
                <li>
                    <a href="#janela3" rel="modal" title="<?php _e('Escorpiões', 'engegreen') ?>">
                        <img src="<?= bloginfo('template_url') ?>/img/img-pragas-03.png" width="120" alt="Pragas Urbanas"/>
                    </a>
                </li>
                <li>
                    <a href="#janela4" rel="modal" title="<?php _e('Ratos', 'engegreen') ?>">
                        <img src="<?= bloginfo('template_url') ?>/img/img-pragas-04.png" width="120" alt="Pragas Urbanas"/>
                    </a>
                </li>
                <li>
                    <a href="#janela5" rel="modal" title="<?php _e('Cupins', 'engegreen') ?>">
                        <img src="<?= bloginfo('template_url') ?>/img/img-pragas-05.png" width="120" alt="Pragas Urbanas"/>
                    </a>
                </li>
                <li>
                    <a href="#janela6" rel="modal" title="<?php _e('Formigas', 'engegreen') ?>">
                        <img src="<?= bloginfo('template_url') ?>/img/img-pragas-06.png" width="120" alt="Pragas Urbanas"/>
                    </a>
                </li>
                <li>
                    <a href="#janela7" rel="modal" title="<?php _e('Carrapatos', 'engegreen') ?>">
                        <img src="<?= bloginfo('template_url') ?>/img/img-pragas-07.png" width="120" alt="Pragas Urbanas"/>
                    </a>
                </li>
            </ul>
        </div><!-- #post-<?php the_ID(); ?> -->  
        <div style="clear: both;"></div>

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
    <div class="window" id="janela1">
        <a href="#" class="fechar">X Fechar</a>
        <div class="left-img">
            <img src="<?= bloginfo('template_url') ?>/img/img-pragas-01.png" width="120" alt="Pragas Urbanas"/>
        </div>
        <div class="box-t">
            <h3 class="cat">Baratas</h3>
            <h4>Provoca Doenças</h4>
            <ul>
                <li>Dermatites</li>
                <li>Salmoneloses</li>
                <li>Amebíase</li>
            </ul>
        </div>
        <div class="box-janela">
            <div class="descricao-janela">
                Se alimentam de resíduos de alimentos fermentados, 
                resíduos de bebidas (cerveja e leite principalmente) e 
                de matéria orgânica.
                Se escondem em lugares escuros, úmidos, e perto de 
                comidas, por isso a preferência da cozinha, mas 
                encontra-se bastante em porões.
            </div>
        </div>
    </div>
    <div class="window" id="janela2">
        <a href="#" class="fechar">X Fechar</a>
        <div class="left-img">
            <img src="<?= bloginfo('template_url') ?>/img/img-pragas-02.png" width="120" alt="Pragas Urbanas"/>
        </div>
        <div class="box-t">
            <h3 class="cat">Mosquitos</h3>
            <h4>Provoca Doenças</h4>
            <ul>
                <li>Dengue</li>
                <li>Febre Amarela</li>
                <li>Leishmaniose</li>
            </ul>
        </div>
        <div class="box-janela">
            <div class="descricao-janela">
                Se alimentam de sangue, preferem o sangue humano, 
                alguns preferem seiva de plantas e até frutas maduras.
                Preferem por ficar em residências, e estão tanto em 
                zonas urbanas como rurais. Preferem por lugares 
                úmidos como caixa d’água, calhas, piscinas, etc.
            </div>
        </div>
    </div>
    <div class="window" id="janela3">
        <a href="#" class="fechar">X Fechar</a>
        <div class="left-img">
            <img src="<?= bloginfo('template_url') ?>/img/img-pragas-03.png" width="120" alt="Pragas Urbanas"/>
        </div>
        <div class="box-t">
            <h3 class="cat">Escorpiões e Aranhas</h3>
            <h4>Provoca Doenças</h4>
            <ul>
                <li>Dor no Local</li>
                <li>Taquipinéia</li>
                <li>Taquicardia</li>
                <li>Endema Pulmonar</li>
                <li>Convulsão</li>
                <li>Choque</li>
            </ul>
        </div>
        <div class="box-janela">
            <div class="descricao-janela">
                São carnívoros,e vão atrás de insetos, borboletas, formigas
                baratas e no caso do escorpião aranhas. E o cabanalismo
                é norma, as fêmeas chegam de comer seus filhotes.
                Podem viver na natureza rala, em troncos de árvores,
                pedras, em construções abandonadas, em tijolos por exemplo.
                E no caso das aranhas em forros e criam suas teias no canto
                do teto.
            </div>
        </div>
    </div>
    <div class="window" id="janela4">
        <a href="#" class="fechar">X Fechar</a>
        <div class="left-img">
            <img src="<?= bloginfo('template_url') ?>/img/img-pragas-04.png" width="120" alt="Pragas Urbanas"/>
        </div>
        <div class="box-t">
            <h3 class="cat">Roedores</h3>
            <h4>Provoca Doenças</h4>
            <ul>
                <li>Leptospirose</li>
                <li>Hantavirose</li>
                <li>Sarna</li>
            </ul>
        </div>
        <div class="box-janela">
            <div class="box-janela">
                <div class="descricao-janela">
                    Se alimentam de todo tipo de alimentos, mas claramente
                    a preferencia é por grãos integrais e cereais.
                    Escavam seus túneis preferencialmente em esgotos e em
                    galerias subterrâneas, mas também encontram-se em
                    telhados, forros e até em guarda-roupas.
                </div>
            </div>
        </div>
    </div>
    <div class="window" id="janela5">
        <a href="#" class="fechar">X Fechar</a>
        <div class="left-img">
            <img src="<?= bloginfo('template_url') ?>/img/img-pragas-05.png" width="120" alt="Pragas Urbanas"/>
        </div>
        <div class="box-t">
            <h3 class="cat">Cupins</h3>
            <h4>Provoca danos à:</h4>
            <ul>
                <li>Estrutura de Madeira</li>
                <li>Papel e Similares</li>
                <li>Cabos Elétricos</li>
            </ul>
        </div>
        <div class="box-janela">
            <div class="descricao-janela">
                Se alimentam da própria peça onde a colônia se
                instala, porém mantém o externo intacto. Também
                se alimentam de madeira morta, gramíneas, fungos,
                raízes superficiais e canibalismo.
                Se encontram em móveis, livros, batentes de portas
                e janelas, esquadrias, pisos, armários, etc. Mas pode
                ser encontrados em solos úmidos e arenoso, em regiões
                quentes contendo alguma forma de alimento abundante.
            </div>
        </div>
    </div>
    <div class="window" id="janela6">
        <a href="#" class="fechar">X Fechar</a>
        <div class="left-img">
            <img src="<?= bloginfo('template_url') ?>/img/img-pragas-06.png" width="120" alt="Pragas Urbanas"/>
        </div>
        <div class="box-t">
            <h3 class="cat">Formigas</h3>
            <h4>Provoca doenças:</h4>
            <ul>
                <li>Micoses</li>
                <li>Verminoses</li>
                <li>Bacterioses</li>
            </ul>
        </div>
        <div class="box-janela">
            <div class="descricao-janela">
                Se alimentam basicamente de fungos, madeiras, carnes, 
                açucares, ovos, bolos, etc.
                Podem ser encontradas em gramados, canteiros, jardins
                calçadas, e podem fazer seus ninhos em madeira morta
                ou fazer montes de terra.
            </div>
        </div>
    </div>
    <div class="window" id="janela7">
        <a href="#" class="fechar">X Fechar</a>
        <div class="left-img">
            <img src="<?= bloginfo('template_url') ?>/img/img-pragas-07.png" width="120" alt="Pragas Urbanas"/>
        </div>
        <div class="box-t">
            <h3 class="cat">Carrapatos</h3>
            <h4>Provoca doenças:</h4>
            <ul>
                <li>Encefalite</li>
                <li>Febre Hoemorrágica</li>
                <li>do Congo Criméia</li>
                <li>Riquéstias</li>
                <li>Debilidade</li>
                <li>Anemia</li>
            </ul>
        </div>
        <div class="box-janela">
            <div class="descricao-janela">
                Se alimentam basicamente de fungos, madeiras, carnes, 
                açucares, ovos, bolos, etc.
                Podem ser encontradas em gramados, canteiros, jardins
                calçadas, e podem fazer seus ninhos em madeira morta
                ou fazer montes de terra.
            </div>
        </div>
    </div>
</div><!-- #container -->
<div id="mascara"></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

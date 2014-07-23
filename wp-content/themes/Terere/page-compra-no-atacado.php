<?php
/*
 *
 * @package WordPress
 * @subpackage StylusGrafy
 * @since Tererê
 * Template Name: Compra no atacado
 */
get_header();
?>
<div id="primary" class="site-content">
    <header class="entry-header">
        <h2 class="entry-title left-sis">
            Compra no <strong>Atacado</strong>
        </h2>
    </header>
    <div id="content" role="main" class="compra-atacado">
        <div class="left-sis">
            <img src="<?= bloginfo('template_url') ?>/img/img-boneco-zaionc.png" width="282"/>
        </div>
        <div class="right-text">
            <h2>Tereré® você e sua empresa tem segurança para comprar melhor e mais barato. </h2>
            <h3>NÃO IMPORTA O TAMANHO DO SEU COMÉRCIO.</h3><br />
            Nossa logística atende todo o território nacional com os menores preços para compra em quantidade.
            <b>Acrescente mais qualidade no seu comércio, compre Tereré®Zaionc® o verdadeiro.</b>
            <b>Acima de 1.000 reais solicite tabela de preços especiais. </b>
            Envie e-mail para <a href="mailto:zaionc@terere.com.br">zaionc@terere.com.br</a> e solicite a TABELA DE PREÇOS
        </div>
        <div style="clear: both;"></div>
        
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
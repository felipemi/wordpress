<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage CdEasy
 * @since CdEasy
 * Template Name: Página Inicial
 */
?>
<?php get_header(); ?>

<div id="container">
    <div id="content">
        <div id="cursos">
            <div class="center">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1" title="">Técnicos</a></li>
                        <li><a href="#tabs-2" title="">Profissionalizantes</a></li>
                        <li><a href="#tabs-3" title="">Informática</a></li>
                        <li><a href="#tabs-4" title="">Língua</a></li>
                    </ul>
                </div>
                <div id="tabs-1" class="tab">
                    <ul class="left">
                        <li><span class="arte-finalista">Arte Finalista</span></li>
                        <li><span class="cabeleleiro">Cabeleleiro Colorimetria</span></li>
                        <li><span class="recepcionista">Recepcionista e Telefonista</span></li>
                    </ul>
                    <ul class="right">
                        <li><span class="crediario">Crediário e Cobrança</span></li>
                        <li><span class="design">Design de Unhas</span></li>
                        <li><span class="atendente">Atendente Odontológico</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="aluno-empresa">
            <div class="bx-left">
                <h2>
                    São Mais de 40 Cursos
                </h2>
                <figure>
                    <img src="" alt=""/>
                </figure>
            </div>
            <div class="bx-right">
                <span>Técnicos</span>
                <span>Informática</span>
                <span>Profissional</span>
            </div>
        </div>

        <div id="noticias">

        </div>
        <div id="contato">

        </div>
    </div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>
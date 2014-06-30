<?php get_header(); ?>
    <div id="conteudo">
        <div id="page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            <?php endwhile; else: ?>
                <h2>Nada Encontrado</h2>
                <p>Erro 404</p>
                <p>Lamentamos mas não foram encontrados artigos.</p>
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
<?php get_header(); ?>
    <div id="conteudo">
        <div id="categoria">
			<?php $post = $posts[0]; ?>
            <h2>
            <?php if (is_category()) { ?>
                <?php echo single_cat_title(); ?>
            <?php } elseif (is_day()) { ?>
                <?php the_time('j \d\e F \d\e Y'); ?>
            <?php } elseif (is_month()) { ?>
                <?php the_time('F \d\e Y'); ?>
            <?php } elseif (is_year()) { ?>
                <?php the_time('Y'); ?>
            <?php } elseif (is_author()) { ?>
                Arquivo do Autor
            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                Arquivo do Blog
            <?php } ?>
            </h2>
            <?php $flag = 0; ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">
                    <?php //the_title(); ?>
                    <?php the_content(''); ?>
                </div>
                <?php $flag = $flag+1; ?>
            <?php endwhile?>
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            <?php else: ?>
                <div class="artigo">
                    <h2>Nada Encontrado</h2>
                    <p>Erro 404</p>
                    <p>Lamentamos mas não foram encontrados artigos.</p>
                </div>            
            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
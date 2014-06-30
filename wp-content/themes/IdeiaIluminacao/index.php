<?php get_header(); ?>
    <div id="home">
        <div class="slider">
			<?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
        </div>
        <div class="thumbs">
        	<h2>Venha visitar nossa loja</h2>
        	<?php echo do_shortcode('[print_thumbnail_slider]'); ?>
        </div>
    </div>
<?php get_footer(); ?>
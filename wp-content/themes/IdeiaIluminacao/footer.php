        <div id="rodape">
        	<div class="dadosRodape">
				<?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rodape Esquerda') ) : ?><?php endif; ?>
                <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rodape Direita') ) : ?><?php endif; ?>
            </div>
        </div>
        <div id="desenvolvedores">
        	&copy; 2014 - Todos os direitos reservados
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
<?php

/* WIDGETS */
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Coluna',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
	register_sidebar(array(
        'name'          => 'Rodape Esquerda',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
	register_sidebar(array(
        'name'          => 'Rodape Direita',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
 
?>
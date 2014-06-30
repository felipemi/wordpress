<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
</head>
<body>
<div id="geral">
	<div id="corpo">
    	<div id="topo">
        	<h1><a href="<?php bloginfo('url'); ?>" title="Idéa Iluminação">Idéa Iluminação</a></h1>
        </div>
        <div id="menu">
        	<ul id="nav">
            	<li><a href="<?php bloginfo('url'); ?>" title="Idéa Iluminação">Inicio</a></li>
	        	<?php wp_list_pages('title_li='); ?>
            </ul>
        </div>
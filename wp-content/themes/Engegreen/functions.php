<?php
// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('engegreen', TEMPLATEPATH . '/languages');

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if (is_readable($locale_file))
    require_once($locale_file);

// Get the page number
function get_page_number() {
    if (get_query_var('paged')) {
        print ' | ' . __('Page ', 'engegreen') . get_query_var('paged');
    }
}

// end get_page_number
// For category lists on category archives: Returns other categories except the current one (redundant)
function cats_meow($glue) {
    $current_cat = single_cat_title('', false);
    $separator = "\n";
    $cats = explode($separator, get_the_category_list($separator));
    foreach ($cats as $i => $str) {
        if (strstr($str, ">$current_cat<")) {
            unset($cats[$i]);
            break;
        }
    }
    if (empty($cats))
        return false;

    return trim(join($glue, $cats));
}

// end cats_meow
// For tag lists on tag archives: Returns other tags except the current one (redundant)
function tag_ur_it($glue) {
    $current_tag = single_tag_title('', '', false);
    $separator = "\n";
    $tags = explode($separator, get_the_tag_list("", "$separator", ""));
    foreach ($tags as $i => $str) {
        if (strstr($str, ">$current_tag<")) {
            unset($tags[$i]);
            break;
        }
    }
    if (empty($tags))
        return false;

    return trim(join($glue, $tags));
}

// end tag_ur_it
// Register widgetized areas
function theme_widgets_init() {
    // Area 1
    register_sidebar(array(
        'name' => 'Primary Widget Area',
        'id' => 'primary_widget_area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));

    // Area 2
    register_sidebar(array(
        'name' => 'Secondary Widget Area',
        'id' => 'secondary_widget_area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

// end theme_widgets_init

add_action('init', 'theme_widgets_init');

// Pre-set Widgets
$preset_widgets = array(
    'primary_widget_area' => array('search', 'pages', 'categories', 'archives'),
    'secondary_widget_area' => array('links', 'meta')
);
if (!isset($_GET['activated'])) {
    update_option('sidebars_widgets', $preset_widgets);
}

// update_option( 'sidebars_widgets', NULL );
// Check for static widgets in widget-ready areas
function is_sidebar_active($index) {
    global $wp_registered_sidebars;

    $widgetcolums = wp_get_sidebars_widgets();

    if ($widgetcolums[$index])
        return true;

    return false;
}

// end is_sidebar_active
// Produces an avatar image with the hCard-compliant photo class
function commenter_link() {
    $commenter = get_comment_author_link();
    if (ereg('<a[^>]* class=[^>]+>', $commenter)) {
        $commenter = ereg_replace('(<a[^>]* class=[\'"]?)', '\\1url ', $commenter);
    } else {
        $commenter = ereg_replace('(<a )/', '\\1class="url "', $commenter);
    }
    $avatar_email = get_comment_author_email();
    $avatar = str_replace("class='avatar", "class='photo avatar", get_avatar($avatar_email, 80));
    echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
}

// end commenter_link
// Custom callback to list comments in the your-theme style
function custom_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    $GLOBALS['comment_depth'] = $depth;
    ?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <div class="comment-author vcard"><?php commenter_link() ?></div>
        <div class="comment-meta"><?php
            printf(__('Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">Permalink</a>', 'engegreen'), get_comment_date(), get_comment_time(), '#comment-' . get_comment_ID());
            edit_comment_link(__('Edit', 'engegreen'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>');
            ?></div>
        <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'engegreen') ?>
        <div class="comment-content">
            <?php comment_text() ?>
        </div>
        <?php
        // echo the comment reply link
        if ($args['type'] == 'all' || get_comment_type() == 'comment') :
            comment_reply_link(array_merge($args, array(
                'reply_text' => __('Reply', 'engegreen'),
                'login_text' => __('Log in to reply.', 'engegreen'),
                'depth' => $depth,
                'before' => '<div class="comment-reply-link">',
                'after' => '</div>'
            )));
        endif;
        ?>
        <?php
    }

// end custom_comments
// Custom callback to list pings
    function custom_pings($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        ?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <div class="comment-author"><?php
            printf(__('By %1$s on %2$s at %3$s', 'engegreen'), get_comment_author_link(), get_comment_date(), get_comment_time());
            edit_comment_link(__('Edit', 'engegreen'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>');
            ?></div>
        <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'engegreen') ?>
        <div class="comment-content">
            <?php comment_text() ?>
        </div>
        <?php
    }

// end custom_pings

    add_filter('stylesheet_directory_uri', 'wpi_stylesheet_dir_uri', 10, 2);

    /**
     * wpi_stylesheet_dir_uri
     * overwrite theme stylesheet directory uri
     * filter stylesheet_directory_uri
     * @see get_stylesheet_directory_uri()
     */
    function wpi_stylesheet_dir_uri($stylesheet_dir_uri, $theme_name) {

        $subdir = '/css';
        return $stylesheet_dir_uri . $subdir;
    }

    function my_scripts_method() {
        if (!is_admin()) {
            wp_enqueue_script('jquery-ui-tabs');
            wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', array('jquery'));
        }
    }

    /* adicionamos suporte aos post thumbnails no WordPress */
    add_theme_support('post-thumbnails');

    /*
      criamos um tamanho de imagem diferenciado
      parâmetros: add_image_size( $name, $width, $height, $crop );
     */
    add_image_size('homepage-thumb', 220, 180, true);

    /* -Adiciona tamanhos de imagens customizados à janela de adição de anexos
     */

    add_filter('attachment_fields_to_edit', 'custom_attachment_fields_to_edit_filter', 100, 2);

    function custom_attachment_fields_to_edit_filter($form_fields, $post) {

        if (!array_key_exists('image-size', $form_fields))
            return $form_fields;

        global $_wp_additional_image_sizes;

        foreach ($_wp_additional_image_sizes as $size => $properties) {

            if ($size == 'post-thumbnail')
                continue;

            $label = ucwords(str_replace('-', ' ', $size));

            $cssID = "image-size-{$size}-{$post->ID}";

            $downsize = image_downsize($post->ID, $size);

            $enabled = $downsize[3];

            $html = '<input type="radio" ' . disabled($enabled, false, false) . 'name="attachments[' . $post->ID . '][image-size]" id="' . $cssID . '" value="' . $size . '">';

            $html .= '<label for="' . $cssID . '">' . $label . '</label>';

            if ($enabled)
                $html .= ' <label for="' . $cssID . '" class="help">(' . $downsize[1] . '&nbsp;×&nbsp;' . $downsize[2] . ')</label>';

            $form_fields['image-size']['html'] .= '<div class="image-size-item">' . $html . '</div>';
        }
        return $form_fields;
    }
    
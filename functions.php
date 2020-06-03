<?php
const ICL_LANGUAGE_CODE = "fr";

if (!function_exists('theme_ieseg_setup')) :
    function theme_ieseg_setup()
    {
        load_theme_textdomain('ieseg2020', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');
        add_theme_support('html5', array('search-form'));

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(150, 150); // default Post Thumbnail dimensions


        add_image_size('mega-thumb', 2000, 786, true); //content main image
        add_image_size('master-thumb', 556, 183, true); //old ieseg theme legacy
        add_image_size('bloc-thumb', 378, 171, true); //bloc actus
        add_image_size('testimonial-thumb', 420, 385, true); //testimonial


        register_nav_menus(array(
            'header2015' => 'Header Navigation 2015',
            'Primary Menu 2015' => 'Main Navigation 2015',
            'footer2015' => 'Footer Navigation 2015'
        ));

        if (ICL_LANGUAGE_CODE == "fr") {
            setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
        }
    }
endif; // theme_ieseg_setup
add_action('after_setup_theme', 'theme_ieseg_setup');


/**
 * Enqueue scripts and styles for the front end.
 *
 */
function ieseg2_scripts()
{
    // Add all Source Sans Pro.
    wp_enqueue_style( 'ieseg-source-sans', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap', array(), null );

    wp_enqueue_style('slick-css',get_template_directory_uri().'/vendors/node_modules/slick-carousel/slick/slick.css',array(),'1.0');
    wp_enqueue_style('style-ieseg',get_template_directory_uri().'/css/main.css',array(),'1.0');

    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/vendors/node_modules/slick-carousel/slick/slick.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'dps-2020-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0', true );

}

add_action('wp_enqueue_scripts', 'ieseg2_scripts');

/**
 * Register widget areas.
 *
 */
function ieseg_widgets_init()
{

    register_sidebar(array(
        'name' => __('Left Menu', 'ieseg2020'),
        'id' => 'left-menu',
        'description' => __('Left Menu', 'ieseg2020'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Left Menu for Pages Cibles', 'ieseg2020'),
        'id' => 'left-menu-cibles',
        'description' => __('Left Menu for Pages Cibles', 'ieseg2020'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Menu for Programs homepages', 'ieseg2020'),
        'id' => 'program-home-menu',
        'description' => __('Menu for Programs homepages', 'ieseg2020'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Menu for MSc Programs pages', 'ieseg2020'),
        'id' => 'msc-program-menu',
        'description' => __('Menu for default MSc Programs pages (ie. not homepages)', 'ieseg2020'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Menu for IMBA Programs pages', 'ieseg2020'),
        'id' => 'imba-program-menu',
        'description' => __('Menu for default IMBA Programs pages (ie. not homepage)', 'ieseg2020'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

}

add_action('widgets_init', 'ieseg_widgets_init');


function custom_is_child($pid)
{
    // $pid = The ID of the ancestor page
    global $post; // load details about this page
    $anc = get_post_ancestors($post->ID);
    foreach ($anc as $ancestor) {
        if (is_page() && $ancestor == $pid) {
            return true;
        }
    }
    return false; // we're elsewhere
}


//--------------------------------Excerpt----------------------------------

function ieseg_excerpt_debut_contenu($length = 200)
{

    global $post;

    $format = $post->post_format;
    $content_uf = $post->post_content;
    $excerpt_uf = $post->post_excerpt;

    $excerpt_gen = substr(strip_tags($content_uf), 0, $length);

    $summary = (!$excerpt) ? $excerpt_gen : $excerpt_uf;

    echo $summary .= ' ...';

    return $summary;
}

//Longueur de l'excerpt
function custom_excerpt_length($length)
{
    return 30;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);


//Ajout de l'excerpt sur les pages
function my_add_excerpts_to_pages()
{
    add_post_type_support('page', 'excerpt');
}

add_action('init', 'my_add_excerpts_to_pages');

//Fonction a appeller pour une longueur d'excerpt differente
// Parametres : 1 longueur souhaitée, 2. caractères de troncature
function custom_excerpt($new_length = 20, $new_more = '...')
{
    add_filter('excerpt_length', function () use ($new_length) {
        return $new_length;
    }, 999);
    add_filter('excerpt_more', function () use ($new_more) {
        return $new_more;
    });
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

//--------------Droits pour modifier les menus pour les Editeurs------------ 
// get the the role object
$role_object = get_role('editor');
// add $cap capability to this role object
$role_object->add_cap('edit_theme_options');

/*--------------Personnalisation formulaires de recherche----------------*/
//Formulaire du header
function custom_search_form($form)
{
    $form = '<form method="get" id="quick-search" action="' . home_url('/') . '" >';
    $form .= '<input type="text" value="' . get_search_query() . '" name="s" id="s" class="search-field" />';
    $form .= '<input type="submit" value="OK" class="search-submit" />';
    $form .= '</form>';
    return $form;
}

add_filter('get_search_form', 'custom_search_form');

//Formulaire du footer
//L'absence de add_filter pour ce formulaire est normale. Cela sera fait au moment de l'affichage dans le template
function custom_search_footer($form)
{
    $form = '<form role="search" method="get" class="search-form" action="' . home_url('/') . '">';
    $form .= '<label for="s2" class="screen-reader-text">' . __('Search for', 'label') . '</label>';
    $form .= '<input type="search" class="search-field" placeholder="' . esc_attr_x('Search …', 'placeholder') . '" value="' . get_search_query() . '" name="s" id="s2" />';
    $form .= '<input type="submit" value=" " class="search-submit" />';
    $form .= '</form>';
    return $form;
}

//Reprise de la classe CSS de l'element de menu courant dans le body 
//add_filter('body_class', 'menu_class_to_body');
function menu_class_to_body($classes)
{
    $id_menu = 49;
    if (ICL_LANGUAGE_CODE == "fr") {
        $id_menu = 142;
    } elseif (ICL_LANGUAGE_CODE == "en") {
        $id_menu = 144;
    } elseif (ICL_LANGUAGE_CODE == "zh-hans") {
        $id_menu = 69;
    }
    $items = wp_get_nav_menu_items($id_menu); //change to suit your menu id

    foreach ($items as $item):
        $menuClasses = $item->classes;
        $objectId = $item->object_id . ' ';

        //if ( is_page($item->object_id) ):
        if (is_page($item->object_id) || is_archive($item->object_id) || is_category($item->object_id)):
            $current[] = $menuClasses;
        endif;

    endforeach;

    $classes[] = $current[0][0];

    return $classes;
}

//Prochains événements
function upcoming_events($events_number = 4, $cat = null)
{
    $args = array(
        'posts_per_page' => $events_number,
        'post_type' => 'events',
        'meta_key' => 'wpcf-start-date',
        'suppress_filters' => false, //supress_filter false est utile pour WPML (ne retourne les posts que dans la langue en cours)
        'orderby' => 'meta_value_num',
        'order' => 'ASC',

        'meta_query' => array(
            array(
                'key' => 'wpcf-start-date',
                'value' => time() - 86400, //time() = timestamp  ,86400= nombre de secondes dans une journée (utile pour garder les events du jour en cours)
                'compare' => '>='
                //'type' => 'CHAR'
            )
        )
    );
    if ($cat) { //si on a passe une categorie en parametre
        $args['tax_query'] =
            array(
                array(
                    'taxonomy' => 'events-category',
                    'field' => 'term_id',
                    'terms' => apply_filters('wpml_object_id', $cat, 'events-category'),
                ),
            );
    }
    $postslist = get_posts($args);
    //on a les 4 events les plus proches du jour actuel.
    //Maintenant on inverse les resultats pour obtenir l'ordre d'affiche nous convienne (event le plus proche en bas de liste)
    $postslist = array_reverse($postslist);
    return $postslist;
}

// Ninja Forms - Editors 
add_filter('ninja_forms_admin_parent_menu_capabilities', 'nf_subs_capabilities'); // Parent Menu
add_filter('ninja_forms_admin_all_forms_capabilities', 'nf_subs_capabilities'); // Forms Submenu
add_filter('ninja_forms_admin_submissions_capabilities', 'nf_subs_capabilities'); // Submissions Submenu
function nf_subs_capabilities($cap)
{
    return 'edit_posts'; // EDIT: User Capability
}

/**
 * DPS2020 : affichage du code dans le sélecteur de langues
 *
 */
function language_selector_flags() {
    $languages = icl_get_languages('skip_missing=0&orderby=code');
    if (!empty($languages)) {
        foreach ($languages as $l) {
            if (!$l['active'])
                echo '<a href="' . $l['url'] . '">';
            echo '<span>' . $l['language_code'] . '</span>';
            if (!$l['active'])
                echo '</a>';
        }
    }
}
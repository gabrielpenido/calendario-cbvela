<?php
/**
 * CbVela functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage CbVela
 * @since CbVela 1.0
 */

function cbvela_theme_support() {

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

// Custom background color.
add_theme_support(
    'custom-background',
    array(
        'default-color' => 'f5efe0',
    )
);

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support( 'post-thumbnails' );

// Set post thumbnail size.
set_post_thumbnail_size( 1200, 9999 );

// Add custom image size used in Cover Template.
add_image_size( 'cbvela-fullscreen', 1980, 9999 );

add_theme_support(
    'custom-logo',
    array(
        'height'      => $logo_height,
        'width'       => $logo_width,
        'flex-height' => true,
        'flex-width'  => true,
    )
);

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
    'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
        'navigation-widgets',
    )
);

/*
 * Make theme available for translation.
 * Translations can be filed in the /languages/ directory.
 * If you're building a theme based on Twenty Twenty, use a find and replace
 * to change 'cbvela' to the name of your theme in all the template files.
 */
load_theme_textdomain( 'cbvela' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add support for responsive embeds.
add_theme_support( 'responsive-embeds' );



// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

/*
 * Adds `async` and `defer` support for scripts registered or enqueued
 * by the theme.
 */
$loader = new cbvela_Script_Loader();
add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';

    return $path;
}

function cc_mime_types( $mimes ) {
    $mimes['jpg|jpeg|jpe'] = 'image/jpeg';
    $mimes['gif'] = 'image/gif';
    $mimes['png'] = 'image/png';
    $mimes['bmp'] = 'image/bmp';
    $mimes['tiff|tif'] = 'image/tiff';
    $mimes['ico'] = 'image/x-icon';
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'application/x-gzip';
    $mimes['doc']  = 'application/msword';
    $mimes['webp'] = 'image/webp';
    $types['csv'] = 'text/csv';
    $mimes['ttf'] = 'font/ttf';
    $mimes['woff'] = 'font/woff';
    $mimes['woff2'] = 'font/woff2';

    // unset( $mimes['exe'] );

    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');



function admin_reset_stylesheet() {?>
        
        <style type="text/css">
            @media (min-width: 782px) {
                body.wp-admin.is-fullscreen-mode #adminmenumain, 
                body.wp-admin.is-fullscreen-mode #wpadminbar{
                    display: block !important;
                }
                body.wp-admin.is-fullscreen-mode #adminmenu{
                    margin: 44px 0 12px !important;
                }
                body.wp-admin.is-fullscreen-mode div.edit-post-layout{
                    top: 30px !important;
                    left: 160px !important;
                }
                body.wp-admin.is-fullscreen-mode div.edit-post-layout .editor-post-publish-panel{
                    top: 32px !important;
                }
            }
        </style> <?php 
    }
    add_action( 'admin_head', 'admin_reset_stylesheet' );


// Register Custom Post Type
function eventos_cpt() {
    $labels = array(
        'name' => _x( 'Eventos', 'Post Type General Name', 'cbvela' ),
        'singular_name' => _x( 'O evento', 'Post Type Singular Name', 'cbvela' ),
        'menu_name' => __( 'Eventos', 'cbvela' ),
        'name_admin_bar' => __( 'Eventos', 'cbvela' ),
        'archives' => __( 'Arquivos de O evento', 'cbvela' ),
        'attributes' => __( 'Atributos de O evento', 'cbvela' ),
        'parent_item_colon' => __( 'O evento Pai:', 'cbvela' ),
        'all_items' => __( 'Todas as Eventos', 'cbvela' ),
        'add_new_item' => __( 'Adicionar nova O evento', 'cbvela' ),
        'add_new' => __( 'Adicionar nova', 'cbvela' ),
        'new_item' => __( 'Nova O evento', 'cbvela' ),
        'edit_item' => __( 'Editar O evento', 'cbvela' ),
        'update_item' => __( 'Atualizar O evento', 'cbvela' ),
        'view_item' => __( 'Ver O evento', 'cbvela' ),
        'view_items' => __( 'Ver Eventos', 'cbvela' ),
        'search_items' => __( 'Buscar Eventos', 'cbvela' ),
        'not_found' => __( 'O evento não encontrada', 'cbvela' ),
        'not_found_in_trash' => __( 'O evento não encontrada na lixeira', 'cbvela' ),
        'featured_image' => __( 'Imagem em destaque', 'cbvela' ),
        'set_featured_image' => __( 'Setando imagem em destaque', 'cbvela' ),
        'remove_featured_image' => __( 'Remover imagem em destaque', 'cbvela' ),
        'use_featured_image' => __( 'Use como imagem em destaque', 'cbvela' ),
        'insert_into_item' => __( 'Inserir na O evento', 'cbvela' ),
        'uploaded_to_this_item' => __( 'Carregado para esta O evento', 'cbvela' ),
        'items_list' => __( 'Lista de Eventos', 'cbvela' ),
        'items_list_navigation' => __( 'Navegação na lista de Eventos', 'cbvela' ),
        'filter_items_list' => __( 'Filtrar lista de Eventos', 'cbvela' ),
    );
    $args = array(
        'label' => __( 'O evento', 'cbvela' ),
        'description' => __( 'O evento', 'cbvela' ),
        'labels' => $labels,
        'taxonomies' => array(),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 11,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'query_var' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array('slug' => 'noticias','with_front' => true),
        'show_in_rest' => true,

        'supports' => array(
            'title',
            'custom-fields',
        ),
        'menu_icon' => 'dashicons-admin-site-alt3',
    );

    register_post_type( 'eventos', $args );
    
    
    // CATEGORY
    register_taxonomy(
        'eventos_category',
        'eventos',
        array(
            'labels' => array(
                'name' => _x( 'Categorias', 'Taxonomy General Name', 'cbvela' ),
                'singular_name' => _x( 'Categoria', 'Taxonomy Singular Name', 'cbvela' ),
                'menu_name' => __( 'Categorias', 'cbvela' ),
                'all_items' => __( 'Todas as Categorias', 'cbvela' ),
                'parent_item' => __( 'Categoria Pai', 'cbvela' ),
                'parent_item_colon' => __( 'Categoria pai (dois pontos)', 'cbvela' ),
                'new_item_name' => __( 'Nome da nova Categoria', 'cbvela' ),
                'add_new_item' => __( 'Adicionar nova Categoria', 'cbvela' ),
                'edit_item' => __( 'Editar Categoria', 'cbvela' ),
                'update_item' => __( 'Atualizar Categoria', 'cbvela' ),
                'view_item' => __( 'Ver Categoria', 'cbvela' ),
                'separate_items_with_commas' => __( 'Separe Categorias com vírgulas', 'cbvela' ),
                'add_or_remove_items' => __( 'Adicionar ou remover Categoria', 'cbvela' ),
                'choose_from_most_used' => __( 'Escolha entre as Categorias mais usadas', 'cbvela' ),
                'popular_items' => __( 'Categoria popular', 'cbvela' ),
                'search_items' => __( 'Buscar Categoria', 'cbvela' ),
                'not_found' => __( 'Categoria não encontrada', 'cbvela' ),
                'no_terms' => __( 'Sem Categoria', 'cbvela' ),
                'items_list' => __( 'Lista de Categorias', 'cbvela' ),
                'items_list_navigation' => __( 'Navegação na lista de Categorias', 'cbvela' ),
            ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'categoria', 'with_front' => true ),
            'show_in_rest' => true,

            'supports' => array(
                'title',
                'editor',
                'custom-fields',
                'page-attributes',
                'thumbnail',
                'excerpt',
                'post-formats'
            ),
        )
    );
    
    
    // TAG
    register_taxonomy(
        'eventos_tag',
        'eventos',
        array(
            'labels' => array(
                'name' => _x( 'Tags', 'Taxonomy General Name', 'cbvela' ),
                'singular_name' => _x( 'Tag', 'Taxonomy Singular Name', 'cbvela' ),
                'menu_name' => __( 'Tags', 'cbvela' ),
                'all_items' => __( 'Todas as Tags', 'cbvela' ),
                'parent_item' => __( 'Tag Pai', 'cbvela' ),
                'parent_item_colon' => __( 'Tag pai (dois pontos)', 'cbvela' ),
                'new_item_name' => __( 'Nome da nova Tag', 'cbvela' ),
                'add_new_item' => __( 'Adicionar nova Tag', 'cbvela' ),
                'edit_item' => __( 'Editar Tag', 'cbvela' ),
                'update_item' => __( 'Atualizar Tag', 'cbvela' ),
                'view_item' => __( 'Ver Tag', 'cbvela' ),
                'separate_items_with_commas' => __( 'Separe Tags com vírgulas', 'cbvela' ),
                'add_or_remove_items' => __( 'Adicionar ou remover Tag', 'cbvela' ),
                'choose_from_most_used' => __( 'Escolha entre as Tags mais usadas', 'cbvela' ),
                'popular_items' => __( 'Tag popular', 'cbvela' ),
                'search_items' => __( 'Buscar Tag', 'cbvela' ),
                'not_found' => __( 'Tag não encontrada', 'cbvela' ),
                'no_terms' => __( 'Sem Tag', 'cbvela' ),
                'items_list' => __( 'Lista de Tags', 'cbvela' ),
                'items_list_navigation' => __( 'Navegação na lista de Tags', 'cbvela' ),
            ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_nav_menus' => true,
            'show_tagcloud' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'tag', 'with_front' => true ),
            'show_in_rest' => true,

            'supports' => array(
                'title',
                'editor',
                'custom-fields',
                'page-attributes',
                'thumbnail',
                'excerpt',
                'post-formats'
            ),
        )
    );
}  
add_action( 'init', 'eventos_cpt', 0 );
    

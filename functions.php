<?
register_nav_menus( array(
'menu' => 'Menu principal',
'interno' => 'Menu interno',
'productos' => 'Menu productos'
));

/* ************ Imagenes *************** */

add_theme_support( 'post-thumbnails' );
add_image_size( 'columna_destacados', 110, 209, true );
add_image_size( 'imagen-descripcion', 310, 209, true );

/* ************ Sidebar *************** */
register_sidebar(array(
	'name' => 'Sidebar',
	'before_widget' => '<section class="Widget">',
	'after_widget' => '</section>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

/* ************ ver mas *************** */

// Funcion para texto de seguir leyendo
function no_more_jumping($post) {
	return ' <a href="'.get_permalink($post->ID).'" class="read-more">'.'VER MAS / COMPRAR'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');
add_filter('the_content_more_link', 'remove_more_jump_link');


/* ************ excluir categorias **************** */


function new_excerpt_length($length) { 
return 3; 
} 
add_filter('excerpt_length', 'new_excerpt_length');  


/* ************ paginacion **************** */

function paginado() {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
 
    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => true,
        'type' => 'list',
        'next_text' => '&raquo;',
        'prev_text' => '&laquo;'
        );
 
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
 
    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
 
    echo paginate_links( $pagination );
}

// Activacion del sidebar - Columna 1 //
function linkpie1_register_sidebar() {
    register_sidebar(
        array(
            'id' => 'sidebar-footer',
            'name' => 'sidebar del footer',
            'descripcion' => 'sidebar para el pie de links'
            )
        );
}
add_action('widgets_init', 'linkpie1_register_sidebar');


// Activacion del sidebar - Columna 2 //
function linkpie2_register_sidebar() {
    register_sidebar(
        array(
            'id' => 'sidebar-footer-2',
            'name' => 'sidebar del footer 2',
            'descripcion' => 'sidebar para el pie de links 2'
            )
        );
}
add_action('widgets_init', 'linkpie2_register_sidebar');


// Activacion del sidebar - Columna 3 //
function linkpie3_register_sidebar() {
    register_sidebar(
        array(
            'id' => 'sidebar-footer-3',
            'name' => 'sidebar del footer 3',
            'descripcion' => 'sidebar para el pie de links 3'
            )
        );
}
add_action('widgets_init', 'linkpie3_register_sidebar');


// Activacion del sidebar - Banner Header single.php //
function bennersingle_register_sidebar() {
    register_sidebar(
        array(
            'id' => 'sidebar-bannerheader',
            'name' => 'banner de las paginas single',
            'descripcion' => 'este banner se usa solo para las paginas single.php'
            )
        );
}
add_action('widgets_init', 'bennersingle_register_sidebar');


//Paginación de entradas



?>
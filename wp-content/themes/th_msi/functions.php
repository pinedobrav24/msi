
<?php

/*-3--------HABILITANDO OPCIONES-----*/
function msi_setup(){
    //titulos para SEO
    add_theme_support('title-tag');

    //imagen destacada
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','msi_setup');

/*-1--------AGREGANDO MENUS----------*/
function msi_menus(){
    register_nav_menus(array(
        'menu-anuncios'=>__('Top-Menu Anuncios','msi'),
        'menu-principal'=>__('Menu Principal','msi'),
        'redes-sociales'=>__('Redes Sociales','msi'),
        'menu-dseguro'=>__('Menu Dis-Seguro','msi'),
        'menu-locales'=>__('Menu Locales','msi'),
        'menu-servicios'=>__('Menu Servicios','msi')
    ));
}
 
add_action('init','msi_menus');    


/*-2--------AGREGANDO HOJA DE ESTILOS----------*/

function msi_scripts_styles(){
    wp_enqueue_style('normalize', get_stylesheet_uri(), array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0'); //nombre de hoja de estilos, ubicacion, paginas previas, version
}

add_action('wp_enqueue_scripts','msi_scripts_styles');

?>

<?php

/*-1--------AGREGANDO MENUS----------*/
function msi_menus(){
    register_nav_menus(array(
        'menu-anuncios'=>('Top-Menu Anuncios', 'msi'),
        'menu-principal'=>('Menu Principal', 'msi'),
        'redes-sociales'=>('Redes Sociales', 'msi'),
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
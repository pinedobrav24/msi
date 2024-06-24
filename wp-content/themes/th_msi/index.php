<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="barra-top">
                <div class="bienvenido">

                </div>
                <?php
                    $args=array(
                        'theme_location'=>'Top-Menu Anuncios',
                        'container'=>'nav',
                        'container_class'=>'menu_top' 
                    );

                    wp_nav_menu($args);
                ?>
            </div>
            <div class="barra-menu">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/LogoMSI2024.jpg" alt="logo-msi">
                </div>
                <?php
                    $args=array(
                        'theme_location'=>'Menu Principal',
                        'container'=>'nav',
                        'container_class'=>'menu-principal' 
                    );

                    wp_nav_menu($args);
                ?>
            </div>

        </div>

    </header>
</body>
</html>
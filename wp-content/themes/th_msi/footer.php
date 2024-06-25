<footer class="footer">
<div class="contenido-footer">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/LogoMSI2024.jpg" alt="logo-msi">
        </div>
        <div class="locales-footer">
            <p>Centros de Atención</p>
            <?php
            $args=array(
                'theme_location'=>'menu-locales',
                'container'=>'nav',
                'container_class'=>'menu-locales' 
            );

            wp_nav_menu($args);
            ?>
        </div>
        <div class="servicios-footer">
            <p>Servicios</p>
            <?php
            $args=array(
                'theme_location'=>'menu-servicios',
                'container'=>'nav',
                'container_class'=>'menu-servicios' 
            );

            wp_nav_menu($args);
            ?>
        </div>
        <div class="seguro-footer">
            <p>Seguridad</p>
            <?php
            $args=array(
                'theme_location'=>'menu-dseguro',
                'container'=>'nav',
                'container_class'=>'menu-dseguro' 
            );

            wp_nav_menu($args);
            ?>
        </div>
</div>
<div class="copyright">
    <hr> 
    <div class="contenido-copyright contenedor">
           
        <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y') ?></p>
        <?php
            $args=array(
                'theme_location'=>'redes-sociales',
                'container'=>'nav',
                'container_class'=>'redes-sociales' 
            );
            wp_nav_menu($args);
        ?>
    </div>
</div>
</footer>
<?php wp_footer();?>
</body>
</html>
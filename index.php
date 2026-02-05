<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?> >
    <!-- Header menu section start -->
    <h3>header Menu</h3>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'header menu',
                'fallback_cb' => false
            ));
        ?>
    <!-- Header menu section ended -->

    <!-- Sidebar menu section start -->
     <h3>sidebar Menu</h3>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'sidebar menu',
                    'fallback_cb' => false
                )
            );
        ?>
    <!-- Sidebar menu section ended -->

    <!-- Footer menu section start -->
     <h3>footer Menu</h3>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'footer menu',
                'fallback_cb' => false
            ));
        ?>
    <!-- Footer menu section ended -->
    <?php wp_footer(); ?>
</body>
</html>
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

    <!-- Main Body section start -->
    <div class='post'>
        <?php while(have_posts()) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        <?php endwhile;?>
    </div>
    <!-- Main Body section ended -->

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
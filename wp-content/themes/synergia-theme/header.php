<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="container top-bar">
        <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <span>Synergia</span>
        </a>
        <button class="nav-toggle" aria-label="<?php esc_attr_e( 'Menu', 'synergia' ); ?>" aria-controls="primary-navigation" aria-expanded="false">☰</button>
        <div class="language-switcher header-language" aria-label="Choisir la langue / Choose language">
            <button type="button" data-lang="fr" class="active" aria-pressed="true">FR</button>
            <button type="button" data-lang="en" aria-pressed="false">EN</button>
        </div>
        <?php
        wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'primary-navigation',
            'container_id'   => 'primary-navigation',
            'container_aria_label' => __( 'Menu principal', 'synergia' ),
            'menu_class'     => 'menu',
            'fallback_cb'    => 'synergia_primary_menu_fallback',
        ] );
        ?>
    </div>
</header>
<main class="site-main">

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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/synergia-logo.svg' ); ?>" alt="Synergia" width="120" height="32">
            <span>Synergia</span>
        </a>
        <button class="nav-toggle" aria-label="<?php esc_attr_e( 'Menu', 'synergia' ); ?>">☰</button>
        <div class="language-switcher header-language" aria-label="Choisir la langue / Choose language">
            <button type="button" data-lang="fr" class="active">FR</button>
            <button type="button" data-lang="en">EN</button>
        </div>
        <?php
        wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'primary-navigation',
            'menu_class'     => 'menu',
            'fallback_cb'    => 'wp_page_menu',
        ] );
        ?>
    </div>
</header>
<main class="site-main">

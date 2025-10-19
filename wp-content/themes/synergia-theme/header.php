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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo1.png' ); ?>" alt="Synergia" width="140" height="40">
            <span>Synergia</span>
        </a>
        <button class="nav-toggle" aria-expanded="false" aria-controls="primary-navigation" data-open-label="<?php esc_attr_e( 'Menu', 'synergia' ); ?>" data-close-label="<?php echo esc_attr__( 'Fermer / Close', 'synergia' ); ?>">
            <span class="nav-toggle-icon" aria-hidden="true">☰</span>
            <span class="nav-toggle-label"><?php esc_html_e( 'Menu', 'synergia' ); ?></span>
        </button>
        <div class="language-switcher header-language" aria-label="Choisir la langue / Choose language">
            <button type="button" data-lang="fr" class="active">FR</button>
            <button type="button" data-lang="en">EN</button>
        </div>
        <?php
        wp_nav_menu( [
            'theme_location' => 'primary',
            'container'      => 'nav',
            'container_class'=> 'primary-navigation',
            'container_id'   => 'primary-navigation',
            'menu_class'     => 'menu',
            'fallback_cb'    => 'wp_page_menu',
        ] );
        ?>
    </div>
    <div class="menu-overlay" aria-hidden="true" hidden></div>
</header>
<main class="site-main">

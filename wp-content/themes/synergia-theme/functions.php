<?php
/**
 * Fonctions principales du thème Synergia.
 */

define( 'SYNERGIA_THEME_VERSION', '1.0.0' );

define( 'SYNERGIA_THEME_DIR', get_template_directory() );

define( 'SYNERGIA_THEME_URI', get_template_directory_uri() );

/**
 * Generate URLs that explicitly include index.php for environments without pretty permalinks.
 *
 * @param string $path Optional relative path.
 *
 * @return string
 */
function synergia_indexed_url( $path = '' ) {
    $path = trim( $path );

    if ( '' === $path ) {
        return home_url( '/' );
    }

    $path = trim( $path, '/' );

    return trailingslashit( home_url( 'index.php/' . $path ) );
}

add_action( 'after_setup_theme', function () {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'wp-block-styles' );

    register_nav_menus( [
        'primary' => __( 'Menu principal', 'synergia' ),
        'footer'  => __( 'Menu pied de page', 'synergia' ),
    ] );
} );

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'synergia-theme-style', get_stylesheet_uri(), [], SYNERGIA_THEME_VERSION );
    wp_enqueue_script( 'synergia-theme-script', SYNERGIA_THEME_URI . '/assets/js/theme.js', [], SYNERGIA_THEME_VERSION, true );
} );

add_filter( 'body_class', function ( array $classes ) {
    $classes[] = 'lang-fr-active';

    return array_unique( $classes );
} );

/**
 * Affiche un bloc bilingue avec un titre et une description.
 *
 * @param string $title_fr
 * @param string $title_en
 * @param string $content_fr
 * @param string $content_en
 */
function synergia_bilingual_block( $title_fr, $title_en, $content_fr, $content_en ) {
    ?>
    <div class="bilingual-block">
        <div class="lang-fr">
            <h2><?php echo esc_html( $title_fr ); ?></h2>
            <?php echo wp_kses_post( wpautop( $content_fr ) ); ?>
        </div>
        <div class="lang-en">
            <h2><?php echo esc_html( $title_en ); ?></h2>
            <?php echo wp_kses_post( wpautop( $content_en ) ); ?>
        </div>
    </div>
    <?php
}

/**
 * Affiche un bouton CTA avec le style du thème.
 *
 * @param string $label_fr
 * @param string $label_en
 * @param string $url
 * @param string $class
 */
function synergia_cta_button( $label_fr, $label_en, $url = '#', $class = '' ) {
    ?>
    <a class="btn <?php echo esc_attr( $class ); ?> lang-fr" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label_fr ); ?></a>
    <a class="btn <?php echo esc_attr( $class ); ?> lang-en" href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label_en ); ?></a>
    <?php
}

<?php
/**
 * Fonctions principales du thème Synergia.
 */

define( 'SYNERGIA_THEME_VERSION', '1.0.0' );

define( 'SYNERGIA_THEME_DIR', get_template_directory() );

define( 'SYNERGIA_THEME_URI', get_template_directory_uri() );

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

/**
 * Crée les pages essentielles du site si elles n'existent pas encore.
 */
add_action( 'after_setup_theme', function () {
    if ( get_option( 'synergia_pages_created' ) ) {
        return;
    }

    $pages = [
        [
            'title'    => 'Accueil',
            'slug'     => 'accueil',
            'template' => 'front-page.php',
            'content'  => '',
        ],
        [
            'title'    => 'Services',
            'slug'     => 'services',
            'template' => 'page-services.php',
        ],
        [
            'title'    => 'À propos',
            'slug'     => 'a-propos',
            'template' => 'page-a-propos.php',
        ],
        [
            'title'    => 'Contact',
            'slug'     => 'contact',
            'template' => 'page-contact.php',
        ],
        [
            'title'    => 'Stratégie & Excellence Opérationnelle',
            'slug'     => 'strategie-excellence-operationnelle',
            'template' => 'templates/service-strategie.php',
        ],
        [
            'title'    => 'Transactions & Due Diligence',
            'slug'     => 'transactions-due-diligence',
            'template' => 'templates/service-transactions.php',
        ],
        [
            'title'    => 'Corporate Finance & Modélisation',
            'slug'     => 'corporate-finance-modelisation',
            'template' => 'templates/service-corporate-finance.php',
        ],
        [
            'title'    => 'CFO Advisory & Transformation Finance',
            'slug'     => 'cfo-advisory-transformation',
            'template' => 'templates/service-cfo.php',
        ],
        [
            'title'    => 'Financement & Levée de Fonds',
            'slug'     => 'financement-levee-fonds',
            'template' => 'templates/service-financement.php',
        ],
        [
            'title'    => 'Subventions & Financements publics',
            'slug'     => 'subventions-financements-publics',
            'template' => 'templates/service-subventions.php',
        ],
        [
            'title'    => 'Académie & Formation',
            'slug'     => 'academie-formation',
            'template' => 'templates/service-academie.php',
        ],
    ];

    $created_pages = [];

    foreach ( $pages as $page ) {
        $existing_page = get_page_by_path( $page['slug'] );

        if ( $existing_page ) {
            $created_pages[ $page['slug'] ] = (int) $existing_page->ID;
            continue;
        }

        $page_id = wp_insert_post( [
            'post_title'   => $page['title'],
            'post_name'    => $page['slug'],
            'post_content' => isset( $page['content'] ) ? $page['content'] : '',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ] );

        if ( $page_id && ! is_wp_error( $page_id ) ) {
            if ( ! empty( $page['template'] ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page['template'] );
            }

            $created_pages[ $page['slug'] ] = (int) $page_id;
        }
    }

    if ( isset( $created_pages['accueil'] ) ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $created_pages['accueil'] );
    }

    if ( isset( $created_pages['services'] ) ) {
        update_option( 'page_for_posts', 0 );
    }

    update_option( 'synergia_pages_created', time() );
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

/**
 * Fallback du menu principal avec navigation bilingue et sous-menus.
 */
function synergia_primary_menu_fallback() {
    $items = [
        [
            'url'      => home_url( '/' ),
            'label_fr' => 'Accueil',
            'label_en' => 'Home',
        ],
        [
            'url'      => home_url( '/services' ),
            'label_fr' => 'Services',
            'label_en' => 'Services',
            'children' => [
                [ home_url( '/strategie-excellence-operationnelle' ), 'Stratégie & Excellence Opérationnelle', 'Strategy & Operational Excellence' ],
                [ home_url( '/transactions-due-diligence' ), 'Transactions & Due Diligence', 'Transactions & Due Diligence' ],
                [ home_url( '/corporate-finance-modelisation' ), 'Corporate Finance & Modélisation', 'Corporate Finance & Modeling' ],
                [ home_url( '/cfo-advisory-transformation' ), 'CFO Advisory & Transformation Finance', 'CFO Advisory & Finance Transformation' ],
                [ home_url( '/financement-levee-fonds' ), 'Financement & Levée de Fonds', 'Fundraising & Financing' ],
                [ home_url( '/subventions-financements-publics' ), 'Subventions & Financements publics', 'Grants & Incentives' ],
                [ home_url( '/academie-formation' ), 'Académie & Formation', 'Academy & Training' ],
            ],
        ],
        [
            'url'      => home_url( '/a-propos' ),
            'label_fr' => 'À propos',
            'label_en' => 'About',
        ],
        [
            'url'      => home_url( '/contact' ),
            'label_fr' => 'Contact',
            'label_en' => 'Contact',
        ],
    ];

    echo '<nav id="primary-navigation" class="primary-navigation" aria-label="' . esc_attr__( 'Menu principal', 'synergia' ) . '">';
    echo '<ul class="menu">';

    foreach ( $items as $item ) {
        $has_children = ! empty( $item['children'] );
        $classes      = $has_children ? 'menu-item menu-item-has-children' : 'menu-item';

        echo '<li class="' . esc_attr( $classes ) . '">';
        echo '<a href="' . esc_url( $item['url'] ) . '">';
        echo '<span class="lang-fr">' . esc_html( $item['label_fr'] ) . '</span>';
        echo '<span class="lang-en">' . esc_html( $item['label_en'] ) . '</span>';
        echo '</a>';

        if ( $has_children ) {
            echo '<ul class="sub-menu">';
            foreach ( $item['children'] as $child ) {
                echo '<li class="menu-item"><a href="' . esc_url( $child[0] ) . '"><span class="lang-fr">' . esc_html( $child[1] ) . '</span><span class="lang-en">' . esc_html( $child[2] ) . '</span></a></li>';
            }
            echo '</ul>';
        }

        echo '</li>';
    }

    echo '</ul>';
    echo '</nav>';
}

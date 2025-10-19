<?php
/*
Template Name: Services Overview
*/

get_header();
?>
<section class="page-header">
    <div class="container">
        <h1 class="lang-fr">Services</h1>
        <h1 class="lang-en">Services</h1>
        <p class="lang-fr">Synergia offre une palette intégrée de services pour piloter votre stratégie, vos opérations, vos transactions et la montée en compétences de vos équipes.</p>
        <p class="lang-en">Synergia provides an integrated set of services to steer your strategy, operations, transactions, and capability building.</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="flex-grid">
            <?php
            $services = [
                [
                    'title_fr' => 'Stratégie & Excellence Opérationnelle',
                    'title_en' => 'Strategy & Operational Excellence',
                    'desc_fr'  => 'Définition de la stratégie, plans de création de valeur et optimisation continue des processus clés.',
                    'desc_en'  => 'Strategy definition, value creation roadmaps, and continuous improvement of core processes.',
                    'url'      => home_url( '/strategie-excellence-operationnelle' ),
                ],
                [
                    'title_fr' => 'Transactions & Due Diligence',
                    'title_en' => 'Transactions & Due Diligence',
                    'desc_fr'  => 'Due diligences, préparation des transactions et sécurisation de la phase post-deal.',
                    'desc_en'  => 'Due diligence, transaction readiness, and secure post-deal execution.',
                    'url'      => home_url( '/transactions-due-diligence' ),
                ],
                [
                    'title_fr' => 'Corporate Finance & Modélisation',
                    'title_en' => 'Corporate Finance & Modeling',
                    'desc_fr'  => 'Modélisation financière 3 états, conseil en structure de capital et valorisation.',
                    'desc_en'  => 'Three-statement financial modeling, capital structure advisory, and valuation.',
                    'url'      => home_url( '/corporate-finance-modelisation' ),
                ],
                [
                    'title_fr' => 'CFO Advisory & Transformation Finance',
                    'title_en' => 'CFO Advisory & Finance Transformation',
                    'desc_fr'  => 'Transformation de la fonction finance, pilotage de la performance et fiabilisation des clôtures.',
                    'desc_en'  => 'Finance function transformation, performance management, and closing excellence.',
                    'url'      => home_url( '/cfo-advisory-transformation' ),
                ],
                [
                    'title_fr' => 'Financement & Levée de Fonds',
                    'title_en' => 'Fundraising & Financing',
                    'desc_fr'  => 'Levées de fonds equity et dette, structuration de dossiers investisseurs et négociation.',
                    'desc_en'  => 'Equity and debt fundraising, investor documentation, and negotiation support.',
                    'url'      => home_url( '/financement-levee-fonds' ),
                ],
                [
                    'title_fr' => 'Subventions & Financements publics',
                    'title_en' => 'Grants & Incentives',
                    'desc_fr'  => 'Cartographie des aides publiques, montage des dossiers et conformité post-octroi.',
                    'desc_en'  => 'Public funding mapping, application structuring, and post-award compliance.',
                    'url'      => home_url( '/subventions-financements-publics' ),
                ],
                [
                    'title_fr' => 'Académie & Formation',
                    'title_en' => 'Academy & Training',
                    'desc_fr'  => 'Programmes dirigeants, tracks spécialisés finance et dispositifs pédagogiques modulaires.',
                    'desc_en'  => 'Executive programs, specialized finance tracks, and modular learning experiences.',
                    'url'      => home_url( '/academie-formation' ),
                ],
            ];

            foreach ( $services as $service ) : ?>
                <article class="card">
                    <h3 class="lang-fr"><?php echo esc_html( $service['title_fr'] ); ?></h3>
                    <h3 class="lang-en"><?php echo esc_html( $service['title_en'] ); ?></h3>
                    <p class="lang-fr"><?php echo esc_html( $service['desc_fr'] ); ?></p>
                    <p class="lang-en"><?php echo esc_html( $service['desc_en'] ); ?></p>
                    <a class="lang-fr" href="<?php echo esc_url( $service['url'] ); ?>"><?php esc_html_e( 'Découvrir la ligne', 'synergia' ); ?></a>
                    <a class="lang-en" href="<?php echo esc_url( $service['url'] ); ?>"><?php esc_html_e( 'Explore the line', 'synergia' ); ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

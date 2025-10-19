<?php
/*
Template Name: Services Overview
*/

get_header();
?>
<section class="page-header">
    <div class="container">
        <h1 class="lang-fr">Nos Services – Votre Partenaire Stratégique</h1>
        <h1 class="lang-en">Our Services – Your Strategic Partner</h1>
        <p class="lang-fr">Synergia offre une gamme complète de services de conseil, conçue pour répondre aux défis les plus complexes des entreprises. De la définition de votre stratégie à l’optimisation de vos opérations, en passant par le financement de votre croissance et le renforcement des compétences de vos équipes, nous sommes à vos côtés à chaque étape de votre développement. Notre approche intégrée garantit des solutions cohérentes et des résultats mesurables.</p>
        <p class="lang-en">Synergia offers a comprehensive range of consulting services, designed to address the most complex business challenges. From defining your strategy to optimizing your operations, financing your growth, and strengthening your teams’ skills, we are by your side at every stage of your development. Our integrated approach ensures consistent solutions and measurable results.</p>
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
                    'desc_fr'  => 'Définition de la stratégie d’entreprise et amélioration continue des processus pour optimiser la performance globale.',
                    'desc_en'  => 'Defining corporate strategy and continuously improving processes to optimize overall performance.',
                    'url'      => home_url( '/strategie-excellence-operationnelle' ),
                ],
                [
                    'title_fr' => 'Transactions & Due Diligence',
                    'title_en' => 'Transactions & Due Diligence',
                    'desc_fr'  => 'Assistance lors d’opérations de M&A et de levées de fonds, incluant due diligence et conseils en négociation.',
                    'desc_en'  => 'Assistance in M&A deals and fundraising, including due diligence and negotiation support.',
                    'url'      => home_url( '/transactions-due-diligence' ),
                ],
                [
                    'title_fr' => 'Corporate Finance & Modélisation',
                    'title_en' => 'Corporate Finance & Modeling',
                    'desc_fr'  => 'Élaboration de modèles financiers et recommandations sur la structure financière et la valorisation.',
                    'desc_en'  => 'Building financial models and providing recommendations on financial structure and valuation.',
                    'url'      => home_url( '/corporate-finance-modelisation' ),
                ],
                [
                    'title_fr' => 'CFO Advisory & Transformation Finance',
                    'title_en' => 'CFO Advisory & Finance Transformation',
                    'desc_fr'  => 'Accompagnement à la transformation de la fonction finance et mise en place de pratiques de pilotage performantes.',
                    'desc_en'  => 'Guidance in transforming the finance function and implementing effective performance management practices.',
                    'url'      => home_url( '/cfo-advisory-transformation' ),
                ],
                [
                    'title_fr' => 'Financement & Levée de Fonds',
                    'title_en' => 'Fundraising & Financing',
                    'desc_fr'  => 'Conseil en levée de fonds en equity et dette, préparation des dossiers investisseurs et négociation des conditions.',
                    'desc_en'  => 'Advice on equity and debt fundraising, preparing investor documents and negotiating terms.',
                    'url'      => home_url( '/financement-levee-fonds' ),
                ],
                [
                    'title_fr' => 'Subventions & Financements publics',
                    'title_en' => 'Grants & Incentives',
                    'desc_fr'  => 'Identification des opportunités de subventions, montage des dossiers et gestion des financements publics.',
                    'desc_en'  => 'Identifying grant opportunities, preparing applications and managing public funding.',
                    'url'      => home_url( '/subventions-financements-publics' ),
                ],
                [
                    'title_fr' => 'Académie & Formation',
                    'title_en' => 'Academy & Training',
                    'desc_fr'  => 'Programmes de formation pour dirigeants et managers, sessions spécialisées en finance et stratégie.',
                    'desc_en'  => 'Training programs for executives and managers, specialized sessions in finance and strategy.',
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

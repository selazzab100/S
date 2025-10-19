<?php get_header(); ?>
<section class="hero" role="banner">
    <div class="container hero-inner">
        <div class="hero-copy">
            <h1 class="lang-fr">Accélérez votre performance</h1>
            <h1 class="lang-en">Accelerate Your Performance</h1>
            <p class="lang-fr">Synergia est un cabinet de conseil en stratégie et finance d’entreprise, votre partenaire de confiance pour naviguer dans un monde en constante évolution.</p>
            <p class="lang-en">Synergia is a strategic and financial consulting firm, your trusted partner for navigating a constantly evolving world.</p>
            <p class="lang-fr">Nous accompagnons les entreprises dans l’optimisation de leur performance, la concrétisation de leurs projets de croissance et la création de valeur durable. Notre approche sur mesure, notre expertise sectorielle pointue et notre engagement envers des résultats tangibles sont les piliers de notre succès, et du vôtre.</p>
            <p class="lang-en">We assist businesses in optimizing their performance, achieving their growth projects, and creating sustainable value. Our tailored approach, cutting-edge industry expertise, and commitment to tangible results are the cornerstones of our success, and yours.</p>
            <?php synergia_cta_button( __( 'Contactez-nous', 'synergia' ), __( 'Contact us', 'synergia' ), home_url( '/contact' ) ); ?>
        </div>
        <figure class="hero-visual">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/hero-collaboration.svg' ); ?>" alt="Consultation d'équipe Synergia">
        </figure>
    </div>
</section>

<section class="section">
    <div class="container split-layout">
        <div>
            <h2 class="lang-fr">Une vision orientée résultats</h2>
            <h2 class="lang-en">A results-driven vision</h2>
            <p class="lang-fr">Synergia est un cabinet de conseil en stratégie et finance d’entreprise qui accompagne les entreprises dans l’optimisation de leur performance et la réalisation de leurs projets de croissance.</p>
            <p class="lang-en">Synergia is a strategic and financial consulting firm dedicated to helping businesses enhance their performance and achieve their growth objectives.</p>
            <p class="lang-fr">La page d’accueil s’ouvre sur un slogan accrocheur en surimpression sur un visuel inspirant illustrant des professionnels concentrés, symbolisant l’expertise et le professionnalisme de Synergia.</p>
            <p class="lang-en">The homepage opens with a catchy slogan over an inspiring visual depicting focused professionals, symbolizing Synergia’s expertise in action.</p>
        </div>
        <div>
            <p class="lang-fr">Une section introductive met en avant notre positionnement global, notre expertise sectorielle et notre vision orientée résultats, avec un paragraphe soulignant notre approche sur mesure centrée sur la qualité du service, l’accompagnement personnalisé et l’impact concret pour nos clients.</p>
            <p class="lang-en">An introductory section highlights our comprehensive advisory positioning, industry expertise, and results-driven vision, with a paragraph emphasizing our tailor-made approach focused on service quality, personalized support, and tangible impact for our clients.</p>
            <?php synergia_cta_button( __( 'Demandez une brochure', 'synergia' ), __( 'Request a brochure', 'synergia' ), home_url( '/contact' ), 'outline' ); ?>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="clients">
    <div class="container">
        <h2 id="clients" class="lang-fr">Ils nous font confiance</h2>
        <h2 id="clients-en" class="lang-en">Trusted by leading organizations</h2>
        <div class="client-carousel" role="list" aria-label="Clients Synergia">
            <div class="client-track">
                <?php for ( $loop = 0; $loop < 2; $loop ++ ) : ?>
                    <?php for ( $i = 1; $i <= 8; $i ++ ) : ?>
                        <div class="client-logo" role="listitem">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/client-' . $i . '.svg' ); ?>" alt="Client logo <?php echo esc_attr( $i ); ?>" width="120" height="40">
                        </div>
                    <?php endfor; ?>
                <?php endfor; ?>
            </div>
        </div>
        <div class="counters" aria-live="polite">
            <div class="counter">
                <div class="counter-value" data-target="150">0</div>
                <div class="counter-label lang-fr">Clients accompagnés</div>
                <div class="counter-label lang-en">Clients served</div>
            </div>
            <div class="counter">
                <div class="counter-value" data-target="40">0</div>
                <div class="counter-label lang-fr">Experts</div>
                <div class="counter-label lang-en">Experts</div>
            </div>
            <div class="counter">
                <div class="counter-value" data-target="20" data-prefix="" data-suffix-fr=" millions de MAD" data-suffix-en=" million MAD">0</div>
                <div class="counter-label lang-fr">Montant levé</div>
                <div class="counter-label lang-en">Funds raised</div>
            </div>
        </div>
    </div>
</section>

<section class="section" aria-labelledby="services">
    <div class="container">
        <h2 id="services" class="lang-fr">Nos lignes de services</h2>
        <h2 id="services-en" class="lang-en">Our service lines</h2>
        <div class="flex-grid">
            <?php
            $services = [
                [
                    'icon' => '📈',
                    'title_fr' => 'Stratégie & Excellence Opérationnelle',
                    'title_en' => 'Strategy & Operational Excellence',
                    'desc_fr'  => 'Accompagnement dans la définition de la stratégie d’entreprise et l’optimisation des opérations pour générer une croissance durable.',
                    'desc_en'  => 'Support in defining corporate strategy and optimizing operations to drive sustainable growth.',
                    'link'     => home_url( '/strategie-excellence-operationnelle' ),
                ],
                [
                    'icon' => '🤝',
                    'title_fr' => 'Transactions & Due Diligence',
                    'title_en' => 'Transactions & Due Diligence',
                    'desc_fr'  => 'Conseil lors de vos opérations de fusion-acquisition ou de levée de fonds, avec due diligence rigoureuse et structuration de transaction.',
                    'desc_en'  => 'Advice on your M&A deals or fundraising, with rigorous due diligence and transaction structuring.',
                    'link'     => home_url( '/transactions-due-diligence' ),
                ],
                [
                    'icon' => '💹',
                    'title_fr' => 'Corporate Finance & Modélisation',
                    'title_en' => 'Corporate Finance & Modeling',
                    'desc_fr'  => 'Modélisation financière et conseils en structure de capital pour maximiser la valeur de votre entreprise.',
                    'desc_en'  => 'Financial modeling and guidance on capital structure to maximize your company’s value.',
                    'link'     => home_url( '/corporate-finance-modelisation' ),
                ],
                [
                    'icon' => '🧭',
                    'title_fr' => 'CFO Advisory & Transformation Finance',
                    'title_en' => 'CFO Advisory & Finance Transformation',
                    'desc_fr'  => 'Transformation de la fonction finance et pilotage financier pour améliorer la gouvernance et la performance.',
                    'desc_en'  => 'Transforming the finance function and financial management to improve governance and performance.',
                    'link'     => home_url( '/cfo-advisory-transformation' ),
                ],
                [
                    'icon' => '🚀',
                    'title_fr' => 'Financement & Levée de Fonds',
                    'title_en' => 'Fundraising & Financing',
                    'desc_fr'  => 'Stratégies de financement (equity et dette) pour soutenir le développement de votre activité.',
                    'desc_en'  => 'Funding strategies (equity and debt) to support your business development.',
                    'link'     => home_url( '/financement-levee-fonds' ),
                ],
                [
                    'icon' => '🎯',
                    'title_fr' => 'Subventions & Financements publics',
                    'title_en' => 'Grants & Incentives',
                    'desc_fr'  => 'Recherche de subventions et accompagnement dans l’obtention d’aides publiques pour vos projets.',
                    'desc_en'  => 'Identifying grants and assisting in obtaining public funding for your projects.',
                    'link'     => home_url( '/subventions-financements-publics' ),
                ],
                [
                    'icon' => '🎓',
                    'title_fr' => 'Académie & Formation',
                    'title_en' => 'Academy & Training',
                    'desc_fr'  => 'Formations et ateliers sur mesure pour renforcer les compétences stratégiques et financières de vos équipes.',
                    'desc_en'  => 'Tailored training programs to strengthen the strategic and financial skills of your teams.',
                    'link'     => home_url( '/academie-formation' ),
                ],
            ];

            foreach ( $services as $service ) : ?>
                <article class="card">
                    <div class="service-icon" aria-hidden="true"><?php echo esc_html( $service['icon'] ); ?></div>
                    <h3 class="lang-fr"><?php echo esc_html( $service['title_fr'] ); ?></h3>
                    <h3 class="lang-en"><?php echo esc_html( $service['title_en'] ); ?></h3>
                    <p class="lang-fr"><?php echo esc_html( $service['desc_fr'] ); ?></p>
                    <p class="lang-en"><?php echo esc_html( $service['desc_en'] ); ?></p>
                    <a class="lang-fr" href="<?php echo esc_url( $service['link'] ); ?>"><?php esc_html_e( 'En savoir plus', 'synergia' ); ?></a>
                    <a class="lang-en" href="<?php echo esc_url( $service['link'] ); ?>"><?php esc_html_e( 'Learn more', 'synergia' ); ?></a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

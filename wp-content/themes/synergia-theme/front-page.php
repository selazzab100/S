<?php get_header(); ?>
<section class="hero" role="banner">
    <div class="container hero-content">
        <h1 class="lang-fr">Accélérez votre performance</h1>
        <h1 class="lang-en">Accelerate Your Performance</h1>
        <p class="lang-fr">Synergia est un cabinet de conseil en stratégie et finance d’entreprise qui propulse la croissance des organisations grâce à un accompagnement sur mesure et orienté résultats.</p>
        <p class="lang-en">Synergia is a strategy and corporate finance consulting firm that accelerates business growth through tailored, results-driven advisory.</p>
        <?php synergia_cta_button( __( 'Contactez-nous', 'synergia' ), __( 'Contact us', 'synergia' ), synergia_indexed_url( 'contact' ) ); ?>
    </div>
</section>

<section class="section">
    <div class="container split-layout">
        <div>
            <h2 class="lang-fr">Un partenaire engagé pour des résultats tangibles</h2>
            <h2 class="lang-en">A committed partner delivering tangible results</h2>
            <p class="lang-fr">Notre équipe multidisciplinaire allie expertise sectorielle et excellence financière pour concevoir des solutions pragmatiques. Nous co-construisons chaque mission avec nos clients et mobilisons les bonnes pratiques des grands cabinets internationaux.</p>
            <p class="lang-en">Our multidisciplinary team combines industry know-how and financial excellence to craft pragmatic solutions. We co-create every engagement with our clients and leverage best practices from leading international firms.</p>
        </div>
        <div>
            <p class="lang-fr">Nous intervenons sur l’ensemble du cycle de valeur : réflexion stratégique, exécution opérationnelle, structuration financière et développement des compétences. L’objectif : accélérer durablement votre performance.</p>
            <p class="lang-en">We operate across the entire value chain: strategic planning, operational execution, financial structuring, and capability building. The goal: sustainably accelerate your performance.</p>
            <?php synergia_cta_button( __( 'Demandez une brochure', 'synergia' ), __( 'Request a brochure', 'synergia' ), synergia_indexed_url( 'contact' ), 'outline' ); ?>
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
                <div class="counter-value" data-target="20" data-prefix="" data-suffix=" MMAD">0</div>
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
                    'desc_fr'  => 'Définition stratégique et optimisation des opérations pour générer une croissance durable.',
                    'desc_en'  => 'Corporate strategy definition and operations optimization to drive sustainable growth.',
                    'link'     => synergia_indexed_url( 'strategie-excellence-operationnelle' ),
                ],
                [
                    'icon' => '🤝',
                    'title_fr' => 'Transactions & Due Diligence',
                    'title_en' => 'Transactions & Due Diligence',
                    'desc_fr'  => 'Accompagnement complet de vos opérations de M&A et levées de fonds.',
                    'desc_en'  => 'End-to-end support for your M&A deals and fundraising processes.',
                    'link'     => synergia_indexed_url( 'transactions-due-diligence' ),
                ],
                [
                    'icon' => '💹',
                    'title_fr' => 'Corporate Finance & Modélisation',
                    'title_en' => 'Corporate Finance & Modeling',
                    'desc_fr'  => 'Modèles financiers avancés et structuration de capital pour maximiser la valeur.',
                    'desc_en'  => 'Advanced financial modeling and capital structuring to maximize value.',
                    'link'     => synergia_indexed_url( 'corporate-finance-modelisation' ),
                ],
                [
                    'icon' => '🧭',
                    'title_fr' => 'CFO Advisory & Transformation Finance',
                    'title_en' => 'CFO Advisory & Finance Transformation',
                    'desc_fr'  => 'Transformation de la fonction finance et pilotage de la performance.',
                    'desc_en'  => 'Transforming the finance function and steering performance.',
                    'link'     => synergia_indexed_url( 'cfo-advisory-transformation' ),
                ],
                [
                    'icon' => '🚀',
                    'title_fr' => 'Financement & Levée de Fonds',
                    'title_en' => 'Fundraising & Financing',
                    'desc_fr'  => 'Stratégies de financement en equity et dette pour soutenir votre croissance.',
                    'desc_en'  => 'Equity and debt financing strategies to support your growth.',
                    'link'     => synergia_indexed_url( 'financement-levee-fonds' ),
                ],
                [
                    'icon' => '🎯',
                    'title_fr' => 'Subventions & Financements publics',
                    'title_en' => 'Grants & Incentives',
                    'desc_fr'  => 'Identification et obtention d’aides publiques adaptées à vos projets.',
                    'desc_en'  => 'Identifying and securing public funding tailored to your projects.',
                    'link'     => synergia_indexed_url( 'subventions-financements-publics' ),
                ],
                [
                    'icon' => '🎓',
                    'title_fr' => 'Académie & Formation',
                    'title_en' => 'Academy & Training',
                    'desc_fr'  => 'Formations sur mesure pour renforcer les compétences stratégiques et financières.',
                    'desc_en'  => 'Tailored training to strengthen strategic and financial capabilities.',
                    'link'     => synergia_indexed_url( 'academie-formation' ),
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

<?php
/*
Template Name: Service – Subventions & Financements publics
*/

get_header();
?>
<section class="page-header">
    <div class="container">
        <h1 class="lang-fr">Subventions & Financements publics</h1>
        <h1 class="lang-en">Grants & Incentives</h1>
        <p class="lang-fr">Accédez aux dispositifs publics pertinents et maximisez l’impact de vos financements.</p>
        <p class="lang-en">Unlock relevant public schemes and maximize the impact of your funding.</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <article class="service-section">
            <h3 class="lang-fr">Cartographie & éligibilité</h3>
            <h3 class="lang-en">Mapping & eligibility</h3>
            <ul class="list lang-fr">
                <li>Screening programmes (nationaux, régionaux, sectoriels)</li>
                <li>Diagnostic d’éligibilité & priorisation</li>
            </ul>
            <ul class="list lang-en">
                <li>Screening national, regional, sectoral programs</li>
                <li>Eligibility diagnostics & prioritization</li>
            </ul>
        </article>
        <article class="service-section">
            <h3 class="lang-fr">Montage de dossiers & obtention</h3>
            <h3 class="lang-en">Application & acquisition</h3>
            <ul class="list lang-fr">
                <li>Structuration technique/financière des dossiers</li>
                <li>Business plan & impacts (emplois, export, carbone)</li>
                <li>Interaction avec organismes & suivi des demandes</li>
            </ul>
            <ul class="list lang-en">
                <li>Technical & financial structuring of applications</li>
                <li>Business plan & impact quantification (jobs, export, carbon)</li>
                <li>Engagement with agencies & application follow-up</li>
            </ul>
        </article>
        <article class="service-section">
            <h3 class="lang-fr">Conformité & reporting post-octroi</h3>
            <h3 class="lang-en">Compliance & post-award reporting</h3>
            <ul class="list lang-fr">
                <li>Pilotage jalons, rapports d’avancement & pièces justificatives</li>
                <li>Préparation audits d’utilisation des fonds</li>
                <li>Optimisation du mix subventions/financement</li>
            </ul>
            <ul class="list lang-en">
                <li>Milestone tracking, progress reports & supporting documents</li>
                <li>Preparation for public fund utilization audits</li>
                <li>Optimization of subsidies/financing mix</li>
            </ul>
        </article>
        <div class="callout">
            <p class="lang-fr">Simplifiez l’accès aux subventions et concentrez-vous sur l’exécution de vos projets.</p>
            <p class="lang-en">Simplify grant access and stay focused on executing your projects.</p>
            <?php synergia_cta_button( __( 'Identifier mes aides', 'synergia' ), __( 'Identify my incentives', 'synergia' ), synergia_indexed_url( 'contact' ) ); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

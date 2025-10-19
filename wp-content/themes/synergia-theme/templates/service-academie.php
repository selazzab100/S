<?php
/*
Template Name: Service – Académie & Formation
*/

get_header();
?>
<section class="page-header">
    <div class="container">
        <h1 class="lang-fr">Académie & Formation</h1>
        <h1 class="lang-en">Academy & Training</h1>
        <p class="lang-fr">Renforcer les compétences stratégiques et financières de vos équipes avec des parcours immersifs.</p>
        <p class="lang-en">Strengthen your teams’ strategic and financial capabilities with immersive learning journeys.</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <article class="service-section">
            <h3 class="lang-fr">Programmes dirigeants & managers</h3>
            <h3 class="lang-en">Executive & management programs</h3>
            <ul class="list lang-fr">
                <li>Stratégie, pilotage de la performance, lecture des états financiers</li>
                <li>Finance pour non-financiers (cash, marge, ROI)</li>
            </ul>
            <ul class="list lang-en">
                <li>Strategy, performance management, financial statement analysis</li>
                <li>Finance for non-financial managers (cash, margin, ROI)</li>
            </ul>
        </article>
        <article class="service-section">
            <h3 class="lang-fr">Tracks spécialisés Finance/Deal</h3>
            <h3 class="lang-en">Specialized finance/deal tracks</h3>
            <ul class="list lang-fr">
                <li>Due diligence & VDD/BDD simulations</li>
                <li>Modélisation financière (standards, scénarios, sensibilité)</li>
                <li>Clôture accélérée & contrôle interne « essentials »</li>
            </ul>
            <ul class="list lang-en">
                <li>Due diligence & VDD/BDD simulations</li>
                <li>Financial modeling (standards, scenarios, sensitivity)</li>
                <li>Accelerated close & internal control essentials</li>
            </ul>
        </article>
        <article class="service-section">
            <h3 class="lang-fr">Formats & dispositifs</h3>
            <h3 class="lang-en">Formats & delivery</h3>
            <ul class="list lang-fr">
                <li>Ateliers intra/inter, parcours certifiants, coaching 1-to-1</li>
                <li>Études de cas et business games contextualisés Maroc/Afrique</li>
            </ul>
            <ul class="list lang-en">
                <li>In-company & open workshops, certification tracks, one-to-one coaching</li>
                <li>Case studies and business games contextualized for Morocco/Africa</li>
            </ul>
        </article>
        <div class="callout">
            <p class="lang-fr">Déployez des formations immédiatement actionnables pour accélérer vos talents.</p>
            <p class="lang-en">Deliver actionable learning experiences to accelerate your talent.</p>
            <?php synergia_cta_button( __( 'Construire un programme', 'synergia' ), __( 'Build a program', 'synergia' ), synergia_indexed_url( 'contact' ) ); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

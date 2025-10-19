<?php
/*
Template Name: Service – Transactions & Due Diligence
*/

get_header();
?>
<section class="page-header">
    <div class="container">
        <h1 class="lang-fr">Transactions & Due Diligence</h1>
        <h1 class="lang-en">Transactions & Due Diligence</h1>
        <p class="lang-fr">Sécuriser vos opérations de M&A et de levée de fonds grâce à une équipe deal expérimentée.</p>
        <p class="lang-en">Secure your M&A and fundraising transactions with an experienced deal team.</p>
    </div>
</section>
<section class="section">
    <div class="container">
        <article class="service-section">
            <h3 class="lang-fr">Due diligence financière</h3>
            <h3 class="lang-en">Financial due diligence</h3>
            <ul class="list lang-fr">
                <li>Buy-Side Financial Due Diligence</li>
                <li>Vendor Due Diligence / Vendor Assist</li>
                <li>Red-Flag DD (revue rapide orientée risques clés)</li>
            </ul>
            <ul class="list lang-en">
                <li>Buy-side financial due diligence</li>
                <li>Vendor due diligence / vendor assist</li>
                <li>Red-flag reviews focused on key risks</li>
            </ul>
        </article>
        <article class="service-section">
            <h3 class="lang-fr">Readiness & exécution de transaction</h3>
            <h3 class="lang-en">Transaction readiness & execution</h3>
            <ul class="list lang-fr">
                <li>Data-book & Quality of Earnings (QoE)</li>
                <li>Assistance SPA / price mechanism (BFR, dette nette, earn-out)</li>
                <li>Préparation carve-out / coûts standalone</li>
            </ul>
            <ul class="list lang-en">
                <li>Data book & Quality of Earnings (QoE)</li>
                <li>SPA support & price mechanism (working capital, net debt, earn-out)</li>
                <li>Carve-out preparation & standalone cost modelling</li>
            </ul>
        </article>
        <article class="service-section">
            <h3 class="lang-fr">Plan post-deal</h3>
            <h3 class="lang-en">Post-deal planning</h3>
            <ul class="list lang-fr">
                <li>100-Day Plan financier & pilotage des initiatives</li>
                <li>KPI pack post-closing & focus cash</li>
            </ul>
            <ul class="list lang-en">
                <li>Financial 100-day plan & initiative tracking</li>
                <li>Post-closing KPI pack & cash monitoring</li>
            </ul>
        </article>
        <div class="callout">
            <p class="lang-fr">Réduisez les incertitudes et maximisez la valeur de vos transactions avec Synergia.</p>
            <p class="lang-en">Reduce uncertainty and maximize transaction value with Synergia.</p>
            <?php synergia_cta_button( __( 'Parlons transaction', 'synergia' ), __( 'Discuss your deal', 'synergia' ), home_url( '/contact' ) ); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

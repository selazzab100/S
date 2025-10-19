<?php
/*
Template Name: Contact
*/

get_header();
?>
<section class="page-header">
    <div class="container">
        <h1 class="lang-fr">Contactez Synergia : Échangeons sur Vos Projets</h1>
        <h1 class="lang-en">Contact Synergia: Let’s Discuss Your Projects</h1>
        <p class="lang-fr">Nous sommes toujours ravis d’échanger sur vos défis et vos ambitions. N’hésitez pas à nous contacter via le formulaire ci-dessous ou directement par téléphone/email. Notre équipe est prête à vous apporter les solutions adaptées à vos besoins.</p>
        <p class="lang-en">We are always eager to discuss your challenges and ambitions. Feel free to contact us via the form below or directly by phone/email. Our team is ready to provide you with tailored solutions for your needs.</p>
    </div>
</section>
<section class="section">
    <div class="container contact-grid">
        <div class="contact-form">
            <h2 class="lang-fr">Formulaire de contact</h2>
            <h2 class="lang-en">Contact form</h2>
            <form action="#" method="post">
                <label class="lang-fr" for="contact-first-name">Prénom</label>
                <label class="lang-en" for="contact-first-name">First name</label>
                <input type="text" id="contact-first-name" name="contact-first-name" required>

                <label class="lang-fr" for="contact-last-name">Nom</label>
                <label class="lang-en" for="contact-last-name">Last name</label>
                <input type="text" id="contact-last-name" name="contact-last-name" required>

                <label class="lang-fr" for="contact-email">Email professionnel</label>
                <label class="lang-en" for="contact-email">Professional email</label>
                <input type="email" id="contact-email" name="contact-email" required>

                <label class="lang-fr" for="contact-phone">Téléphone</label>
                <label class="lang-en" for="contact-phone">Phone</label>
                <input type="tel" id="contact-phone" name="contact-phone">

                <label class="lang-fr" for="contact-company">Nom de l’entreprise</label>
                <label class="lang-en" for="contact-company">Company name</label>
                <input type="text" id="contact-company" name="contact-company">

                <label class="lang-fr" for="contact-message">Message</label>
                <label class="lang-en" for="contact-message">Message</label>
                <textarea id="contact-message" name="contact-message" required></textarea>

                <button type="submit" class="btn lang-fr"><?php esc_html_e( 'Envoyer', 'synergia' ); ?></button>
                <button type="submit" class="btn lang-en"><?php esc_html_e( 'Submit', 'synergia' ); ?></button>
            </form>
        </div>
        <div class="contact-details">
            <h2 class="lang-fr">Coordonnées</h2>
            <h2 class="lang-en">Contact details</h2>
            <ul>
                <li><strong class="lang-fr">Adresse :</strong> <span class="lang-fr">123 Rue de l’Exemple, Casablanca, Maroc</span><span class="lang-en">123 Example Street, Casablanca, Morocco</span></li>
                <li><strong class="lang-fr">Téléphone :</strong> <span class="lang-fr">+212 5 22 00 00 00</span><span class="lang-en">+212 5 22 00 00 00</span></li>
                <li><strong class="lang-fr">Email :</strong> <span>contact@synergia-consulting.ma</span></li>
            </ul>
            <div class="map" role="img" aria-label="Emplacement du bureau Synergia à Casablanca / Location of Synergia office in Casablanca">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3327.939763566113!2d-7.617!3d33.589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2b0c73a3f1d%3A0x123456789abcdef!2sCasablanca!5e0!3m2!1sfr!2sma!4v0000000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="newsletter" aria-labelledby="newsletter-title">
                <h3 id="newsletter-title" class="lang-fr">Newsletter</h3>
                <h3 class="lang-en">Newsletter</h3>
                <p class="lang-fr">Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités, analyses de marché et conseils d’experts directement dans votre boîte de réception.</p>
                <p class="lang-en">Subscribe to our newsletter to receive our latest news, market analyses, and expert advice directly in your inbox.</p>
                <form class="newsletter-form" action="#" method="post">
                    <label class="screen-reader-text" for="newsletter-email-contact">Email</label>
                    <input type="email" id="newsletter-email-contact" name="newsletter-email-contact" placeholder="Email">
                    <button type="submit" class="btn">OK</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

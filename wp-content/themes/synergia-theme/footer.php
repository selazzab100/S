</main>
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/synergia-logo-light.svg' ); ?>" alt="Synergia logo" width="140" height="40">
                <p class="lang-fr">Cabinet de conseil en stratégie et finance basé à Casablanca, au service des leaders marocains et internationaux.</p>
                <p class="lang-en">Strategy and corporate finance advisory firm based in Casablanca, supporting Moroccan and international leaders.</p>
            </div>
            <div>
                <h3 class="lang-fr">Navigation</h3>
                <h3 class="lang-en">Navigation</h3>
                <?php
                wp_nav_menu( [
                    'theme_location' => 'footer',
                    'container'      => 'nav',
                    'menu_class'     => 'footer-menu',
                    'fallback_cb'    => 'wp_page_menu',
                ] );
                ?>
            </div>
            <div>
                <h3 class="lang-fr">Contact</h3>
                <h3 class="lang-en">Contact</h3>
                <ul>
                    <li><span class="lang-fr">Adresse : 123 Rue de l’Exemple, Casablanca, Maroc</span><span class="lang-en">Address: 123 Example Street, Casablanca, Morocco</span></li>
                    <li><span class="lang-fr">Téléphone : +212 5 22 00 00 00</span><span class="lang-en">Phone: +212 5 22 00 00 00</span></li>
                    <li><span class="lang-fr">Email : contact@synergia-consulting.ma</span><span class="lang-en">Email: contact@synergia-consulting.ma</span></li>
                </ul>
            </div>
            <div>
                <h3 class="lang-fr">Newsletter</h3>
                <h3 class="lang-en">Newsletter</h3>
                <p class="lang-fr">Inscrivez-vous pour recevoir nos insights et invitations d’événements.</p>
                <p class="lang-en">Subscribe to receive our insights and event invitations.</p>
                <form class="newsletter-form" action="#" method="post">
                    <label class="screen-reader-text" for="newsletter-email">Email</label>
                    <input type="email" id="newsletter-email" name="newsletter-email" placeholder="Email">
                    <button type="submit" class="btn">Go</button>
                </form>
            </div>
        </div>
        <div class="site-info">
            <span class="lang-fr">© <?php echo date_i18n( 'Y' ); ?> Synergia. Tous droits réservés.</span>
            <span class="lang-en">© <?php echo date_i18n( 'Y' ); ?> Synergia. All rights reserved.</span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

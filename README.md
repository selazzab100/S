# Synergia WordPress Theme

This repository contains a bespoke bilingual WordPress theme crafted for **Synergia**, a consulting firm specialising in strategy, corporate finance, and capability building. The theme delivers a premium experience inspired by top-tier advisory firms, with dynamic storytelling components and ready-to-publish content in French and English.

## Highlights

- **Bilingual experience** – all sections include French and English copy with an instant language switcher available from the site header.
- **Immersive homepage** – animated impact counters, marquee-style client logos, and CTA-driven service cards connect visitors to the seven Synergia service lines.
- **Dedicated service pages** – each advisory line (Strategy, Deals, Corporate Finance, CFO Advisory, Fundraising, Grants, Academy) has a detailed template describing offerings and benefits.
- **Marketing-ready pages** – pre-built layouts for Services overview, About, and Contact (with a styled form, embedded map, and newsletter signup).
- **Responsive corporate design** – clean layout, motion accents, and accessible colour contrasts following the Synergia brand palette.

## Structure

```
wp-content/
└── themes/
    └── synergia-theme/
        ├── style.css
        ├── functions.php
        ├── front-page.php
        ├── index.php
        ├── header.php
        ├── footer.php
        ├── page-services.php
        ├── page-a-propos.php
        ├── page-contact.php
        ├── assets/
        │   ├── css/
        │   ├── js/
        │   │   └── theme.js
        │   └── img/
        │       ├── synergia-logo.svg
        │       ├── synergia-logo-light.svg
        │       └── client-1.svg … client-8.svg
        └── templates/
            ├── service-strategie.php
            ├── service-transactions.php
            ├── service-corporate-finance.php
            ├── service-cfo.php
            ├── service-financement.php
            ├── service-subventions.php
            └── service-academie.php
```

## Installation

1. Copy the `wp-content` directory into your WordPress project (or merge the `synergia-theme` folder into an existing `wp-content/themes` directory).
2. Activate **Synergia Consulting Theme** from the WordPress admin panel.
3. Create pages for *Accueil*, *Services*, *À propos*, *Contact*, and each service line. Assign the corresponding templates (e.g., “Service – Stratégie & Excellence Opérationnelle”).
4. Set the *Accueil* page as the static front page in **Settings ▸ Reading**.
5. Configure the Primary and Footer menus to match the theme navigation.

## Customisation Tips

- Replace the placeholder SVG logos in `assets/img` with client and brand assets.
- Adjust hero visuals or add new imagery by updating `style.css` or the assets folder.
- Extend bilingual handling (e.g., integrate WPML/Polylang) if a full localisation workflow is required.

## License

The theme is released under the GPL-2.0-or-later license in line with WordPress requirements.

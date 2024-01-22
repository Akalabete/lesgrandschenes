<?php get_header(); ?>
<?php 
        $phone_number = get_option('lesgrandschenes_settings_field_phone_number');
        $email = get_option('lesgrandschenes_settings_field_email');
        $mobile_number = get_option('lesgrandschenes_settings_field_mobile_number');
      ?>
<main>

<div class="background-image"></div>
    <section class="topic">
        <div class="sub-topic">
            <div class="main-cover-pic pic">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/medium/coverpicmedium.webp" sizes="(min-width: 768px) 900px, 100vw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small/coverpicsmall.webp" alt="Photo de face du gite avec un massif de fleur et piscine" class="img-class" width="400" height="300">
                </picture>
            </div>
            <h2 id="presentation"><?php _e('présentation', 'lesgrandschenes'); ?></h2>
            <div class="presentation-container">
                <p id="descriptif" class="presentation">
                    <?php _e('
                    Nous serons heureux de vous accueillir dans un cadre verdoyant et arboré de 10 000 m², avec piscine de 12x6
                    sécurisée où vous pourrez allier détente et visites culturelles grâce aux nombreuses opportunités offertes
                    par notre région.
                    ', 'lesgrandschenes'); ?>
                </p>
                <ul class="activity-list">
                    <li class="activity-item"><?php _e('Circuit des églises romanes,', 'lesgrandschenes'); ?></li>
                    <li class="activity-item"><?php _e('Sentiers pédéstres,', 'lesgrandschenes'); ?></li>
                    <li class="activity-item"><?php _e('Golfs,', 'lesgrandschenes'); ?></li>
                    <li class="activity-item"><?php _e('Tennis,', 'lesgrandschenes'); ?></li>
                    <li class="activity-item"><?php _e('Plaisirs nautiques...', 'lesgrandschenes'); ?></li>
                </ul>
                <p class="presentation">
                    <?php _e('La Dordogne vous offre aussi de multiples activités que vous pourrez suivre au gré de vos envies, route
                    des mille et un châteaux, sites prestigieux de la préhistoire, jardins de charme...', 'lesgrandschenes'); ?>
                </p>
            </div>
        </div>
        <div class="sub-topic-reverse">
            <div class="pic">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/medium/pic-one-medium.webp" sizes="(min-width: 768px) 900px, 100vw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small/pic-one-small.webp" alt="Salon du gîte avec télé et cheminée" class="img-class" width="400" height="300">
                </picture>
            </div>
            <div class="activities-wrapper">
                <h3 class="activity-subtitle"><?php _e('A voir alentours', 'lesgrandschenes'); ?></h3>
                <div class="activities-container">
                    <div class="activ">
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;<a href="https://www.perigord.com/listings/villes-et-villages/brantome/" target="_blank">Brantôme</a>, la Venise du Périgord','lesgrandschenes'); ?></p>
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;<a href="https://www.aubeterresurdronne.com/" target="_blank">Aubeterre</a>, et son église troglodyte', 'lesgrandschenes'); ?></p>
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;<a href="https://www.dordogne.fr/que-faire-en-dordogne/les-incontournables/grand-etang-de-la-jemaye" target="_blank">Le grand étang de la Jemaye</a>', 'lesgrandschenes'); ?></p>
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;Les Châteaux de <a href="https://www.perigord.com/listings/sites-touristiques-visites/chateau-de-bourdeilles/" target="_blank">Bourdeilles</a> et <a href=" "https://www.chateau-puyguilhem.fr/"target="_blank">Puyguilhem</a>', 'lesgrandschenes'); ?></p>
                    </div>
                    <div class="activ">
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;Les <a href="https://grotte-villars.com/" target="_blank">grottes de Villars</a>', 'lesgrandschenes'); ?></p>
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;<a href="https://www.dordogne-perigord-tourisme.fr/offres/le-circuit-des-eglises-romanes-saint-aulaye-saint-aulaye-puymangou-fr-4442823/" target="_blank">Eglises Romanes</a>', 'lesgrandschenes'); ?></p>
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;<a href="https://www.perigordriberacois.fr/marches" target=_blank">Marché de Ribérac</a>', 'lesgrandschenes'); ?></p>
                        <p class="activities"><?php _e('➡️&nbsp;&nbsp;Le vieux <a href="https://www.caruso24.net/balade-perigueux-centre.php" target="_blank">Périgueux</a>', 'lesgrandschenes'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="topic">
        <div class="sub-topic">
            <div class="pic">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/medium/pic-two-medium.webp" sizes="(min-width: 768px) 900px, 100vw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small/pic-two-small.webp" alt="Photo de la cuisine du site avec des fleurs fraîches dans des vases" class="img-class" width="400" height="300">
                </picture>
            </div>
            <h2 id="localisation">Localisation</h2>
            <div id="situation" class="adress-loc-container">
                <div class="adresse">
                    <h3 class="adress-title"><?php _e('Les Grands Chênes', 'lesgrandschenes'); ?></h3>
                    <p class="adress-name"><?php _e('Annie VALLARD', 'lesgrandschenes'); ?></p>
                    <p class="adress-description"><?php _e('Leynie -', 'lesgrandschenes'); ?>
                        <span><?php _e('24410 FESTALEMPS', 'lesgrandschenes'); ?></span>
                    </p>
                    <p><?php echo $email; ?></p>
                    <p><?php echo $phone_number; ?></p>
                    <p><?php echo $mobile_number; ?></p>
                </div>
                <div class="localisation-container">
                    <a href="https://www.google.fr/maps/place/2+Chem.+de+Leynie,+24410+St+Privat+en+P%C3%A9rigord/@45.2290909,0.2370968,17z/data=!3m1!4b1!4m5!3m4!1s0x47ffebf13ebb4129:0xcd930de6a3153563!8m2!3d45.2290872!4d0.2396717?entry=ttu" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/plandesituation.webp" class="localisation-pic" width="700" height="421" alt="plan de situation, lien vers google maps"></a>
                </div>
            </div>
        </div>
    </section>
    <section class="topic">
        <div class="sub-topic">
            <div class="description-wrapper">
                <h2 id="description">Descriptif</h2>
                <div id="equipments"class="description">
                    <p class="description-situ"><?php _e('En Périgord Vert, Festalemps est un petit village, situé à 10 Km de
                    RIBERAC, 47 Km de PERIGUEUX, 50 Km de BERGERAC et de St EMILION.', 'lesgrandschenes'); ?></p>
                    <p class="description-lodge"><?php _e('Vous logerez dans une ancienne grange rénovée tout confort de 180 m², salon, séjour,
                    cuisine équipée, 3 chambres confortables et douillettes avec salle de bain ou douche et WC.', 'lesgrandschenes'); ?></p>
                    <div class="description-item-container">
                        <p class="description-item"><?php _e('Télévision, lecteur DVD, accès WIFI.', 'lesgrandschenes'); ?></p>
                        <p class="description-item"><?php _e('Literie : 160, 140, 90 X2 + lit bébé.', 'lesgrandschenes'); ?></p>
                        <p class="description-item"><?php _e('Draps et linge de maison fournis', 'lesgrandschenes'); ?></p>
                    </div>
                    <h3 class="description-subtitle"><?php _e('Extérieur :', 'lesgrandschenes'); ?></h3>
                    <div class="description-item-container">
                        <p class="description-item"><?php _e('Piscine sécurisée 12 X 6,', 'lesgrandschenes'); ?></p>
                        <p class="description-item"><?php _e('Salon de jardin,', 'lesgrandschenes'); ?></p>
                        <p class="description-item"><?php _e('Commerce de proximité à 3km, tabac, journaux, pain, épicerie, jeux.', 'lesgrandschenes'); ?></p>
                    </div>
                </div>
            </div>
            <div class="pic">
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/medium/pic-three-medium.webp" sizes="(min-width: 768px) 900px, 100vw">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/small/pic-three-small.webp" alt="Photo d'une des chambres du gîte avec lit double'" class="img-class" width="400" height="300">
                </picture>
            </div>
        
        </div>
    </section>
    <section class="topic magic-section">
        <h2 class="testimonial">Livre d'or</h2>
        <div id="testimonials-container" class="testimonials-container"></div>
        <div class="slider-buttons">
            <button id="prevButton">Précédent</button>
            <button id="nextButton">Suivant</button>
        </div>
    </section>

    <script>
        initializeTestimonialsSlider('testimonials-container', 'prevButton', 'nextButton');
    </script>
    <section class="topic magic-section">
        <h2 id="reservation">Tarifs 2024 et réservations</h2>
        <table class="pricing-table">
            <thead>
                <tr>
                    <th>Mois</th>
                    <th>À la journée</th>
                    <th>À la semaine</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MAI</td>
                    <td>141€</td>
                    <td>987€</td>
                </tr>
                <tr>
                    <td>JUIN</td>
                    <td>172€</td>
                    <td>1204€</td>
                </tr>
                <tr>
                    <td>JUILLET</td>
                    <td>247€</td>
                    <td>1729€</td>
                </tr>
                <tr>
                    <td>AOUT</td>
                    <td>247€</td>
                    <td>1729€</td>
                </tr>
                <tr>
                    <td>SEPTEMBRE</td>
                    <td>172€</td>
                    <td>1204€</td>
                </tr>
            </tbody>
        </table>
    <p class="reservation-disponibility">
        <?php _e('Vous pouvez vérifier nos disponibilités et réserver directement sur le site <a href="https://www.abritel.fr/location-vacances/p582656?adults=2&dateless=true&destType=MARKET&destination=Festalemps%2C%20Saint-Privat-en-P%C3%A9rigord%2C%20Dordogne%2C%20France&expediaPropertyId=27126385&latLong=45.22535%2C0.241037&privacyTrackingState=CAN_NOT_TRACK&pwa_ts=1704968919940&referrerUrl=aHR0cHM6Ly93d3cuYWJyaXRlbC5mci9Ib3RlbC1TZWFyY2g%3D&regionId=3000038576&rfrr=HSR&searchId=2b86b646-14e1-479e-bbfe-b6fd2c2604b5&sort=RECOMMENDED&useRewards=true&userIntent=&x_pwa=1" target="_blank">Abritel</a>.', 'lesgrandschenes'); ?>
    </p>
    <div class="button-container">
        <a href="https://www.abritel.fr/location-vacances/p582656?adults=2&dateless=true&destType=MARKET&destination=Festalemps%2C%20Saint-Privat-en-P%C3%A9rigord%2C%20Dordogne%2C%20France&expediaPropertyId=27126385&latLong=45.22535%2C0.241037&privacyTrackingState=CAN_NOT_TRACK&pwa_ts=1704968919940&referrerUrl=aHR0cHM6Ly93d3cuYWJyaXRlbC5mci9Ib3RlbC1TZWFyY2g%3D&regionId=3000038576&rfrr=HSR&searchId=2b86b646-14e1-479e-bbfe-b6fd2c2604b5&sort=RECOMMENDED&useRewards=true&userIntent=&x_pwa=1" target="_blank" class="reserve-button">Je réserve</a>   
    </div>
    </section>

</main>
<?php get_footer(); ?>
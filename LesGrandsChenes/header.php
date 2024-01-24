<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php _e('Les Grands Chênes', 'lesgrandschenes'); ?></title>
    <meta name=description content="Gîte de caractère aux portes du Périgord vert, location de vacance de mai à septembre">
    <meta name=robots content="index, follow">
    <meta property=og:title content="Les Grands Chênes, gîte de caractère aux portes du Périgord vert">
    <meta property=og:description content="Gîte de caractère aux portes du Périgord vert, location de vacance de mai à septembre
    , près de Ribérac, Périgueux et Bergerac">
    <meta property=og:url content=https://lesgrandschenes.info/>
    <meta property=og:type content=website>
    <meta property=og:site_name content="Les Grands Chênes">
    <meta http-equiv=Permissions-Policy content="interest-cohort=()">
    <link rel=stylesheet href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/medium/coverpicmedium.webp" media="(min-width: 768px)">
    <link rel="preload" as="image" href="<?php echo get_template_directory_uri(); ?>/assets/images/small/coverpicsmall.webp" media="(max-width: 767px)">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Color+Emoji&display=swap" rel="stylesheet">
    <script type=application/ld+json>
        [
          {
            "@context": "https://schema.org",
            "@type": "LodgingBusiness",
            "name": "Les Grands Chênes",
            "description": "Site de présentation du gîte les grands chênes",
            "image": [
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/coverpicsmall.webp",
              "width": "400",
              "height": "300",
              "description": "main cover picture"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-one-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-two-small.web",
              "width": "400",
              "height": "300",
              "description": "lodge kitchen area"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-three-small.webp",
              "width": "400",
              "height": "300",
              "description": "one of the lodge bedroom"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-four-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge entrance"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-five-small.webp",
              "width": "400",
              "height": "300",
              "description": "another view of the lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-six-small.webp",
              "width": "400",
              "height": "300",
              "description": "another bedroom of the lodge"
              }
            ]
          },
          {
            "@context": "https://schema.org",
            "@type": "ImageGallery",
            "name": "Slider d'images",
            "image": [
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-one-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-two-small.web",
              "width": "400",
              "height": "300",
              "description": "lodge kitchen area"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-three-small.webp",
              "width": "400",
              "height": "300",
              "description": "one of the lodge bedroom"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-four-small.webp",
              "width": "400",
              "height": "300",
              "description": "lodge entrance"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-five-small.webp",
              "width": "400",
              "height": "300",
              "description": "another view of the lodge living room"
              },
              {
              "@type": "ImageObject",
              "url": "./assets/images/small/pic-six-small.webp",
              "width": "400",
              "height": "300",
              "description": "another bedroom of the lodge"
              }
            ]
            },
            {
            "@context": "https://schema.org",
            "@type": "LodgingBusiness",
            "name": "Les Grands Chênes",
            "url": "https://lesgrandschenes.info/",
            "priceRange": "141€ to 172€",
            "telephone": "+33-6-82-26-87-80",
            "numberOfRooms": "3",
            "petsAllowed": "true",
            "paymentAccepted": [
              "Cash",
              "CreditCard"
              ],
            "image": "./assets/images/small/coverpicsmall.webp",
            "contactPoint": {
              "@type": "ContactPoint",
              "telephone": "+33-6-82-26-87-80",
              "contactType": "customer service"
            },
            "address": {
              "@type": "PostalAddress",
              "streetAddress": "Leynie",
              "addressLocality": "Festalemps",
              "addressRegion": "Nouvelle Acquitaine",
              "postalCode": "24410",
              "addressCountry": "FRANCE"
            }
          }
        ]
      
      </script>
      <script>
    function initializeTestimonialsSlider(containerId, prevButtonId, nextButtonId) {
        fetch('<?php echo get_template_directory_uri(); ?>/assets/data/testimonialslist.json')
            .then(response => response.json())
            .then(testimonials => {
                const testimonialsContainer = document.getElementById(containerId);
                let currentIndex = 0;

                function showTestimonial(index) {
                    const testimonial = testimonials[index];
                    const testimonialItem = document.createElement('div');
                    testimonialItem.classList.add('testimonial-item');
                    testimonialItem.innerHTML = `
                        <div class="testimonial-info">
                            <p class="testimonial-owner">${testimonial.name}</p>
                            <p class="testimonial-date">${testimonial.date}</p>
                            <p class="testimonial-content-title">${testimonial.title}</p>
                            <p class="testimonial-content">${testimonial.content}</p>
                        </div>
                        <div class="testimonial-photo-container">
                            <img src="<?php echo get_template_directory_uri(); ?>${testimonial.photo}" alt="${testimonial.alt}" class="testimonial-photo" width="400" height="300">
                        </div>
                    `;

                    testimonialsContainer.innerHTML = '';
                    testimonialsContainer.appendChild(testimonialItem);
                }

                function nextTestimonial() {
                    currentIndex = (currentIndex + 1) % testimonials.length;
                    showTestimonial(currentIndex);
                }

                function prevTestimonial() {
                    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
                    showTestimonial(currentIndex);
                }

                showTestimonial(currentIndex);
                document.getElementById(prevButtonId).addEventListener('click', prevTestimonial);
                document.getElementById(nextButtonId).addEventListener('click', nextTestimonial);
            })
            .catch(error => console.error('Error fetching testimonials:', error));
    }

  
    document.addEventListener('DOMContentLoaded', function() {
        initializeTestimonialsSlider('testimonials-container', 'prevButton', 'nextButton', '<?php echo get_template_directory_uri(); ?>/assets/data/testimonialslist.json');
    });


    document.addEventListener('DOMContentLoaded', function() {
        initializeTestimonialsSlider('testimonials-container-header', 'prevButtonHeader', 'nextButtonHeader', '<?php echo get_template_directory_uri(); ?>/assets/data/testimonialslist.json');
    });
    </script>
    <?php wp_head(); ?>
  </head>
  <body>
      <header>
      <div class="sticky-right">
      <section id="sticky-testimonials" >
        <h2  class="testimonial">Livre d'or</h2>
        <div id="testimonials-container-header" class="testimonials-container"></div>
        <div class="slider-buttons">
            <button id="prevButtonHeader">Précédent</button>
            <button id="nextButtonHeader">Suivant</button>
        </div>
    </section>
    
    
    <script>
        initializeTestimonialsSlider('testimonials-container-header', 'prevButtonHeader', 'nextButtonHeader');
    </script>
</body>

   
    <section>
        <h2>Tarifs 2024 et réservations</h2>
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
      </div>
        <div class="container">
            <div class="header">
                <a href="/" class="logolink">
                <img class="logo" width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="<?php _e('Les Grands Chênes', 'lesgrandschenes'); ?>" />
                <span >
                    <h1 class="intro">
                    <?php 
                    $introduction = get_option('lesgrandschenes_settings_field_introduction');
                    
                    echo $introduction;
                    ?>
                    </h1>
                </span>
                </a>
                <ul class="nav">
                <li class="nav-item"><a href="/" class="nav-link"><?php _e('Accueil', 'lesgrandschenes'); ?></a></li>
                <li class="nav-item"><a href="#descriptif" class="nav-link"><?php _e('Présentation', 'lesgrandschenes'); ?></a></li>
                <li class="nav-item"><a href="#situation" class="nav-link"><?php _e('Localisation', 'lesgrandschenes'); ?></a></li>
                <li class="nav-item"><a href="#equipments" class="nav-link"><?php _e('Equipements', 'lesgrandschenes'); ?></a></li>
                <li class="nav-item"><a href="#testimonial" class="nav-link nav-link-magic"><?php _e('Testimonial', 'lesgrandschenes'); ?></a></li>
                <li class="nav-item"><a href="#reservation" class="nav-link nav-link-magic"><?php _e('Reservation', 'lesgrandschenes'); ?></a></li>
                </ul>
            </div>
            <p class="lesgrandschenes"><?php _e('LES GRANDS CHÊNES', 'lesgrandschenes'); ?></p>
            <p class="ranks">Classement préfécture ★★★★</p>
            <p class="ranks">Hébergement Qualité Périgord Vert</p>
        </div>
      </header>
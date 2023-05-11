<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="./assets/js/carousel.js" defer></script>
    <script src="./assets/js/script.js" type="module" defer></script>
</head>

<body>
    <?php require_once './structure/headerView.php' ?>

    <section id="slides" aria-roledescription="Slideshow" aria-label="Description of Carousel">
        <div class="slides-control">
            <button class="slides-playpause" aria-controls="slides-items" aria-label="Stop Carousel">
                <svg class="playpause" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32" role="img">
                    <g class="pause">
                        <path d="m7.43 31c2.36 0 4.29-1.93 4.29-4.29v-21.4c0-2.36-1.93-4.29-4.29-4.29-2.36 0-4.29 1.93-4.29 4.29v21.4c0 2.36 1.93 4.29 4.29 4.29zm12.9-25.7v21.4c0 2.36 1.93 4.29 4.29 4.29s4.29-1.93 4.29-4.29v-21.4c0-2.36-1.93-4.29-4.29-4.29s-4.29 1.93-4.29 4.29z">
                        </path>
                    </g>
                    <g class="play">
                        <path d="m6.29 0.988c1.75-0.00742 13.3 8.37 20 12.4 2.61 1.35 2.72 3.64 0.145 5.18-6.19 3.67-18.7 12.4-20.3 12.4-1.59 0.0055-2.31-1.16-2.36-2.73 0.0104-8.27-0.0208-16.5 0.0156-24.8-0.0349-1.19 0.787-2.46 2.53-2.47z">
                        </path>
                    </g>
                </svg>
            </button>
            <button class="slides-prev" aria-controls="slides-items" aria-label="Previous Slide">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32" role="img">
                    <path d="m22.1 31c2.03-0.108 3.01-2.54 1.62-4.03l-10.4-10.8 10.4-11c2.34-2.26-1.13-5.73-3.39-3.39l-12 12.6c-0.903 0.904-0.937 2.36-0.0775 3.3l12 12.5c0.483 0.548 1.19 0.846 1.92 0.808z">
                    </path>
                </svg>
            </button>
            <button class="slides-next" aria-controls="slides-items" aria-label="Next Slide">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 32 32" role="img">
                    <path d="m9.9 31c-2.03-0.108-3.01-2.54-1.62-4.03l10.4-10.8-10.4-11c-2.34-2.26 1.13-5.73 3.39-3.39l12 12.6c0.903 0.904 0.937 2.36 0.0775 3.3l-12 12.5c-0.483 0.548-1.19 0.846-1.92 0.808z">
                    </path>
                </svg>
            </button>
        </div>
        <?php //dd(getActualiteById(1)['carousel_deux']);?>
        <div id="slides-items">
            <!-- Slide 1 : image link + caption -->
            <div id="slide-1" class="slide-item slideactive" role="group" aria-roledescription="Slide" aria-label="1 of 3">
                <figure>
                    <img  class="sliderImg"  src="./uploads/carousel/logoVectoAccueilLight.png" alt="EpiVeto" />
                </figure>
            </div>

            <!-- Slide 2 : image + caption -->
           
            <div id="slide-2" class="slide-item" role="group" aria-roledescription="Slide" aria-label="2 of 3">
                <figure>
                    <img class="sliderImg" src="<?php echo getActualiteById(1)['carousel_un'];?>" alt="carousel un"/>
                </figure>
            </div>

            <!-- Slide 3 : image link -->
            <div id="slide-3" class="slide-item" role="group" aria-roledescription="Slide" aria-label="3 of 3">
                <figure>
                    <img class="sliderImg"  src="<?php echo getActualiteById(1)['carousel_deux'];?>" alt="carousel deux"/>
                </figure>
            </div>
        </div>
        <!-- end slides-items -->
    </section>


    <main>
        <section class="presentation">
            <h1 class="accueil"> Bienvenue à Épi-Véto !</h1>
          
            <p>
                Nous sommes une équipe de professionnels, dévoués à fournir des soins de qualité pour vos compagnons à quatre pattes. Notre clinique offre une gamme complète de services vétérinaires, allant de la médecine préventive à la chirurgie avancée.
            </p>
            <div class="imgPresentation">
                <div class="imgPresentationImg"><img src="./assets/img/clinique/epiveto.jpg" alt="Épi-Véto"></div>
                <div class="imgPresentationText">
                    <p>Chez nous, vous trouverez une atmosphère chaleureuse et accueillante pour vous et votre animal de compagnie. Nous nous engageons à offrir un service personnalisé et attentionné à chaque patient, tout en travaillant en étroite collaboration avec vous pour assurer la meilleure santé possible de votre animal.
                    </p>
                    <p>
                        Notre équipe est composée de docteurs vétérinaires et d'ASV (Auxiliaire Spécialisé(e) Vétérinaire) diplômé(e)s et formé(e)s en permanence, tous animés par une passion commune pour les animaux. Nous sommes équipés d'installations modernes et renouvellées régulièrement pour garantir des soins de qualité supérieure à tous les animaux qui nous sont confiés.
                    </p>
                </div>
            </div>
            <p>Que vous ayez besoin d'une simple consultation de routine, d'une intervention chirurgicale complexe ou de conseils sur la santé de votre animal, nous sommes là pour vous aider. N'hésitez pas à nous contacter pour en savoir plus sur nos services ou pour prendre rendez-vous avec l'un de nos vétérinaires.</p>
        </section>
        <section class="reassuranceAccueil">
            <div class="reassurance">
                <div class="reassuranceItem">
                    <div class="reassuranceImg"><img src="./assets/img/animaux/chienChatNac.png" alt="chat lapin chien"></div>
                    <p>Chiens - Chats - NAC</p>
                    <figcaption>Images de <a href="https://fr.freepik.com">Freepik</a></figcaption>

                </div>
                <div class="reassuranceItem">
                    <div class="reassuranceImg"><img src="./assets/img/animaux/veterinaire-prenant-soin-chien-compagnie.jpg" alt="main dans patte">
                </div>
                    <p>Conseils</p>
                    <figcaption>Image de <a href="https://fr.freepik.com/photos-gratuite/veterinaire-prenant-soin-chien-compagnie_20823300.htm#query=pate%20chien%20main&position=20&from_view=search&track=ais">Freepik</a></figcaption>

                </div>
                <div class="reassuranceItem">
                    <div class="reassuranceImg"><img src="./assets/img/animaux/chien-pekinois-stethoscope-isole.jpg" alt="chien stéthoscope"></div>
                    <p>Qualité des soins</p>
                    <figcaption>Image de <a href="https://fr.freepik.com/photos-gratuite/chien-chiot-pekinois-stethoscope-pres-ses-pattes-posant_9083141.htm#query=pekinois%20docteur&position=12&from_view=search&track=ais">Freepik</a></figcaption>

                </div>
            </div>
        </section>
        <div class="sideAccueil">
            <?php include_once 'structure/sideView.php' ?>
        </div>

    </main>
    <?php include_once 'structure/footerView.php' ?>

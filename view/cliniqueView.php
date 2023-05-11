<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La clinique - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" type="module" defer></script>

</head>

<body>

<?php require_once './structure/headerView.php' ?>


         <h1>La clinique </h1>



    <main>
     
        <section class="services">
            <h2>Services proposés</h2>
            <ul>
                <li><i class="fa-solid fa-paw"></i> Médecine et Chirurgie des Animaux de Compagnie</li>
                <li><i class="fa-solid fa-paw"></i> Laboratoire d'Analyses ( Biochimie, Hématologie, Cytologie, Immunologie ...)</li>
                <li><i class="fa-solid fa-paw"></i> Radiologie et Echographie Numérique</li>
                <li><i class="fa-solid fa-paw"></i> Oto-fibroscopie</li>
                <li><i class="fa-solid fa-paw"></i> Hospitalisation</li>
                <li><i class="fa-solid fa-paw"></i> Alimentation Physiologique et Diététique</li>
                <li><i class="fa-solid fa-paw"></i> Produits d'hygiène et de soins</li>
                <li><i class="fa-solid fa-paw"></i> Accessoires pour animaux</li>
            </ul>
        </section>
        <section class="douleur">
            <div class="cliniqueText">
                <h3>Gestion de la douleur</h3>
                <p>La gestion de la douleur, préventive ou curative, est une préoccupation permanente. Les antalgiques sont utilisés systématiquement : anti-inflammatoires stéroïdiens ou non stéroïdiens, et surtout antalgiques majeurs opiacés.</p>
            </div>
            <div class="cliniqueImg"><img src="./assets/img/clinique/gros-plan-veterinaire-prenant-soin-animal-compagnie.jpg" alt="Freepik gros plan vétérinaire prenant soin animal compagnie">                    <figcaption>Image de <a href="https://www.freepik.com/free-photo/close-up-veterinarian-taking-care-pet_21080885.htm#query=chien%20m%C3%A9dicament&position=3&from_view=search&track=ais">Freepik</a></figcaption>
</div>
        </section>
        <section class="hospitalisation">
            <div class="cliniqueText">
                <h3>Hospitalisation</h3>
                <p>Lors d'hospitalisation supérieure à une demi-journée, les propriétaires sont les bienvenus (et même souhaités!) dans la clinique pour rendre visite à leur animal; le chenil et sa courette de détente sont accessibles en dehors des heures de chirurgie, de soins ou d'entretien.
                </p>
            </div>
            <div class="cliniqueImg"><img src="./assets/img/clinique/hospitalisation" alt="chat hospitalisé"></div>
        </section>
        <section class="pharmacie">
            <div class="cliniqueText">
                <h3>Pharmacie</h3>
                <div>
                    <p>Nous fournissons les médicaments que nous prescrivons.</p>
                    <p>Attention : la loi nous interdit strictement de tenir une officine de pharmacie ouverte, c'est à dire que nous ne pouvons délivrer de médicaments à prescription sur ordonnances qu'aux seuls animaux que nous soignons personnellement. Nous n'avons donc pas le droit de vendre en dehors de nos consultations ces médicaments sauf si nous suivons personnellement les animaux malades, même sur présentation d'une ordonnance d'un confrère.</p>
                    <p>Les médicaments à prescription sans ordonnance et tous les autres produits vétérinaires (aliments, jouets...) sont à votre disposition à l'accueil.</p>
                </div>
            </div>
            <div class="cliniqueImg"><img src="./assets/img/clinique/pills-stethoscope-syringe.jpg" alt="Freepik pills-sthethoscope-syringe"><figcaption>Image de<a href="https://www.freepik.com/free-photo/cute-persian-cat-with-recovery-cone-after-surgery-veterinarian-woman-man-vet-putting-bandage-sick-fluffy-pet-animal-clinic_27999756.htm#query=chat%20v%C3%A9t%C3%A9rinaire&position=2&from_view=search&track=ais"> tonodiaz sur Freepik</a> </figcaption></div>
        </section>
        <?php include_once 'structure/sideView.php' ?>
    </main>
    <?php include_once 'structure/footerView.php' ?>

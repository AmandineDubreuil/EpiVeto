<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiches Conseils - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/script.js" type="module" defer></script>

</head>

<body>

    <?php require_once '../structure/headerView.php' ?>

    <h1>Nos Fiches Conseils</h1>


    <main>


        <section class="conseils">

            <div class="cardAccueilConseil card">
                <div class="imgRonde"><img src="../assets/img/animaux/chienChoune.jpg" alt="chien"></div>
                <div>
                    <h3>Nos conseils pour les chiens</h3>
                    <ul>
                        <li><a href="liste.php?cat=Chiens&souscat=Alimentation"><i class="fa-solid fa-paw"></i> Alimentation</a></li>
                        <li><a href="liste.php?cat=Chiens&souscat=Santé"><i class="fa-solid fa-paw"></i> Santé</a></li>
                        <li><a href="liste.php?cat=Chiens&souscat=Reproduction"><i class="fa-solid fa-paw"></i> Reproduction</a></li>
                        <li><a href="liste.php?cat=Chiens&souscat=Éducation"><i class="fa-solid fa-paw"></i> Éducation</a></li>
                        <li><a href="liste.php?cat=Chiens&souscat=Infos"><i class="fa-solid fa-paw"></i> Infos Pratiques</a></li>
                    </ul>
                </div>
            </div>
            <div class="cardAccueilConseil card">
                <div class="imgRonde"><img src="../assets/img/animaux/chatChasse.jpg" alt="chat"></div>
                <div>
                    <h3>Nos conseils pour les chats</h3>
                    <ul>
                        <li><a href="liste.php?cat=Chats&souscat=Alimentation"><i class="fa-solid fa-paw"></i> Alimentation</a></li>
                        <li><a href="liste.php?cat=Chats&souscat=Santé"><i class="fa-solid fa-paw"></i> Santé</a></li>
                        <li><a href="liste.php?cat=Chats&souscat=Reproduction"><i class="fa-solid fa-paw"></i> Reproduction</a></li>
                        <li><a href="liste.php?cat=Chats&souscat=Éducation"><i class="fa-solid fa-paw"></i> Éducation</a></li>
                        <li><a href="liste.php?cat=Chats&souscat=Infos"><i class="fa-solid fa-paw"></i> Infos Pratiques</a></li>
                    </ul>
                </div>
            </div>
            <div class="cardAccueilConseil card">
                <div class="imgRonde"><img src="../assets/img/animaux/lapins.jpg" alt="chat"></div>
                <div>
                    <h3>Nos conseils pour les NAC</h3>
                    <ul>
                    <li><a href="liste.php?cat=NAC&souscat=Alimentation"><i class="fa-solid fa-paw"></i> Alimentation</a></li>
                        <li><a href="liste.php?cat=NAC&souscat=Santé"><i class="fa-solid fa-paw"></i> Santé</a></li>
                        <li><a href="liste.php?cat=NAC&souscat=Reproduction"><i class="fa-solid fa-paw"></i> Reproduction</a></li>
                        <li><a href="liste.php?cat=NAC&souscat=Éducation"><i class="fa-solid fa-paw"></i> Éducation</a></li>
                        <li><a href="liste.php?cat=NAC&souscat=Infos"><i class="fa-solid fa-paw"></i> Infos Pratiques</a></li>
                    </ul>
                </div>
            </div>
            <div class="cardAccueilConseil card">
                <div class="imgRonde"><img src="../assets/img/personne-tenant-ampoule-capuchon-graduation.jpg" alt="chat">
            <figcaption>Image de <a href="https://fr.freepik.com/photos-gratuite/personne-tenant-ampoule-capuchon-graduation_10752872.htm#query=pratique&position=4&from_view=search&track=sph">Freepik</a></figcaption></div>
                <div>
                    <h3>Nos conseils divers</h3>
                    <ul>
                        <li><a href="liste.php?cat=Divers&souscat=Lexique"><i class="fa-solid fa-paw"></i> Lexique</a></li>
                        <li><a href="liste.php?cat=Divers&souscat=Infos"><i class="fa-solid fa-paw"></i> Infos Pratiques</a></li>
                    </ul>
                </div>
            </div>



        </section>



        <?php include_once '../structure/sideView.php' ?>


    </main>
    <?php include_once '../structure/footerView.php' ?>
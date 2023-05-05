<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Honoraires - Épi-Véto La Chaussée d'Ivry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" type="module" defer></script>

</head>

<body>

    <?php require_once './structure/headerView.php' ?>

    <h1>Barème d'honoraires</h1>


    <main>
        <section id="honoraires">
            <?php
            if (count(getHonoraires()) != 0) : ?>
                <p>Prix TTC, mis à jour en  <?= getHonoraireMaxModified()?> :</p>
                <table class="adminTable">
                    <thead>
                        <tr>
                            <th>Acte</th>
                            <th>Prix</th>
                        

                        </tr>
                    </thead>
                    <tbody>

                        <?php //dd(getArticleLimit($limit, $offset)) 
                        ?>
                        <?php foreach (getHonoraires() as $key => $value) : ?>
                            <tr>
                                <td><?= $value['acte'] ?></td>
                                <td><?= $value['prix'] ?> €</td>
                             
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <p>Aucun acte !</p>
            <?php endif; ?>
            <p>La clinique vétérinaire n'accèpte pas les chèques.</p>
        </section>

        <?php include_once 'structure/sideView.php' ?>


    </main>
    <?php include_once 'structure/footerView.php' ?>
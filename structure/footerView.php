
<footer>
        <p>2023 - Épi-Véto Clinique vétérinaire la Chaussée d’Ivry</p>
        <div class="legal">
            <p><a href="#">Mentions légales</a> - <a href="">Politique de confidentialité</a></p>
        </div>
        <p>
            <?php if (isConnected()) : ?>
                <?php if (isAdminConnected()) : ?>
                    <a href="<?= getUrl('adminEpiVeto/index.php'); ?>" role="button">Page Administrateur</a>
                <?php endif ?>
                <a href="<?= getUrl('login/deconnexion.php'); ?>">Se déconnecter</a>
            <?php else : ?>
                <a class="logAdmin" href="<?= getUrl('login/index.php'); ?>">Administration du site</a>
            <?php endif ?>
        </p>
    </footer>

</body>

</html>
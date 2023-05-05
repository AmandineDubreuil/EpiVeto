<article class="side">
<?php if (isConnected()) : ?>
            <p class="bienvenue">Bienvenue, <?= $_SESSION['civilite'] ?> <?= $_SESSION['nom'] ?></p>
        <?php endif  ?>

    <div class="trouver">
        <h2>Nous trouver</h2>
        <p class="gras">ÉPI-VETO clinique vétérinaire La Chaussée d'Ivry</p>
        <p>L'Épine de Nantilly</p>
        <p>681 rue de Paçy</p>
        <p>28260 La Chaussée d'Ivry</p>
        <div class="carte"><iframe width="275" height="227" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=1.4748287200927734%2C48.886934993008765%2C1.485879421234131%2C48.89068796034814&amp;layer=mapnik&amp;marker=48.8888114986354%2C1.4803540706634521" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=48.88881&amp;mlon=1.48035#map=17/48.88881/1.48035&amp;layers=N">Afficher une carte plus grande</a></small></div>
    </div>
    <div class="contact">
        <h2>Nous contacter</h2>
        <p>Tél. : 02 37 38 28 33</p>
        <a href="#" class="btnRouge" id="sendMessage"><i class="fa-regular fa-paper-plane"></i> message</a>
    </div>
    <div class="horaires">
        <h2>Nos horaires</h2>
        <p>Du lundi au vendredi :</p>
        <p>08h00-12h00, 14h00-19h00</p>
        <p>Uniquement sur rendez-vous</p>
    </div>
    <div class="reassurance">
        <div class="reassuranceItem">
            <div class="reassuranceImg"><img src="./assets/img/Image.jpg" alt=""></div>
            <p>Chiens - Chats - NAC</p>
        </div>
        <div class="reassuranceItem">
            <div class="reassuranceImg"><img src="./assets/img/animaux/veterinaire-prenant-soin-chien-compagnie.jpg" alt="main dans patte"></div>
            <p>Conseils</p>
        </div>
        <div class="reassuranceItem">
            <div class="reassuranceImg"><img src="./assets/img/animaux/chien-pekinois-stethoscope-isole.jpg" alt="chien stéthoscope"></div>
            <p>Qualité des soins</p>
        </div>
    </div>
</article>
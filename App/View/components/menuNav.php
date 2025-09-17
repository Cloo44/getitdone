<header class="menuNav">
    <a href="<?= BASE_URL ?>/"><img src="./public/images/LOGO/LOGO_jaune.png" alt="Logo de Get it done"/></a>

    <h3>Nom</h3>
    <img src="./public/images/images_wireframe/user-account_12192257.png" alt="Icône utilisateur"/>

    <?php if (isset($_SESSION["connected"])) :?>
        <a href="<?= BASE_URL ?>/user/deconnexion">Se déco</a>
    <?php endif ?>

</header>
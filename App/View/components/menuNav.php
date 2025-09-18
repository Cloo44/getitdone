<header class="menuNav">
    <a href="<?= BASE_URL ?>/"><img src="./public/images/LOGO/LOGO_jaune.png" alt="Logo de Get it done"/></a>
    <?php if (isset($_SESSION["connected"])) :?>
    <h3><?= $_SESSION["firstname"] ?></h3>
    <a href="<?= BASE_URL ?>/user/profil"><img src="./public/images/images_wireframe/user-account_12192257.png" alt="Icône utilisateur"/></a>
    <?php endif ?>

</header>
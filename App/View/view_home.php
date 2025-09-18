<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link href="./public/style/style.css" rel="stylesheet">
    </head>

    <body>

    <?php include 'App/View/components/menuNav.php' ?>

        <main>
            <?php if (!isset($_SESSION["connected"])) :?>
            <a href="<?= BASE_URL ?>/user/register">S'inscrire</a>
            <a href="<?= BASE_URL ?>/user/connexion">Se connecter</a>
            <?php elseif (isset($_SESSION["connected"])) :?>
            <a href="<?= BASE_URL ?>/user/deconnexion">Se déconnecter</a>
            <?php endif ?>
        </main>
        
        <?php include 'App/View/components/navbar.php' ?>

        <script src="./public/script/main.js"></script>
    </body>

</html>
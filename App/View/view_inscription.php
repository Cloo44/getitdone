<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Inscription</title>
        <link href="../public/style/style.css" rel="stylesheet">
    </head>

    <body>

    <?php include 'App/View/components/menuNav.php' ?>

        <main>
            <form action="" method="post">
                <input type="text" name="lastname" id="lname" placeholder="Nom">
                <input type="text" name="firstname" id="fname" placeholder="Prénom">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
                <input type="submit" value="S'inscrire" name="submit">
            </form>

            <div>
                <?= $message ?>  
            </div>
            
        </main>
        
        <?php include 'App/View/components/navbar.php' ?>

        <script src="../public/script/main.js"></script>
    </body>

</html>
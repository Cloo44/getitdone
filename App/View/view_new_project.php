<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Nouveau projet</title>
        <link href="./public/style/style.css" rel="stylesheet">
    </head>

    <body>

    <?php include 'App/View/components/menuNav.php' ?>

        <main>
            <form class="taches__case" method="post">
                    <label for="nomTask">Nom du projet</label>
                    <input name="title" id="nomTask" type="text" required></input>

                    <label for="dateTask" id="labelDate">Membre invité</label>
                    <input name="member" type="email" name="email" id="member"></input>

                    <input name="submit" type="submit" id="newTaskCreation" value="Créer"></input>
            </form>
            
        </main>
        
        <?php include 'App/View/components/navbar.php' ?>

        <script src="./public/script/main.js"></script>
    </body>

</html>
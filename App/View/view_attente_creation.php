<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page 3bis case Liste d'attente</title>
        <link href="./public/style/style.css" rel="stylesheet">
    </head>

    <body>

        <?php include 'App/View/components/menuNav.php' ?>

        <main>
            <section class="taches">

                <div>
                    <a href="<?= BASE_URL ?>/task/attente"><img src="../../public/images/icones/btnRetour.svg" alt="Retour à la page précédente" class="btnRetour"/></a>

                    <h2 class="taches__titre" id="titreAttente">Nouvelle tâche</h2>
                </div>
                           
                <form class="taches__case" class="formPonctuel" id="caseAttenteCreation" method="post">
                        <label for="nomTask">Nom de la tâche</label>
                        <input id="nomTask" type="text" name="nomTask" required></input>
                        <label for="dateTask">Date</label>
                        <input type="date" id="dateTask" name="dateTask"></input>
                        <input type="submit" id="newTaskCreation" value="Créer" name="newTaskBtn"></input>
                </form>
            </section>

            
        </main>
        
        <?php include 'App/View/components/navbar.php' ?>

        <script src="./public/script/main.js"></script>
    </body>

</html>
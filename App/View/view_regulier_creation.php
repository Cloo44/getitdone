<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page 5bis case Tâches Regulières</title>
        <link href="../public/style/style.css" rel="stylesheet">
    </head>

    <body>

    <?php include 'App/View/components/menuNav.php' ?>

        <main>
            <section class="taches">

                <div>
                    <a href="<?= BASE_URL ?>/task/regulier"><img src="../../public/images/icones/btnRetour.svg" alt="Retour à la page précédente" class="btnRetour"/></a>

                    <h2 class="taches__titre" id="titreRegulier">Nouvelle tâche</h2>
                </div>
                           
                <form class="taches__case" id="caseRegulierCreation">
                        <label for="nomTask">Nom de la tâche</label>
                        <input id="nomTask" type="text" required></input>
                        <label for="frequencyTask" id="labelFrequency">Fréquence</label>
                        <select id="frequencyTask" name="frequency">
                                <option value="">Choisissez une fréquence</option>
                                <option value="1">Tous les jours</option>
                                <option value="2">Toutes les semaines</option>
                            </optgroup>                           
                        </select>
                        <input type="submit" id="newTaskCreation" value="Créer"></input>
                </form>
            </section>

            
        </main>
        
        <?php include 'App/View/components/navbar.php' ?>  

        <script src="../public/script/main.js"></script>
    </body>

</html>
<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page 3bis case Liste d'attente</title>
        <link href="../../public/style/style.css" rel="stylesheet">
    </head>

    <body>

        <?php include './components/menuNav.php' ?>

        <main>
            <section class="taches">

                <div>
                    <a href="viewMatrice.php"><img src="../../public/images/icones/btnRetour.svg" alt="Retour à la page précédente" class="btnRetour"/></a>

                    <h2 class="taches__titre" id="titreNeutre">Nouvelle tâche</h2>
                </div>
                           
                <form class="taches__case" id="caseNeutreCreation" method="post">
                        <label for="niveauPriorite">Niveau de priorité</label>
                        <select id="niveauPriorite" required>
                            <option value="" class="optNivPrio">Choisissez un niveau de priorité</option>
                            <option value="1" class="optNivPrio">Priorités</option>
                            <option value="2" class="optNivPrio">À planifier</option>
                            <option value="3" class="optNivPrio">Liste d'attente</option>
                            <option value="4" class="optNivPrio">Tâches régulières</option>
                        </select>

                        <label for="nomTask">Nom de la tâche</label>
                        <input id="nomTask" type="text" required></input>

                        <label for="dateTask" id="labelDate">Date</label>
                        <input type="date" name="date" value="" id="dateTask"></input>

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
        
        <?php include './components/navbar.php' ?> 

        <script src="../../public/script/main.js"></script>
    </body>

</html>
<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page 1 Matrice de tâches</title>
        <link href="../../public/style/style.css" rel="stylesheet">
    </head>

    <body>

    <?php include './components/menuNav.php' ?>

        <main>
            <select name="creneau" id="select_creneau">
                <option value="opt1">Aujourd'hui</option>
                <option value="opt2">Cette semaine</option>
                <option value="opt3">Ce mois-ci</option>
            </select>

            
            
            <div class="matrice">
                <input type="button" id="newTask" value="+"></input>
                
                <div class="matrice__priorites">
                    <a href ="view_priorites.php"><h2>Priorités</h2></a>
                    <ul id="ulPrio"></ul>
                </div>
                <div class="matrice__planifier">
                    <a href="view_planifier.php"><h2>A planifier</h2></a>
                    <ul id="ulPlan"></ul>
                </div>
                <div class="matrice__attente">
                    <a href="view_attente.php"><h2>Liste d'attente</h2></a>
                    <ul id="ulAtt"></ul>
                </div>
                <div class="matrice__regulier">
                    <a href="view_regulier.php"><h2>Tâches régulières</h2></a>
                    <ul id="ulRegu"></ul>
                </div>
            </div>

            <form class="taches__case" class="form-layout masquer" id="caseNeutreCreation" method="post">
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
                    </select>

                    <input type="submit" id="newTaskCreation" value="Créer"></input>
            </form>
            
        </main>
        
        <?php include './components/navbar.php' ?>

        <script src="../../public/script/main.js"></script>
    </body>

</html>
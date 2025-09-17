<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page 3 case À planifier</title>
        <link href="../../public/style/style.css" rel="stylesheet">
    </head>

    <body>

        <?php include './components/menuNav.php' ?>

        <main>
            <section class="taches">

                <div>
                    <a href="viewMatrice.php"><img src="../../public/images/icones/btnRetour.svg" alt="Retour à la page précédente" class="btnRetour"/></a>

                    <h2 class="taches__titre" id="titrePlanifier">À planifier</h2>
                </div>
                           
                <div class="taches__case" id="casePlanifier">
                    <ul>
                        <li><input type="checkbox">envoyer un mail</input></li>
                        <li><input type="checkbox">créer fonctionnalité pour implémentation des tâches</input></li>
                    </ul>
                    <a href="./view_planifier_creation.php"><input type="button" id="newTask"></input></a>
                    
                </div>
            </section>

            
        </main>
        
        <?php include './components/navbar.php' ?>  

        <script src="../../public/script/main.js"></script>
    </body>

</html>
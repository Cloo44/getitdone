<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page 2 case Priorités</title>
        <link href="../public/style/style.css" rel="stylesheet">
    </head>

    <body>

        <?php include 'App/View/components/menuNav.php' ?>

        <main>
            <section class="taches">

                <div>
                    <a href="viewMatrice.php"><img src="../../public/images/icones/btnRetour.svg" alt="Retour à la page précédente" class="btnRetour"/></a>

                    <h2 class="taches__titre" id="titrePriorites">Priorités</h2>
                </div>
                           
                <div class="taches__case" id="casePriorites">
                    <ul>
                        <li><input type="checkbox">envoyer un mail</input></li>
                        <li><input type="checkbox">créer fonctionnalité pour implémentation des tâches</input></li>
                    </ul>
                    <a href="./view_priorites_creation.php"><input type="button" id="newTask"></input></a>                    
                </div>
            </section>

            
        </main>
        
        <?php include 'App/View/components/navbar.php' ?>

        <script src="../public/script/main.js"></script>
    </body>

</html>
<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>Page 5 case Tâches régulières</title>
        <link href="../public/style/style.css" rel="stylesheet">
    </head>

    <body>

        <?php include 'App/View/components/menuNav.php' ?>

        <main>
            <section class="taches">

                <div>
                    <a href="<?= BASE_URL ?>/task"><img src="../../public/images/icones/btnRetour.svg" alt="Retour à la page précédente" class="btnRetour"/></a>

                    <h2 class="taches__titre" id="titreRegulier">Tâches régulières</h2>
                </div>
                           
                <div class="taches__case" id="caseRegulier">
                    <ul>
                        <li><input type="checkbox">envoyer un mail</input></li>
                        <li><input type="checkbox">créer fonctionnalité pour implémentation des tâches</input></li>
                    </ul>
                    <a href="<?= BASE_URL ?>/task/regulier/add"><input type="button" id="newTask"></input></a>                    
                </div>
            </section>

            
        </main>
        
        <?php include 'App/View/components/navbar.php' ?>  

        <script src="../public/script/main.js"></script>
    </body>

</html>
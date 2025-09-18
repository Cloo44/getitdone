<?php

//importer les ressources
include './env.php';

include './vendor/autoload.php';

//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test si l'url posséde une route sinon on renvoi à la racine
$path = $url['path'] ??  '/';

session_start();

// Import des classes Controller
use App\Controller\UserController;
use App\Controller\HomeController;
use App\Controller\TaskController;

// Instanciation des classes Controller
$userController = new UserController();
$homeController = new HomeController();
$taskController = new TaskController();


if (!isset($_SESSION['connected'])) {
    //Test des routes version deconnecté
    switch (substr($path, strlen(BASE_URL))) {
        case '/':
            $homeController->home();
            exit;
        case '/user/connexion':
            $userController->connectUser();
            exit;
        case '/user/register':
            $userController->addUser();
            exit;
        default:
            echo 'ERROR 404 NOT FOUND';
            exit;
    }
} elseif (isset ($_SESSION['connected'])) {
    //Test des routes version connecté
    switch (substr($path, strlen(BASE_URL))) {
        case '/':
            $homeController->home();
            exit;
        case '/user/deconnexion':
                $userController->deconnect();
                exit;
        case '/task':
            $taskController->taskChart();
            exit;
        case '/task/attente':
            header('App/View/view_attente.php');
            exit;
        case '/task/attente/add':
            header('App/View/view_attente_creation.php');
            exit;
        case '/task/planifier':
            header ('App/View/view_planifier.php');
            exit;
        case '/task/planifier/add':
            header ('App/View/view_planifier_creation.php');
            exit;
        case '/task/priorites':
            header ('App/View/view_priorites.php');
            exit;
        case '/task/priorites/add':
            header ('App/View/view_priorites_creation.php');
            exit;
        case '/task/regulier':
            header ('App/View/view_regulier.php');
            exit;
        case '/task/regulier/add':
            header ('App/View/view_regulier_creation.php');
            exit;
        case '/event':
            header ('App/View/view_calendrier.php');
            exit;
        case '/timer':
            header ('App/View/view_timer.php');
            exit;
        // case '/category/all':
        //     $categoryController->showAllCategory();
        //     exit;
        // case '/user/deconnexion':
        //     $userController->deconnexion();
        //     exit;
        // case '/category/delete':
        //     $categoryController->removeCategory();
        //     exit;
        // case '/category/update':
        //     $categoryController->modifyCategory();
        //     exit;
        // case '/category/add':
        //     $categoryController->addCategory();
        //     exit;
        // case '/task/add':
        //     $taskController->addTask();
        //     exit;
        // case '/task/all':
        //     $taskController->showAllTask();
        //     exit;
        // case '/task/update':
        //     $taskController->modifyTask();
        //     exit;
        // case '/task/validate':
        //     $taskController->terminateTask();
        //     exit;
        default:
            echo 'ERROR 404 NOT FOUND';
            exit;
    }
}
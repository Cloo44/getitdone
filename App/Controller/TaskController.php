<?php

namespace App\Controller;

use App\Model\Task;
use App\Model\User;
use App\Model\Project;
use App\Utils\Utilitaire;


class TaskController {
    public function taskChart()
    {
        $name = $_GET["name"] ?? "";
        include "App/View/viewMatrice.php";
    }
}
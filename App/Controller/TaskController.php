<?php

namespace App\Controller;

use App\Model\Task;
use App\Model\User;
use App\Model\Project;
use App\Utils\Utilitaire;


class TaskController {
    private Task $task;
    
    public function __construct() {
        $this->task = new Task();
    }

    public function taskChart()
    {
        $name = $_GET["name"] ?? "";
        include "App/View/viewMatrice.php";
    }
}
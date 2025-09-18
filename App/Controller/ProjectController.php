<?php

namespace App\Controller;

use App\Model\Project;
use App\Model\User;
use App\Utils\Utilitaire;


class ProjectController {
    private Project $project;

    public function __construct() {
        $this->project = new Project();
    }

    public function formProject() {
        //accéder au formulaire
        $name = $_GET["name"] ?? "";
        include "App/View/view_new_project.php";
    }

    public function addProject() {
        //logique formulaire
        if (isset ($_POST["submit"])) {
            if (!empty($_POST["title"]) && !empty($_POST["member"])) {
                //sanitize
                $member = Utilitaire::sanitize($_POST["member"]);
                $title = Utilitaire::sanitize($_POST["title"]);
                $project = new Project();
                $member = new User();
                if ($this->project->isUserByEmailExist()) {
                    $title = Utilitaire::sanitize($_POST["title"]);
                    $newMember = $this->project->findUserByEmail();
                    saveProject();
                    echo "Projet créé";
                    header('Refresh: 2; url=App/View/viewMatriceProject.php');
                }
                }
            }
        
        include "App/View/viewMatriceProject.php";
    }
}
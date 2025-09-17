<?php

namespace App\Controller;

use App\Model\User;
use App\Utils\Utilitaire;

class UserController {
    private User $user;

    public function __construct() {
        $this->user = new User();
    }

    public function addUser() {
        $message = "";
        if (isset ($_POST["submit"])) {
            if (!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["mdp"])) {
                $email = Utilitaire::sanitize($_POST["email"]);
                $this->user->setEmail($email);

                if (!$this->user->isUserByEmailExist()) {
                    $firstname = Utilitaire::sanitize($_POST["firstname"]);
                    $lastname = Utilitaire::sanitize($_POST["lastname"]);
                    $mdp = Utilitaire::sanitize($_POST["mdp"]);

                    $this->user->setFirstname($firstname);
                    $this->user->setLastname($lastname);
                    $this->user->setMdp($mdp);
                    $this->user->hashPassword();

                    $this->user->saveUser();

                    $message = "Votre compte a bien été créé, " . $this->user->getFirstname() . " !";
                } else {
                    $message = "Ce compte existe déjà. Veuillez vous connecter.";
                }            
            } else {
                $message = "Merci de remplir tous les champs.";
            }
        }
        include 'App/View/view_inscription.php';
    }

    public function connectUser() {
        $message = "Veuillez entrer vos informations de connexion.";
        if (isset ($_POST["submit"])) {
            if (!empty($_POST["email"]) && !empty($_POST["mdp"])) {
                $email = Utilitaire::sanitize($_POST["email"]);
                $mdp = Utilitaire::sanitize($_POST["mdp"]);
                $this->user->setEmail($email);
                $this->user->setMdp($mdp);
                if ($this->user->isUserByEmailExist()) {
                    $userConnected = $this->user->findUserByEmail();
                    if ($this->user->passwordVerify($userConnected->getMdp())) {
                        $_SESSION["connected"] = true;
                        $_SESSION["email"] = $email;
                        $_SESSION["id"] = $userConnected->getIdUser();
                        header('Location: /getitdone/App/View/viewMatrice.php');
                        // $message = "vous êtes connecté";
                    }
                }
            }
        }
        include 'App/View/view_connexion.php';
    }

    public function deconnect() {
        session_destroy();
        header('Location: /getitdone');
    }
}
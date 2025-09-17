<?php

namespace App\Model;

use App\Utils\Bdd;

class User {
    private int $idUser;
    private string $lastname;
    private string $firstname;
    private string $email;
    private string $mdp;

    private \PDO $connexion;

    public function __construct() {
        $this->connexion = (new Bdd())->connectBDD();
    }

    public function getIdUser() : int {
        return $this->idUser;
    }

    public function setIdUser(int $id) : void {
        $this->idUser = $id;
    }

    public function getFirstname() : string {
        return $this->firstname;
    }

    public function setFirstname(string $firstname) : void {
        $this->firstname = $firstname;
    }

    public function getLastname() : string {
        return $this->lastname;
    }

    public function setLastname(string $lastname) : void {
        $this->lastname = $lastname;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setEmail(string $email) : void {
        $this->email = $email;
    }

    public function getMdp() : string {
        return $this->mdp;
    }

    public function setMdp(string $mdp) : void {
        $this->mdp = $mdp;
    }

    public function hashPassword() : void 
    {
        $this->mdp = password_hash($this->mdp, PASSWORD_DEFAULT);
    }

    public function passwordVerify(string $hash) : bool 
    {
        return password_verify($this->mdp, $hash);
    }

    public function saveUser() : User {
        try {
            //Récupération des données de l'utilisateur
            $firstname = $this->firstname;
            $lastname = $this->lastname;
            $email = $this->email;
            $mdp = $this->mdp;
            $request = "INSERT INTO user(firstname, lastname, email, mdp) VALUE (?,?,?,?)";

            //prépararation de la requête
            $req = $this->connexion->prepare($request);
            //bind param
            $req->bindParam(1, $firstname, \PDO::PARAM_STR);
            $req->bindParam(2, $lastname, \PDO::PARAM_STR);
            $req->bindParam(3, $email, \PDO::PARAM_STR);
            $req->bindParam(4, $mdp, \PDO::PARAM_STR);
            //éxécution de la requête
            $req->execute();
            //récupération de l'id
            $id = $this->connexion->lastInsertId('user');
            //set id et retourner l'utilisateur
            $this->idUser = $id;
            //Retourne l'Objet User
            return $this;
        } catch(\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Méthode qui vérifie si un compte existe en BDD
     * @return bool true si existe / false si n'existe pas
     */
    public function isUserByEmailExist(): bool
    {
        try {
            $email = $this->email;

            $request = "SELECT u.id FROM user AS u WHERE u.email = ?";

            $req = $this->connexion->prepare($request);
            $req->bindParam(1, $email, \PDO::PARAM_STR);
            $req->execute();

            $data = $req->fetch(\PDO::FETCH_ASSOC);

            if (empty($data)) {
                return false;
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Méthode qui retourne un objet User ou null
     * @return User retourne on objet User depuis l'email assigné à l'objet
     */
    public function findUserByEmail(): User
    {
        try {
            $email = $this->email;

            $request = "SELECT u.id AS idUser, u.firstname, u.lastname, u.mdp, u.email FROM user AS u WHERE u.email = ?";

            $req = $this->connexion->prepare($request);
            $req->bindParam(1, $email, \PDO::PARAM_STR);
            $req->execute();
            
            $req->setFetchMode(\PDO::FETCH_CLASS, User::class);

            return $req->fetch();
            
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function updatePassword() {
        try {
            $newMdp = $this->mdp;
            $email = $this->email;
            $request = "UPDATE user SET mdp = ? WHERE email = ?";
            $req = $this->connexion->prepare($request);
            $req->bindParam(1,$newMdp,\PDO::PARAM_STR);
            $req->bindParam(2,$email,\PDO::PARAM_STR);
            $req->execute();
        }
        catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
}
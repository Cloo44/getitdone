<?php

namespace App\Model;

use App\Utils\Bdd;
use App\Model\User;

class Project {
    private int $idProject;
    private string $title;
    private ?\DateTimeImmutable $createdAt;
    private ?string $imgProfile;
    private User $lead;
    private User $member;

    private \PDO $connexion;

    public function __construct() {
        $this->connexion = (new Bdd())->connectBDD();
    }

    public function getIdProject(): int {
        return $this->idProject;
    }

    public function setIdProject(int $idProject) {
        $this->idProject = $idProject;
        return $this;
    }
    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;
        return $this;
    }
    public function getLead(): User {
        return $this->lead;
    }

    public function setLead(User $lead) {
        $this->lead = $lead;
        return $this;
    }
    public function getMember(): User {
        return $this->member;
    }

    public function setMember(User $member) {
        $this->member = $member;
        return $this;
    }

    public function saveProject() {
        $title = $this->title;
        $lead = $this->lead;
        $member = $this->member;

        $request = "INSERT INTO project (title, id_lead, id_member) VALUE(?,?,?)";

        $req = $this->connexion->prepare($request);
        $req->bindParam(1, $title, \PDO::PARAM_STR);
        $req->bindParam(2, $lead, \PDO::PARAM_INT);
        $req->bindParam(3, $member, \PDO::PARAM_INT);
        $req->execute();
        $id = $this->connexion->lastInsertId('project');

        $this->idProject = $id;

        return $this;
    }
}
<?php

namespace App\Model;

use App\Utils\Bdd;
use App\Model\User;

class Project {
    private int $idProject;
    private string $title;
    private \DateTimeImmutable $createdAt;
    private ?string $imgProfile;
    private User $lead;
    private ?array $members;

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
    public function getmembers(): array {
        return $this->members;
    }

    public function setmembers(array $members) {
        $this->members = $members;
        return $this;
    }
}
<?php

namespace App\Model;

use App\Utils\Bdd;

class Task {
    private int $idTask;
    private int $level;
    private string $title;
    private ?\DateTimeImmutable $date;
    private ?int $frequency;
    private bool $isDone;
    private Project $project;
    private User $assignedTo;

    private \PDO $connexion;

    public function __construct()
    {
        $this->connexion = (new Bdd())->connectBdd();
    }

    public function getIdTask(): int
    {
        return $this->idTask;
    }

    public function setIdTask(int $id): self
    {
        $this->idTask = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(\DateTimeImmutable $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getFrequency(): int
    {
        return $this->frequency;
    }

    public function setFrequency(int $frequency): self
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    public function setIsDone(bool $isDone): self
    {
        $this->isDone = $isDone;
        return $this;
    }

    public function getproject(): Project
    {
        return $this->project;
    }

    public function setProject(Project $project): self
    {
        $this->project = $project;
        return $this;
    }
    public function getassignedTo(): User
    {
        return $this->assignedTo;
    }

    public function setidAssignedTo(User $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }
}
CREATE DATABASE IF NOT EXISTS getitdone;
USE getitdone;

CREATE TABLE IF NOT EXISTS user (
	id INT AUTO_INCREMENT PRIMARY KEY,
    lastname VARCHAR(50) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mdp VARCHAR (100) NOT NULL
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS role (
	id INT AUTO_INCREMENT PRIMARY KEY,
    role ENUM ("admin", "user", "lead", "member") NOT NULL   
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS user_role (
	id_user INT NOT NULL,
    id_role INT NOT NULL,
    PRIMARY KEY (id_user, id_role),
    CONSTRAINT fk_user_role_user FOREIGN KEY (id_user) REFERENCES user(id) ON DELETE CASCADE,
    CONSTRAINT fk_user_role_role FOREIGN KEY (id_role) REFERENCES role(id) ON DELETE CASCADE
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS project (
	id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    created_at DATE NOT NULL,
    img_profile VARCHAR(255),
    id_lead INT NOT NULL,
    CONSTRAINT fk_project_user_lead FOREIGN KEY (id_lead) REFERENCES user(id) ON DELETE CASCADE
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS task (
	id INT AUTO_INCREMENT PRIMARY KEY,
    level ENUM ("priorites", "planifier", "attente", "regulier") NOT NULL,
    title VARCHAR(255) NOT NULL,
    `date` DATETIME,
    frequency ENUM ("quotidien", "hebdomadaire", "mensuel"),
    is_done BOOL NOT NULL,
    id_project INT NOT NULL,
    id_assigned_to INT,
    CONSTRAINT fk_task_project_project FOREIGN KEY (id_project) REFERENCES project(id) ON DELETE CASCADE,
    CONSTRAINT fk_task_user_assigned_to FOREIGN KEY (id_assigned_to) REFERENCES user(id)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS event (
	id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    `date` DATETIME NOT NULL
)ENGINE=innoDB;
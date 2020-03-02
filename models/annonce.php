<?php

class announces
{

    public $id = 0;
    public $memberId = 0;
    public $title = '';
    public $descriptive = '';
    public $brand = '';
    public $model = '';
    private $database = null;

    public function __construct()
    {

        /* $database = instance de l'objet PDO
    * try/catch permet de lever l'exception (erreur critique) et d'exécuter le code malgré l'erreur
    *
    */
        try {
            $this->database = new PDO('mysql:host=localhost;dbname=valestim;charset=utf8', 'root', '04107956352922X+');
            /*
    * si une erreur est détectée, on la traite et on affiche un message d'erreur à l'utilisateur
    * $e est une variable dans laquelle on stocke l'erreur
    */
        } catch (Exception $e) {
            die('Impossible d\'accéder à la base de données.'
                . $e->getTraceAsString());
        }
    }

    public function checkIfAnnounceExistsById()
    {
        $queryCheckIfAnnounceExistsById = 'SELECT COUNT(`id`) AS `announceExistsById` '
            . 'FROM `announces` '
            . 'WHERE `id`=:id ';
        $statement = $this->database->prepare($queryCheckIfAnnounceExistsById);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }

    public function addAnnounce()
    {
        $queryAddAnnounce = 'INSERT INTO `announces` (`title`, `descriptive`, `idMember`) '
            . 'VALUES (:title, :descriptive, :idMember) ';
        $statement = $this->database->prepare($queryAddAnnounce);
        //$variable->bindValue('identifiant du paramètre', la valeur à associer au paramètre, type de données)
        $statement->bindValue(':title', $this->title, PDO::PARAM_STR);
        $statement->bindValue(':descriptive', $this->descriptive, PDO::PARAM_STR);
        $statement->bindValue(':idMember', $this->idMember, PDO::PARAM_INT);

        return $statement->execute();
    }

    public function getAnnouncesList() {
        $queryGetAnnouncesList = 'SELECT `idMember`, `memberName`, `title`, `descriptive` '
            . 'FROM `announces` '
            . 'INNER JOIN `members` '
            . 'ON `members`.`id` = `announces`.`idMember`';
            $statement = $this->database->query($queryGetAnnouncesList);

            return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAnnounceById() {
        $queryGetAnnounceById = 'SELECT `idMember`, `memberName`, `title`, `descriptive` '
        . 'FROM `announces`'
        . 'INNER JOIN `members` '
        . 'ON `announces`.`idMember` = `members`.`id` '
        . 'WHERE `announces`.`id` = :id ';
        $statement = $this->database->query($queryGetAnnounceById);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    public function updateAnnounce()
    {
        $queryUpdateAnnounce = 'UPDATE `announces` '
            . 'SET `title`=:title, `descriptive`=:descriptive '
            . 'WHERE `id`=:id ';
        $statement = $this->database->prepare($queryUpdateAnnounce);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->bindValue(':title', $this->title, PDO::PARAM_STR);
        $statement->bindValue(':descriptive', $this->descriptive, PDO::PARAM_STR);
        //$statement->bindValue(':goodHour', $this->goodHour, PDO::PARAM_STR);
        //$statement->bindValue(':goodDate', $this->goodDate, PDO::PARAM_STR);

        return $statement->execute();
    }
    public function getAnnouncesListByMember() {
        $queryGetAnnouncesListByMember = 'SELECT `idMember`,`announces`.`id` '
        .'FROM `announces` '
        .'INNER JOIN `members`'
        .'ON `members`.`id` = `announces`.`idMember` '
        . 'WHERE `members`.`id`=:id ';
        $statement = $this->database->prepare($queryGetAnnouncesListByMember);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->execute();
        $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteAnnounce() {
    $queryDeleteAnnounce = 'DELETE FROM `announces`'
    .'WHERE `id`=:id';
    $statement = $this->database->prepare($queryDeleteAnnounce);
    $statement->bindValue(':id', $this->id, PDO::PARAM_INT);

    return $statement->execute();
    }
}

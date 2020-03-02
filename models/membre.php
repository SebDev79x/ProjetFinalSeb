<?php
//fetch ou fetchAll = select (on récupère des infos)
//execute = insert, delete, update
class members {

    public $id = 0;
    public $mail = '';
    public $memberName = '';
    public $password = '';
    public $registerDate = '01-01-2020';
    public $about = '';
    private $database = null;

    public function __construct() {

        /* $database = instance de l'objet PDO
 * try / catch permet de lever l'exception (erreur critique) et d'exécuter le code malgré l'erreur
 *
 */
        try {
            $this->database = new PDO('mysql:host=localhost;dbname=valestim;charset=utf8', 'root', '04107956352922X+');
            /*
    * si une erreur est détectée, on la traite et on affiche un message d'erreur à l'utilisateur
    * $e est une varibale dans laquelle on stocke l'erreur
    */
        } catch (Exception $e) {
            die('Impossible d\'accéder à la base de données.'
                . $e->getTraceAsString());
        }
    }
    /**
     * Requête pour ajouter un membre
     */
    public function addMember()
    {
        $queryAddMember = 'INSERT INTO `members` (`mail`, `memberName`, `password`, `about`, DATE_FORMAT(`registerDate`, \'%d%m%Y\') AS `registerDate` '
            . 'VALUES (:mail, :memberName, :password, :about) ';
        $statement = $this->database->prepare($queryAddMember);
        //$variable->bindValue('identifiant du paramètre', la valeur à associer au paramètre, type de données)
        $statement->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $statement->bindValue(':memberName', $this->login, PDO::PARAM_STR);
        $statement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $statement->bindValue(':registerDate', $this->registerDate, PDO::PARAM_STR);
        $statement->bindValue(':about', $this->about, PDO::PARAM_STR);

        return $statement->execute();
    }
    /**
     * requête pour récupérer la liste des membres
     */
    public function getMembersList()
    {
        $queryGetMembersList = 'SELECT `id`, `mail`, `memberName`, `about`, `registerDate` '
            . 'FROM `members` ';
        $statement = $this->database->query($queryGetMembersList);

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    /**
     * requête pour récupérer le profil d'un membre
     */
    public function getMemberProfile()
    {
        $queryGetMemberProfile = 'SELECT `id`, `mail`, `memberName`, `about`, `registerDate` '
            . 'FROM `members` '
            . 'WHERE `id` = :id ';
        $statement = $this->database->prepare($queryGetMemberProfile);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    /**
     * requête pour savoir si un membre existe ou pas
     */
    public function checkIfAMemberExistsById()
    {
        $queryCheckIfAMemberExistsById = 'SELECT COUNT(`id`) AS `memberExistsById` '
            . 'FROM `members` '
            . 'WHERE `id` = :id ';
        $statement = $this->database->prepare($queryCheckIfAMemberExistsById);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    /**
     * requête pour que le membre puisse mettre à jour son profil
     */
    public function updateMemberProfile()
    {
        $queryUpdateMember = 'UPDATE `members` '
            . 'SET `memberName`=:memberName,`mail`=:mail, `password`=:password, `about`=:about '
            . 'WHERE `id`=:id ';
        $statement = $this->database->prepare($queryUpdateMember);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);
        $statement->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $statement->bindValue(':memberName', $this->login, PDO::PARAM_STR);
        $statement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $statement->bindValue(':about', $this->about, PDO::PARAM_STR);

        return $statement->execute();
    }
    /**
     * requête pour que le membre puisse supprimer son compte
     */
    public function deleteProfileMember() {
        $queryDeleteProfileMember = 'DELETE FROM `members` '
        .'WHERE `id`=:id ';
        $statement = $this->database->prepare($queryDeleteProfileMember);
        $statement->bindValue(':id', $this->id, PDO::PARAM_INT);

        return $statement->execute();
    }
    /**
     * requête
     */
}

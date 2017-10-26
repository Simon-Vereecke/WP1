<?php
class Contact_model extends CI_Model
{
    private $database = "WP1";
    private $user = "root";
    private $password = "root";

    public function __construct()
    {
        parent::__construct();
    }


    public function getAllContacts()
    {
        $pdo = $this->openConnection();
        $statement = null;
        if ($pdo != null) {
            $statement = $pdo->query("SELECT id, name, email FROM contact");
        }
        $pdo = null;
        return $statement != null ? $statement->fetchAll() : array();
    }

    public function find($contactId)
    {
        $pdo = $this->openConnection();
        $statement = null;
        if ($pdo != null) {
            $query = "SELECT id, name, email FROM contact WHERE id = :id";
            $statement = $pdo->prepare($query);
            $statement->bindParam(":id", $contactId, PDO::PARAM_INT);
            $statement->execute();
        }
        return $statement != null ? $statement->fetch() : array();
    }

    private function openConnection()
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=".$this->database, $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            print 'Exception!: ' . $e->getMessage();
            return null;
        }
    }

}
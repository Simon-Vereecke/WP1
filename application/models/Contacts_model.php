<?php
/**
 * Created by PhpStorm.
 * User: simowner
 * Date: 10/21/17
 * Time: 1:31 PM
 */

class contacts_model extends CI_Model
{
    private $repository;

    public function __construct()
    {
        $this->load->database();
//        $user='root';
//        $password='root';
//        $database='WP1';
//        $pdo=null;
//        try {
//            $pdo = new PDO("mysql:host=localhost;dbname=$database",
//                $user, $password);
//            $dao = new PDOContactDAO($pdo);
//            $this->repository = new ContactRepository($dao);
//        } catch (PDOException $e) {
//            print 'Exception!: ' . $e->getMessage();
//        }
//        $pdo = null;
    }

    public function getAllContacts()
    {
//        return $this->repository->findAll();
        $query = $this->db->get('contact');
        return $query->result_array();
    }

}
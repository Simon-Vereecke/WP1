<?php
/**
 * Created by PhpStorm.
 * User: simowner
 * Date: 10/21/17
 * Time: 12:22 PM
 */


class PDOContactDAO implements DAO
{
    private $connection;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function add($object)
    {
        // TODO: Implement add() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function update($object)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
}
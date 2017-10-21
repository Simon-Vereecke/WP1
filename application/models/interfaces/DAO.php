<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 10/21/17
 * Time: 12:17 PM
 */

interface DAO
{
    // CRUD
    public function add($object);
    public function get($id);
    public function update($object);
    public function delete($id);

    public function getAll();
}
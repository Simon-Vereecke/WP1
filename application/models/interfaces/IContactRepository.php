<?php
/**
 * Created by PhpStorm.
 * User: simowner
 * Date: 10/21/17
 * Time: 12:28 PM
 */


interface IContactRepository
{
    public function create($contact);
    public function findAll();
    public function update($contact);
}
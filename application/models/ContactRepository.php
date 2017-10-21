<?php
/**
 * Created by PhpStorm.
 * User: simowner
 * Date: 10/21/17
 * Time: 12:32 PM
 */


class ContactRepository implements IContactRepository
{
    private $contactDAO = null;

    public function __construct(PDOContactDAO $contactDAO)
    {
        $this->contactDAO = $contactDAO;
    }

    public function create($contact)
    {
        // TODO: Implement create() method.
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
        return new Contact(1, 'Test', 'test@mail.com');
    }

    public function update($contact)
    {
        // TODO: Implement update() method.
    }
}
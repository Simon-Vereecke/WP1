<?php
/**
 * Created by PhpStorm.
 * User: simowner
 * Date: 10/21/17
 * Time: 4:32 PM
 */

class Contacts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contacts_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['contacts'] = $this->contacts_model->getAllContacts();
        $data['title'] = 'Overview';

        $this->load->view('templates/header', $data);
        $this->load->view('contacts/index', $data);
        $this->load->view('templates/footer', $data);
    }

}
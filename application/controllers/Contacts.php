<?php
<<<<<<< HEAD
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
=======
//defined('BASEPATH') or exit('No direct script access allowed');

class Contacts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
>>>>>>> testing_routing
        $this->load->helper('url_helper');
    }

    public function index()
    {
<<<<<<< HEAD
        $data['contacts'] = $this->contacts_model->getAllContacts();
        $data['title'] = 'Overview';

        $this->load->view('templates/header', $data);
        $this->load->view('contacts/index', $data);
        $this->load->view('templates/footer', $data);
    }

}
=======
        $data = array();
        $data['contacts'] = $this->contact_model->getAllContacts();
        $data['title'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('contacts', $data);
        $this->load->view('templates/footer');
    }

    public function contactDetails($contactId)
    {
        $data = array();
        $data['contact'] = $this->contact_model->find($contactId);
        $data['title'] = 'Contact';
        $this->load->view('templates/header', $data);
        $this->load->view('pages/contactDetails', $data);
        $this->load->view('templates/footer');
    }
}
>>>>>>> testing_routing

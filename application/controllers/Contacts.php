<?php

class Contacts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
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

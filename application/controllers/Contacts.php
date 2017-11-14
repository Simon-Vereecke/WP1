<?php

class Contacts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index()
    {
        $data = $this->session->flashdata('data');
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

    public function updateContact($contactId)
    {
        $data = array();
        $isUpdated = $this->contact_model->update($contactId, $_POST['name'], $_POST['email']);
        if ($isUpdated) {
            $data['success'] = "Contact " . $_POST['name'] . " successfully updated!";
        } else {
            $data['warning'] = "Contact " . $_POST['name'] . " not updated! Please try again.";
        }
        $this->session->set_flashdata('data', $data);
        redirect(base_url());
    }

    public function removeContact($contactId)
    {
        $data = array();
        $isRemoved = $this->contact_model->remove($contactId);
        if ($isRemoved) {
            $data['success'] = "Contact with id " . $contactId . " is succesfully removed!";
        } else {
            $data['warning'] = "Failed to remove contact with id " . $contactId . ". Please try again.";
        }
        $this->session->set_flashdata('data', $data);
        redirect(base_url());
    }

    public function createContact()
    {
        $data = array();
        $isCreated = $this->contact_model->add($_POST['name'], $_POST['email']);
        if ($isCreated) {
            $data['success'] = "Contact " . $_POST['name'] . " successfully created!";
        } else {
            $data['warning'] = "Contact " . $_POST['name'] . " not created! Please try again.";
        }
        $this->session->set_flashdata('data', $data);
        redirect(base_url());
    }

    public function test()
    {
        $data = $this->session->flashdata('data');
        $data['title'] = 'Debug';
        $this->load->view('templates/header', $data);
        $this->load->view('test', $data);
        $this->load->view('templates/footer');
    }
}

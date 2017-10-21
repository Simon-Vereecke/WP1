<?php
/**
 * Created by PhpStorm.
 * User: simowner
 * Date: 10/14/17
 * Time: 5:44 PM
 */

class Pages extends CI_Controller {

    public function view($page = 'home')
    {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

}
<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: simowner
 * Date: 10/14/17
 * Time: 5:44 PM
 */

=======
>>>>>>> testing_routing
class Pages extends CI_Controller {

    public function view($page = 'home')
    {
<<<<<<< HEAD
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
=======
        if (! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
>>>>>>> testing_routing
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
<<<<<<< HEAD
        $this->load->view('templates/footer', $data);
    }

=======
        $this->load->view('templates/footer');
    }
>>>>>>> testing_routing
}
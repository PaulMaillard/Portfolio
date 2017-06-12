<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Portfolio
 *
 * @author paul-maillard
 */
class Portfolio extends CI_Controller {

    public function view($page = 'frontpage') {
        if (!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            
            //Page not found
            show_404();
        }
        $data['title'] = ucfirst($page);
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }

}

<?php

/**
 * Description of Portfolio
 *
 * @author paul-maillard
 */
class Portfolio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('SkillModel', 'skillsM');
    }

    public function view($page = 'frontpage') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {

            //Page not found
            show_404();
        }
        $data['title'] = ucfirst($page);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, array(
            "skills" => $this->skillsM->getAll(),
            "skill" => $this->skillsM->get(3),
        ));
        $this->load->view('templates/footer');
    }

}

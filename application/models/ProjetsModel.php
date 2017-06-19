<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProjetsModel
 *
 * @author paul-maillard
 */
class ProjetsModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id){
        $query = $this->db->query("SELECT * FROM projets WHERE idprojets=".$id);
        return $query->result_array();
        
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM projets");
        return $query->result_array();
    }

    public function add($param){
        
    }

    public function edit($param){
        
    }

    public function delete($param){
        
    }
}

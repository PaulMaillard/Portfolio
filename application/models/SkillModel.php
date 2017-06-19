<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SkillModel
 *
 * @author paul-maillard
 */
class SkillModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get($id){
        $query = $this->db->query("SELECT * FROM skills WHERE idskills='$id'");
        return $query->result_array();
        
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM skills");
        return $query->result_array();
    }

    public function add($param){
        $query = $this->db->query("INSERT INTO skills (name) VALUES ('$param')");
    }

    public function editProjet($param){
        
    }

    public function delete($param){
        
    }

}

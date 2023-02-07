<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Liste extends CI_Model {

	public function select_membre(){
       $query=$this->db->query('SELECT * from membre ');
        $tab=$query->result_array();
        return $tab;

    }
    public function select_categorie(){
        $query=$this->db->query('SELECT * from categorie ');
        $tab=$query->result_array();
        return $tab;
    }
    public function check_categorie($cat){
        $query=$this->db->query("SELECT * from objet where idCategorie='".$cat."'");
        $tab=$query->result_array();
        return $tab;
    }
    public function my_objet(){
        $query=$this->db->query("SELECT * from objet where idMembre='".$this->session->userdata('id')."'");
        $tab=$query->result_array();
        return $tab;
    }
    
}
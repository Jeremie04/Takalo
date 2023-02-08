<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fonctionalite extends CI_Model {

	public function supprimer($nom){
        $sql = "Delete from objet where id='".$nom."' ";
        $this->db->query($sql);
        
    }
	public function ajouter($id,$cat,$titre,$desc,$prix){
        $sql = "INSERT INTO objet VALUES(null, %s, %s, %s, %s , %s)";
        $sql = sprintf($sql, $this->db->escape($id), $this->db->escape($cat), $this->db->escape($titre),$this->db->escape($desc),$this->db->escape($prix));
        $this->db->query($sql);
        
        
    }
    public function supprimer_cat($nom){
        $sql = 'DELETE from objet where idCategorie="'.$nom.'" ';
        $this->db->query($sql);
        
    }
}
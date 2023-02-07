<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscrit_model extends CI_Model {

	public function INSERT($name,$email, $mdp){
        $sql = "INSERT INTO membre VALUES(null,%s, %s, %s,0)";
        $sql = sprintf($sql, $this->db->escape($name), $this->db->escape($email), $this->db->escape($mdp));
        $this->db->query($sql);
        
    }
}
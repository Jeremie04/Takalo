<?php
	class Membre extends CI_Model{
        public function __construct(){
			$this->load->database();
		}

        public function getTotalMembre(){
            $sql = $this->db-> query('select count(id) totalMembre from membre M where M.admin=0;');
            $row0 = $sql->row_array();
            return $row0['totalMembre'];
        }

        public function isAdmin($idMembre){
            $sql = $this->db-> query("select * from membre where id = '".$idMembre."';");
            $row = $sql->row_array();
            if($row['admin']==1){
                return true;
            }
            return false;
        }
    }
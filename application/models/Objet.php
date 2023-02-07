<?php
	class Objet extends CI_Model{
        public function __construct(){
			$this->load->database();
		}

        
        public function getPhoto($id) {
            $query = $this->db->query("select * from photo where idObjet ='".$id."'");
            return $query->result_array();
        }


        public function getUserObjects($idUser){
            //$query = $this->db->query("SELECT * from objet where idmembre='".$idUser."'");
            $query = $this->db->query("select * from objet where idmembre = 1");
            $return = array();
            foreach($query->result_array() as $row){
                $objet = array();
                $objet['id']=$row['id'];
                $objet['idMembre'] = $row['idMembre'];
                $objet['idCategorie'] = $row['idCategorie'];
                $objet['titre'] = $row['titre'];
                $objet['description'] = $row['description'];
                $objet['prix'] = $row['prix'];
                $this->load->model('objet');
                $objet['photo'] = $this->objet->getPhoto($row['id']);
                $return[] = $objet;
            }
            return $return;
        }

        public function getOtherObjects($idUser){
            //$query = $this->db->query("SELECT * from objet where idmembre='".$idUser."'");
            $query = $this->db->query("select * from objet where idmembre not like 1");
            $return = array();
            foreach($query->result_array() as $row){
                $objet = array();
                $objet['id']=$row['id'];
                $objet['idMembre'] = $row['idMembre'];
                $objet['idCategorie'] = $row['idCategorie'];
                $objet['titre'] = $row['titre'];
                $objet['description'] = $row['description'];
                $objet['prix'] = $row['prix'];
                $this->load->model('objet');
                $objet['photo'] = $this->objet->getPhoto($row['id']);
                $return[] = $objet;
            }
            return $return;
        }

        public function insert_object($data) {
            return $this->db->insert("objet", $data);
        }
        
        public function update_object($id, $data) {
            $this->db->where("id", $id);
            return $this->db->update("objet", $data);
        }

        public function echange_object($idObjet, $idObjetARemplacer) {
            $data = array(
                'idmembre' => $id
            );
        }

    }
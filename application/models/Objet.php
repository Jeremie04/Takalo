<?php
	class Objet extends CI_Model{
        public function __construct(){
			$this->load->database();
		}

        
        public function getPhoto($id) {
            $query = $this->db->query("select * from photo where idObjet ='".$id."'");
            return $query->result_array();
        }


        public function getUserObjects(){
            $idUser = $_SESSION['idUser'];
            $query = $this->db->query("SELECT * from objet where idmembre='".$idUser."'");
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
            $query = $this->db->query("SELECT * from objet where idmembre not like '".$idUser."'");
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

        public function echange_object($idProposition) {

            //on sélectionne la demande(proposition)
            $proposition = $this->demande->get_demande($idProposition);
            $this->load->model('objet');
            //selection des deux objets à echanger
            $Objet1 = $this->objet->get_objet($proposition[0]['idObjet1']);
            $Objet2 = $this->objet->get_objet($proposition[0]['idObjet2']);
            
            $data1 =  array( 'idmembre' => $Objet1[0]['idMembre']);
            $this->db->where('id', $Objet1[0]['id']);
            $this->objet->update_object('objet', $data1);

            $data2 =  array( 'idmembre' => $Objet2[0]['idMembre']);
            $this->db->where('id', $Objet2[0]['id']);
            $this->objet->update_object('objet', $data2);
                
        }

        public function get_objet($id = null) {
            if ($id) {
                $this->db->where('id', $id);
            }
    
            $query = $this->db->get('objet');
            return $query->result_array();
        }
    }
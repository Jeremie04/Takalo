<?php
	class Demande extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getListeProposition($idUser){
            $query = $this->db->query("select d.id, op.titre proposé, om.titre miproposé  from demande d join objet op on d.idObjet2=op.id join objet om on d.idObjet1=om.id where op.idmembre=2 and d.acceptation=0;");

            return $query->result_array();
        }

        public function insert_demande($idObjet1, $idObjet2) {
            $data = array(
                'idObjet1' => $idObjet1,
                'idObjet2' => $idObjet2,
                'acceptation' => 0
            );
    
            return $this->db->insert('demande', $data);
        }
    
        public function accepter($id) {
            $data = array(
                'acceptation' => 1
            );
            $this->db->where('id', $id);
            return $this->db->update('demande', $data);
        }
    
        public function get_demande($id = null) {
            if ($id) {
                $this->db->where('id', $id);
            }
    
            $query = $this->db->get('demande');
            return $query->result_array();
        }

        public function delete($id) {
            $this->db->where('id', $id);
            $this->db->delete('demande');
        }

    }
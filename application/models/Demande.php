<?php
	class Demande extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function getListeProposition($idUser){
            $query = $this->db->query("select d.id, op.titre proposé, om.titre miproposé  from demande d join objet op on d.idObjet2=op.id join objet om on d.idObjet1=om.id where op.idmembre='".$idUser."' and d.dateacceptation is null;");

            return $query->result_array();
        }

        public function insert_demande($idObjet1, $idObjet2) {

            $sql ="insert into demande (idObjet1, idObjet2, dateAcceptation, dateDemande) values ('".$idObjet1."', '".$idObjet2."', null, now());";
        //    $sql = sprintf($sql, $this->db->escape($idObjet1), $this->db->escape($idObjet2), null, $this->db->escape(now()));
            $this->db->query($sql);
        }
    
        public function accepter($id) {
            // $data = array(
            //     'dateAcceptation' => now()
            // );
            // $this->db->where('id', $id);
            // return $this->db->update('demande', $data);

            $sql = "update demande set dateAcceptation = now() where id ='".$id."';";
            $this->db->query($sql);
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

        public function getTotalDemande(){
            $sql = $this->db-> query('select count(id) totalEchange from demande d where d.dateacceptation is not null;');
            $row0 = $sql->row_array();
            return $row0['totalEchange'];
        }
    }
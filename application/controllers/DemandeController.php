<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DemandeController extends CI_Controller {
    public function index(){
        $this->load->library('session');
        if(!$this->session->userdata('idUser')){
            redirect('Welcome/login');
        }
        $idUser = $_SESSION['idUser'];
        //$idUser=1;

        $this->load->model('demande');
        $data['proposition'] = $this->demande->getListeProposition($idUser);

        $this->load->view('header');
        $this->load->view('list_proposition', $data);
        $this->load->view('footer');
    }

    public function demander(){
        $objetaproposer = $this->input->post('objetaproposer');
        $idObjet = $this->input->post('idObjet');
        
        $this->load->model('demande');
        $this->demande->insert_demande($idObjet, $objetaproposer);
        redirect('ObjetController/others');
    }
    
    public function accepter(){
        $idProposition = $this->input->post('idProposition');

        $this->load->model('demande');
        $this->demande->accepter($idProposition);
        
        $this->load->model('objet');
        $this->objet->echange_object($idProposition);

        redirect('DemandeController/index');
    }

    public function refuser(){
        $idProposition = $this->input->post('idProposition');

        $this->load->model('demande');
        $this->demande->delete($idProposition);
        
        redirect('DemandeController/index');
    }

    public function getNombreEchangeEffectue(){
        $query = $this->db->query("select count(id) from demande d where d.dateAcceptation is not null;");
        return $query->result_array();
    }
}
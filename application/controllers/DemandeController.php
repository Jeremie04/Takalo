<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DemandeController extends CI_Controller {
    public function index(){
        // idUser alaina avy anaty session !!!
        $idUser=1;

        $this->load->model('demande');
        $data['proposition'] = $this->demande->getListeProposition($idUser);

        $this->load->view('list_proposition', $data);
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

        redirect('DemandeController/index');
    }
}
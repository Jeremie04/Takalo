<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        $this->load->model('membre');
        $this->load->library('session');
        if(!$this->membre->isAdmin($_SESSION['idUser'])){
            redirect('Affiche/listeCat');
        }


        $this->load->model('demande');
        $data['totalDemande'] = $this->demande->getTotalDemande();

        $data['totalMembre'] = $this->membre->getTotalMembre();

        $this->load->view('header');
        $this->load->view('pageAdmin', $data);
        $this->load->view('footer');        
    }
}
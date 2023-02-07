<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fonction extends CI_Controller {
    public function sup(){
        $this->load->model('fonctionalite');
        $this->fonctionalite->supprimer($_GET['id_objet']);
        redirect(site_url('Affiche/listeCat'));
	}
    public function ajout(){
        $this->load->model('fonctionalite');
        $this->fonctionalite->ajouter($this->session->userdata('id'),$_GET['cat'],$_GET['titre'],$_GET['desc'],$_GET['prix']);
        redirect('Affiche/form_ajout');
	}
   
  

}
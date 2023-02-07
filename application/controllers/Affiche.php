<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Affiche extends CI_Controller {
    public function listeCat(){
        $this->load->model('liste');
        $data['objet']=$this->liste->select_categorie();
        $this->load->view('home',$data);
    }
    public function category_selector(){
        $cat=$_GET['id_cat'];
        $this->load->model('liste');
        $data['ob']=$this->liste->check_categorie($cat);
        $this->load->view('accueil',$data);
       
    }
    public function form_ajout(){
        $this->load->model('liste');
        $data['o']=$this->liste->select_categorie();
        $this->load->view('ajout_Objet',$data);
    }
    public function mes_objet(){
        $this->load->model('liste');
        $data['objet']=$this->liste->my_objet();
        $this->load->view('categories',$data);
    }
    

}
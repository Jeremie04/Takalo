<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Affiche extends CI_Controller {
    public function listeCat(){
        $this->load->model('liste');
        $data['objet']=$this->liste->select_categorie();
        $data['one']=$this->liste->picture();
        $this->load->view('header',$data);
        $this->load->view('home',$data);
        $this->load->view('footer');
    }
    public function category_selector(){
        $cat=$_GET['id_cat'];
        $this->load->model('liste');
        $data['objet']=$this->liste->check_categorie($cat);
        $this->load->view('categories',$data);
       
    }
    public function form_ajout(){
        $this->load->model('liste');
        $data['o']=$this->liste->select_categorie();
        $this->load->view('ajout_objet',$data);
    }
    public function mes_objet(){
        $this->load->model('liste');
        $data['objet']=$this->liste->my_objet();
        $this->load->view('mes_objet',$data);
    }
    public function details(){
        $this->load->model('liste');
        $data['objet']=$this->liste->picture_one($_GET['id']);
        $this->load->view('details_obj',$data);
    }
    

}
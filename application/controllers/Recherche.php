<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Recherche extends CI_Controller{
        public function search(){
           $this->load->model('cherch');
           $data['rep']=$this->cherch->Rechercher($_GET['cle'],$_GET['selected']);
           $this->load->view('rechercher',$data);

        }

       
    }
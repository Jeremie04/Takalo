<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    public function check(){
        // echo "tonga";
        $data = array();
        $nom = $this->input->post('nom');
        $pass = $this->input->post('pass');

        $data['nom'] = $nom;
        $data['pass'] = $pass;

        if($nom=='Ranto'&&$pass=='pass'){
            $this->load->library('session');
           $d = $this->session->set_userdata($data);
            $this->load->view('pages/home');
        }else {
            echo "tsia";
        }
    }
    
    public function index()
	{
		$this->load->view('pages/login');
	}
}
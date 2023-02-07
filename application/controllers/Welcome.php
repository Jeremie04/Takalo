<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function login(){
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$this->load->model('liste');
		$tab=$this->liste->select_membre();
		$id=null;
		$id_admin=null;
		for($i=0;$i<count($tab);$i++){
			if($email==$tab[$i]['email']&&$pwd==$tab[$i]['password']){
				$id=$tab[$i]['id'];
                $id_admin=$tab[$i]['admin'];
				break;
			}
		}
		if($id!=null){
            $this->session->set_userdata('id', $id);
            $this->session->set_userdata('id_admin', $id_admin);
			redirect(site_url('Affiche/listeCat'));
            
       }
       else{
            redirect(site_url('Welcome/index'));
       }
	}
	public function index()
	{
		$this->load->view('login');
		
	}		
}

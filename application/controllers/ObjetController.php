<?php

    class ObjetController extends CI_Controller{
        public function userObject(){
            $this->load->library('session');
            if(!$this->session->userdata('idUser')){
                redirect('Welcome/login');
            }
            $idUser = $_SESSION['idUser'];

            $this->load->model('objet');
            $array = array();
            $array['objet'] = $this->objet->getUserObjects($idUser);
            $array['objetaproposer'] = $this->input->post('idObjet');

            $this->load->view('header');
            $this->load->view('list_objetUser', $array);
            $this->load->view('footer');
        }

        public function others(){
            $this->load->library('session');
            if(!$this->session->userdata('idUser')){
                redirect('Welcome/login');
            }
            $idUser = $_SESSION['idUser'];

            $this->load->model('objet');
            $data['objet'] = $this->objet->getOtherObjects($idUser);

            $this->load->view('header');
            $this->load->view('list_objetOthers', $data);
            $this->load->view('footer');
        }
    }
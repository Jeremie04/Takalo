<?php

    class ObjetController extends CI_Controller{
        public function userObject(){
            $idUser = $this->input->post('idUser');

            $this->load->model('objet');
            $array = array();
            $array['objet'] = $this->objet->getUserObjects($idUser);
            $array['objetaproposer'] = $this->input->post('idObjet');
            echo $array['objetaproposer'];

            $this->load->view('list_objetUser', $array);
        }

        public function others($idUser=''){
            $this->load->model('objet');
            $data['objet'] = $this->objet->getOtherObjects($idUser);

            $this->load->view('list_objetOthers', $data);
        }
    }
<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Formulaire extends CI_Controller
{

    public function index()
    {
        if (isset($_POST['place_category'])) {

            $full_path = '';
            // chargement du fichier
            if ($_FILES['pictures']['name'] != '') {
                $config['allowed_types'] = 'gif|jpg|png|pdf';

                $config['upload_path'] = './uploads/';
                $config['encrypt_name'] = true;
                $config['max_size'] = '10240000';
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('pictures')) {
                    $data['error_uploads'] = $this->upload->display_errors();
                    $this->make_form();
                } else {
                    $full_path = $this->upload->data('full_path');
                }
            }

            $config = array(
                array(
                    'field' => 'place_category',
                    'label' => 'Type d\'établissement',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'type',
                    'label' => 'Type d\'anomalie',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'anomalies',
                    'label' => 'Anomalie',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'place',
                    'label' => 'Nom du commerçant',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'place_address',
                    'label' => 'Adresse de l\'établissement',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'firstname',
                    'label' => 'Prénom',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'lastname',
                    'label' => 'Nom',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'email',
                    'label' => 'E-mail',
                    'rules' => 'required|valid_email'
                )
            );

            $this->form_validation->set_rules($config);


            if ($this->form_validation->run()) {
                $this->load->model('reports_model');
                if ($this->reports_model->addReport($full_path)) {
                    $this->load->view('header');
                    $this->load->view('valid');
                } else {
                    $data['error'] = true;
                    $this->make_form();
                }
            } else
                $this->make_form();
        } else
            $this->make_form();
    }

    private function make_form(){
        $file = fopen("assets/data/anomalies.csv", "r");

        while ($csv_array = fgetcsv($file, 1024, ','))
            $data['anomalies_array'][] = $csv_array;

        $this->load->view('header');
        $this->load->view('formulaire',$data);
        $this->load->view('footer');
    }


}
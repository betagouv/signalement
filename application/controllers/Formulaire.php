<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulaire extends CI_Controller {

	public function index()
		{



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


			if ($this->form_validation->run())
			{
				$config['upload_path'] = './tmpuploads/';
				$config['allowed_types'] = 'gif|jpg|png|pdf';
				$config['max_size']     = '10240';

				$this->load->library('upload', $config);

				echo $this->upload->data('full_path');


				$this->load->model('reports_model');
				if ($this->reports_model->addReport()){
					$this->load->view('header');
					$this->load->view('valid');
				} else {
					$data['error'] = true;
				}
			}
			else
			{
				$data['anomalies_array'] = $this-> readCSV();
				$this->load->view('header');
				$this->load->view('formulaire',$data);
				$this->load->view('footer');
			}
		}

	private function readCSV(){
		$file = fopen("assets/data/anomalies.csv", "r");
		$anomalies_array = array();
		while($csv_array=fgetcsv($file,1024,','))
		{
			$anomalies_array[] = $csv_array;
		}
		return $anomalies_array;
	}
}

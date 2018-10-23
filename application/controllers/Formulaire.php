<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulaire extends CI_Controller {

	public function index()
	{
		$config = array(
			array(
				'field' => 'place-category',
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
				'field' => 'place-address',
				'label' => 'Adresse de l\'établissement',
				'rules' => 'required'
			),
			array(
				'field' => 'name',
				'label' => 'Prénom et nom',
				'rules' => 'required'
			),
			array(
				'field' => 'email',
				'label' => 'E-mail',
				'rules' => 'required|valid_email'
			)
		);

		$this->form_validation->set_rules($config);

		$this->form_validation->set_message('place-category', 'Error Message');

		if ($this->form_validation->run())
		{
			$this->load->view('formulaire/submitted');
		}
		else
		{
			$data['anomalies_array'] = $this-> readCSV();
			$this->load->view('formulaire',$data);
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulaire extends CI_Controller {
	public function index()
	{
		$file = fopen("assets/data/anomalies.csv", "r");
		$anomalies_array = array();
		while($csv_array=fgetcsv($file,1024,';'))
		{
			$anomalies_array[] = $csv_array;
		}


		$data['anomalies_json'] = json_encode($anomalies_array);
		$this->load->view('formulaire',$data);
	}
}

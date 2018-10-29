<?php

class Reports_model extends CI_Model {

    protected $table = 'reports';


    public function __construct() {
        $this->load->database();
    }

    public function addReport() {
        $data = array(
            'place' =>  $this->input->post('place'),
            'place_address' => $this->input->post('place_address'),
            'place_category' => $this->input->post('place_category'),
            'type' => $this->input->post('type'),
            'anomalies' => addslashes(json_encode(array($this->input->post('anomalies')),JSON_FORCE_OBJECT)),
           // 'pictures' =>  json_encode(array($this->input->post('pictures')),JSON_FORCE_OBJECT),

            'description' => $this->input->post('description'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email')
        );


        return $this->db->insert($this->table, $data);
    }
}
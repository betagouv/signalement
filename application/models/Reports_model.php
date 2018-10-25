<?php

class Reports_model extends CI_Model {

    protected $table = 'reports';
    private $place;
    private $place_address;
    private $place_category;
    private $type;
    private $anomalies;
    private $pictures;
    private $description;
    private $name;
    private $email;

    public function __construct() {
        $this->load->database();
    }

    public function addReport() {
        $place = $this->input->post('place');
        $place_address = $this->input->post('place_address');
        $place_category = $this->input->post('place_category');
        $type = $this->input->post('$type');
        $anomalies = $this->input->post('anomalies');
        $pictures = $this->input->post('pictures');
        $description = $this->input->post('description');
        $name = $this->input->post('name');
        $email = $this->input->post('email');


        return $this->db->insert($this->table, $this);
    }
}
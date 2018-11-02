<?php

class Reports_model extends CI_Model {

    protected $table = 'reports';


    public function __construct() {
        $this->load->database();
    }

    public function addReport($full_path = '') {
        $oid_array = null;
        if ($full_path != '') {
            pg_query($this->db->conn_id, "begin");
            $oid =  pg_lo_import($this->db->conn_id, $full_path);
            pg_query($this->db->conn_id, "commit");
            if ($oid)
                $oid_array = str_replace(array('[',']'),array('{','}'),json_encode(array($oid)));
            else
                $oid_array = null;
        }
        $this->load->database();

        $data = array(
            'place' =>  $this->input->post('place'),
            'place_address' => $this->input->post('place_address'),
            'place_category' => $this->input->post('place_category'),
            'type' => $this->input->post('type'),
            'anomalies' =>str_replace(array('[',']'),array('{','}'),json_encode(array($this->input->post('anomalies')),JSON_HEX_QUOT + JSON_HEX_APOS)),
            'pictures' =>  $oid_array,
            'description' => $this->input->post('description'),
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email')
        );

        return $this->db->insert($this->table, $data);
    }
}
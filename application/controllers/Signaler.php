<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by Sélim.
 * Date: 11/10/2018
 *
 */

class Signaler extends CI_Controller {

    public function __construct()
    {
        $data['title'] = "My Real Title";


        $this->load->view('front/form', $data);
    }
}

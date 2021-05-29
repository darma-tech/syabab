<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
    	$data = [
    		'title' => 'Admin / Dashboard'
		];

    	$this->template->load('backend/template/master', 'backend/admin/dashboard', $data, false);
    }
}

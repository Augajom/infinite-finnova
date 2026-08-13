<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('common_helper');
	}

	public function index() {
        $this->load->view('header');
        $this->load->view('services/index');
        $this->load->view('footer');
    }
}

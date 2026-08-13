<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('common_helper');
	}

	public function index() {
        $this->load->view('header');
        $this->load->view('contact/index');
        $this->load->view('footer');
    }
}

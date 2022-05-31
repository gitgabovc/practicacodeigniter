<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cloguin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Mcliente");
	}

	public function index(){
		
		$this->load->view("inc/header");
		$this->load->view("loguin/V_loguin");
		$this->load->view("inc/footer");
	}


	
}

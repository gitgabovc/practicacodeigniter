<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Mlogin");
	}

	public function index(){
		
		$this->load->view("inc/header");
		$this->load->view("login/V_login");
		$this->load->view("inc/footer");
	}

	public function inde(){
		
		if(isset($_POST['password'])){
			$password=$_POST['password'];
			$email=$_POST['email'];
			$q=$this->Mlogin->login($email,$password);
			if($q->num_rows()>0)
			{
				$e = '<script type="text/javascript">
				window.location.href ="'. base_url().'Ccliente";
			 	</script>';
				 echo $e;
			}
			else
			{
				redirect('Clogin');
			}
		}

	}


	
}
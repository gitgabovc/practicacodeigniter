<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {


	
	public function login($email, $password)
	{


		$this->db->where('email',$email);
		$this->db->where('password',$password);
		return $this->db->get('usuario');

		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}

	}


	
}

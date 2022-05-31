<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccliente extends CI_Controller {




	public function __construct() {
		parent::__construct();
		$this->load->model("Mcliente");
	}

	
	
	public function index()
	{
		$lista= $this->Mcliente->listar_cliente();
		$data['cliente']=$lista;
			

		$this->load->view('inc/header');
		$this->load->view('cliente/VL_cliente',$data);
		$this->load->view('inc/footer');

	}

	public function listar_datos()
	{
		//$lista= $this->Mcliente->listar_cliente();
		
		//lo cargamos a un array relacional
		$data = array(
        "opcion" => "listar",
		"clientes" => $this->Mcliente->listar_cliente(),
		);

		$this->load->view('cliente/VO_cliente',$data);
	}

	public function agregar()
	{
		 
		$this->load->view('inc/header');
		$this->load->view('cliente/VR_cliente');
		$this->load->view('inc/footer');
		
	}

	public function agregar_bd()
	{
		
		$data = array(
			'fotografia'=>$_POST['fotografia'],
			'cliente' => trim($_POST["cliente"]),
			'ci_cli'  => trim($_POST["ci_cli"]),
			'celular_cli'  => trim($_POST["celular_cli"]),
			'direccion_cli'  => trim($_POST["direccion_cli"]),
			'observacion_cli'  => trim($_POST["observacion_cli"]),
			);

		$lista= $this-> Mcliente->agregar_cliente($data);
	}

	public function eliminar()
	{
		$id_cliente=$_POST['id_cliente'];
		$this->Mcliente->eliminar_cliente($id_cliente);
		
	}

	public function modificar()
	{
		$id_cliente=$_POST['id_cliente'];
		$data['info_cliente']=$this->Mcliente->recuperar_cliente($id_cliente);
		

		$this->load->view('inc/header');
		$this->load->view('cliente/VM_cliente',$data);
		$this->load->view('inc/footer');
	}
	public function modificar_bd()
	{
		$id_cliente=$_POST['id_cliente'];
		$data['fotografia']=$_POST['fotografia'];
		$data['cliente']=$_POST['cliente'];
		$data['ci_cli']=$_POST['ci_cli'];
		$data['celular_cli']=$_POST['celular_cli'];
		$data['direccion_cli']=$_POST['direccion_cli'];
		$data['observacion_cli']=$_POST['observacion_cli'];
		$this->Mcliente->modificar_cliente($id_cliente,$data);
		redirect('Ccliente/index','refresh');
	}
	
	public function editar_datos()
	{

		$id_cliente=$_POST['id_cliente'];
		$data = array(
			"opcion"=>"editar",
			"clientes"=>$this->Mcliente->recuperar_cliente_con_id($id_cliente),
		);

		$this->load->view('cliente/VO_cliente',$data);

	}

	public function guardar_datos()
	{
		$id_client=$_POST['id_client'];
		$data['fotografia']=$_POST['fotografia'];
		$data['cliente']=$_POST['cliente'];
		$data['ci_cli']=$_POST['ci_cli'];
		$data['celular_cli']=$_POST['celular_cli'];
		$data['direccion_cli']=$_POST['direccion_cli'];
		$data['observacion_cli']=$_POST['observacion_cli'];
		$this->Mcliente->modificar_cliente_en_bd($id_client,$data);
		
	}

	public function buscar_en_bd()
	{

		$cliente=$_POST['cliente'];

		$data=array(
			"opcion"=>"buscador",
			"clientess"=>$this->Mcliente->buscar($cliente),
		);
		$this->load->view('cliente/VO_cliente',$data);

		
		
	}
	
	
}

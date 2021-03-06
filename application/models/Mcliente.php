<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcliente extends CI_Model {


	
	public function listar_cliente()
	{


		$this->db->select('*');// select *
		$this->db->from('cliente');// tabla
		$this->db->order_by('id_cliente','DESC');
		return $this->db->get();// rdevolucion del resultado de la consulta

	}

	public function agregar_cliente($data)
	{
		$this->db->insert('cliente', $data);
	}

	public function eliminar_cliente($id_cliente)
	{
		

		$this->db->where('id_cliente', $id_cliente);
		$this->db->delete('cliente');

	}
	
	public function recuperar_cliente($id_cliente)
	{


		$this->db->select('*');// select *
		$this->db->from('cliente');// tabla
		$this->db->where('id_cliente', $id_cliente);
		return $this->db->get();// rdevolucion del resultado de la consulta

	}
	public function modificar_cliente($id_cliente,$data)
	{
		$this->db->where('id_cliente', $id_cliente);
		$this->db->update('cliente', $data);	
	}

	public function recuperar_cliente_con_id($id_cliente)
	{
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->where('id_cliente',$id_cliente);
		return $this->db->get();

	}
	
	public function modificar_cliente_en_bd($id_client,$data)
	{
		$this->db->where('id_cliente',$id_client);
		$this->db->update('cliente',$data);

	}

	public function buscar($cliente)
	{
		$this->db->select('*');
		$this->db->from('cliente');
		$this->db->like('cliente',$cliente);
		$this->db->or_like('fotografia',$cliente);
		$this->db->or_like('ci_cli',$cliente);
		$this->db->or_like('celular_cli',$cliente);
		$this->db->or_like('direccion_cli',$cliente);
		$this->db->or_like('observacion_cli',$cliente);
		return $this->db->get();
	}

	//paginacion metodo para contar

	public function count()
	{


		$this->db->select('*');// select *
		$this->db->from('cliente');// tabla
		$query = $this->db->get();// rdevolucion del resultado de la consulta
		return $query->num->rows();
	}
	
}

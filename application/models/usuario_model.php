<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model {
	public function _construct()
	{
		parent::_construct();
		$this->load->database();
	}

	public function autenticacion($username, $password){
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		$resultados = $this->db->get('usuario');

		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
}
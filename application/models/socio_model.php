<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class socio_model extends CI_Model {
	public function _construct()
	{
		parent::_construct();
		$this->load->database();
	}

	

	public function buscarSocio($midni){
		$this->db->where("dni",$midni);
		$resultado = $this->db->get("socio");
	
		if ($resultado->num_rows() > 0) {
			return $resultado->row();
		}
		else{
			return FALSE;
		}		
	}
}
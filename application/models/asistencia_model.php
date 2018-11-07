<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asistencia_model extends CI_Model {
	public function _construct()
	{
		parent::_construct();
		$this->load->database();
	}
    public function existeAsistencia($id) {
        $fecha2 = date("Y-m-d",time());
        $this->db->where('id',$id_Socio);
        $this->db->where('fecha2',$fecha);

        //$resultado = $this->db->get("");
    }

	public function registrarAsistenciaSocio($id){
		$fecha = date("Y-m-d H:i:s",time());
		$arrayIngreso = array(
		'id_Socio' => $id,
		'fechaAsistencia' => $fecha);
		$this->db->insert("asistencia", $arrayIngreso);
		//$resultado = $this->db->get("socio");
			
	}
}
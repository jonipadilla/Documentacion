<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CasistenciaSocio extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("socio_model");
		$this->load->model("asistencia_model");
	}

	public function index()
	{
		$this->load->view('usuario/asistenciaSocio');
	}

	public function buscar()
	{
		$res = $this->input->post('dni', TRUE);		
		$data = $this->socio_model->buscarSocio($res);
		
		//$this->asistencia_model->existeAsistencia($data->idSocio);
		if ($data != FALSE) {
			$this->asistencia_model->registrarAsistenciaSocio($data->idSocio);
			$resul ="Asistencia Registrada";
		}
		else{
			$resul ="Error de Asistencia";
		}
		$this->load->view('usuario/asistenciaSocio',compact("resul"));
	}
}
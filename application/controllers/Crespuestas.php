<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crespuesta extends CI_Controller {

	public function _construct()
	{
		parent::_construct();
	}

	public function index()
	{
		$output=(object) array('output' => '' , 'js_files' => array() , 'css_files' => array());
		$this->cargar_vista($output);
	}

	function cargar_vista($output=null)
	{

		$this->load->view('header.php');
		$this->load->view('registrarRespuesta.php',$output);
	}

	public function registrarRespuesta(){
		$crud = new grocery_CRUD();
		
		$crud->set_theme('flexigrid');
		$crud->set_table('respuesta');
		$crud->set_relation('id_Inscripcion','inscripcion');

		$crud->unset_clone();
		$crud->unset_export();
		$crud->unset_print();
		//$crud->display_as('idServicio','servicios tipoServicio');
		//$crud->set_relation('id_Socio', 'socio','{apellido} - {nombre} {dni}');
		//$crud->set_relation('id_Servicio', 'servicio','tipoServicio');
		$output = $crud->render();
		$this->cargar_vista($output);

	}
}
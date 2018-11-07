<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cinscripcion extends CI_Controller {

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
		$this->load->view('registrarInscripcion.php',$output);
	}

	public function registrarInscripcion(){
		$crud = new grocery_CRUD();
		
		$crud->set_theme('flexigrid');
		$crud->set_table('inscripcion');

		$crud->display_as('id_Servicio','Tipo de Servicio')->display_as('id_Socio', 'Socio')->
		display_as('incapacidadFisica','Poseé alguna incapacidad fisica')->
		display_as('problemaCardiaco','Poseé problema cardiaco')->
		display_as('tieneMareos','Tiene Mareos')->display_as('fumador','Fumador/ar')->
		display_as('tomaMedicamento','Toma algun medicamento')->display_as('paraQue','Para que')->display_as('practicaDeporte','Practica alguna actividad fisica')->display_as('haceCuanto','Hace cuanto')->display_as('ocupacion','Ocupación')->display_as('objetivo','Objetivo');
		$crud->unset_clone();
		$crud->unset_export();
		$crud->unset_print();
		//$crud->display_as('idServicio','servicios tipoServicio');
		$crud->set_subject('inscripcion');
		$crud->set_relation('id_Socio', 'socio','{apellido} - {nombre} {dni}');
		$crud->set_relation('id_Servicio', 'servicio','tipoServicio');

		$output = $crud->render();
		$this->cargar_vista($output);

	}
}
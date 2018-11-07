<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cpersonal extends CI_Controller {

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
		$this->load->view('usuario/registrarPersonal.php',$output);
	}

	public function registrar(){
		$crud = new grocery_CRUD();
		
		$crud->set_theme('flexigrid');
		$crud->set_table('entrenador');
		$crud->set_relation('id_Persona','persona','nombre','apellido');

		$crud->unset_clone();
		$crud->unset_export();
		$crud->unset_print();
		
		$output = $crud->render();
		$this->cargar_vista($output);
	}


}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csocio extends CI_Controller {

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
		$this->load->view('registrarSocio.php',$output);
	}

	public function registrarSocio(){
		$crud = new grocery_CRUD();
		
		$crud->set_theme('flexigrid');
		$crud->set_table('socio');
		$crud->set_subject('Socio');

		$crud->unset_clone();
		$crud->unset_export();
		$crud->unset_print();
		
		
		$output = $crud->render();
		$this->cargar_vista($output);

	}
}
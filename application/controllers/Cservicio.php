<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cservicio extends CI_Controller {

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
		$this->load->view('registrarServicio.php',$output);
	}

	public function registrarServicio(){
		$crud = new grocery_CRUD();

		$crud->set_theme('flexigrid');
		$crud->set_table('servicio');
		$crud->set_subject('Servicio');
		$crud->set_relation_n_n('disciplinas', 'serviciodisciplina', 'disciplina', 'id_Servicio', 'id_Disciplina', 'nombreDisciplina');

		$crud->unset_clone();
		$crud->unset_export();
		$crud->unset_print();

		
		$output = $crud->render();
		$this->cargar_vista($output);

	}
}
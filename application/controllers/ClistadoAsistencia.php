<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClistadoAsistencia extends CI_Controller {

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
		$this->load->view('usuario/listadoAsistencia.php',$output);
	}

	public function asistenciaSocio(){
		$crud = new grocery_CRUD();
		
		$crud->set_theme('flexigrid');
		$crud->set_table('asistencia');
		$crud->set_relation('id_Socio','socio','{nombre} {apellido}');
		$crud->order_by('fechaAsistencia','DESC');
		
		$crud->unset_clone();
		$crud->unset_export();
		$crud->unset_print();
		$crud->unset_add();
		$crud->unset_delete();
		$crud->unset_edit();
		$crud->display_as('id_Socio','socio');
				
		$output = $crud->render();
		$this->cargar_vista($output);

	}
}
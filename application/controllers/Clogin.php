<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("usuario_model");
	}
	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url()."Cadministrador");
		}
		else{
			$this->load->view("Login/login");
		}		
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$res = $this->usuario_model->autenticacion($username, $password);

		if ($res == false) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}
		else{
			$data  = array(
				'id' => $res->idUsuario, 
				'nombre' => $res->username,
				'perfil' => $res->perfil,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			$i= $res->perfil;
			switch ($i) {
				case '1':
					redirect(base_url()."Cadministrador");
					break;
				case '2':
					redirect(base_url()."CasistenciaSocio");
					break;
				default:
					# code...
					break;
			}
			
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
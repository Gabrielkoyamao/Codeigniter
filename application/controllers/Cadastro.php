<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('User_model');
	}


	public function index()
	{
		$this->load->view('Cadastro_page');		
	}

	public function addUser(){
		
		$data = $this->input->post();
		
		$this->User_model->addUserModel( $data );
		
	}
}

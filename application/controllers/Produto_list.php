<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto_list extends CI_Controller {

	function __construct() {
		
		parent::__construct();
		$this->load->model('Produto_list_model');
	}

	public function index()
	{	
		$lista = $this->Produto_list_model->listar();

		$this->load->view('common/header');
		$this->load->view('produtos/Produto_list_view',['lista' => $lista ]);		
		$this->load->view('common/footer');
		
	}
}

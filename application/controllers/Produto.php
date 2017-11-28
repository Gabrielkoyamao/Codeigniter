<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {

	function __construct() {
		
		parent::__construct();
		$this->load->model('Produto_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('produtos/Produto_view', array('error' => '', 'data' => ''));		
		$this->load->view('common/footer');
		
	}

	public function addProduto(){

		$data = $this->input->post();



		$this->form_validation->set_rules('nome','Nome','trim|required|min_length[3]|max_length[50]',
		array(
			'required' 		=> 'Esse campo deve ser preenchido',
			'min_length' 	=> 'Tamanho minimo: 3 caracteres',
			'max_length' 	=> 'Tamanho maximo: 50 caracteres'
		));
		$this->form_validation->set_rules('preco','Preco', 'trim|required|numeric',
		array(
			'required' 		=> 'Esse campo deve ser preenchido',
			'numeric' 		=> 'Apenas numeros sao permitidos'
		));
		
		if($this->form_validation->run() == FALSE){

			$error = $this->form_validation->error_array();

			$this->load->view('common/header');
			$this->load->view('produtos/Produto_view', array('error' => $error, 'data' => $data));
			$this->load->view('common/footer');


		}else{
			
			
			$ret = $this->Produto_model->addProdutoModel($data);
			
			if($ret){
				redirect('/home');

			}
			else{
				redirect('/produto');
			
			}
		}
	}

	public function List(){
		header('Content-Type: application/json');
				
		$produtos = $this->Produto_model->ListModel();

		$ret  = [

			"produtos" => $produtos

		];

		print json_encode ( $ret );


	}
}

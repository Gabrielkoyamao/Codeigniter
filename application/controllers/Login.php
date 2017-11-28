<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->model('User_model');

	}


	public function index()
	{
		$this->load->view('Login_page');		
	}

	public function login_login(){
		
		$data = $this->input->post();

		$ret = $this->User_model->loginModel( $data );
		
		if ($ret){
			
			if ($ret['password'] == sha1($ret['id'] . $data['senha'])){

				redirect('/home');

			}else{
				$data = "Senha nao confere";
				$email = $this->input->post('email');

				$this->load->view('login_page', ['errorSenha' => $data, 'data_email' => $email]);
			}

		}else{
			$data = "Email nao existe";
			$email = $this->input->post('email');

			$this->load->view('login_page',['errorEmail' => $data, 'data_email' => $email]);

		}

	}

}

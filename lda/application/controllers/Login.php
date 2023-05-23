<?php

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('login_model');
	}

	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('account/login');
		$this->load->view('templates/footer');

	}
	function validation()
	{
		$this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email', array('required' => '*Lütfen Bir E-Posta Adresi Giriniz'));
		$this->form_validation->set_rules('user_password', 'Password', 'required', array('required' => '*Lütfen Bir Şifre Giriniz'));
		if($this->form_validation->run())
		{
			$result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
			if($result == '')
			{
				redirect('categories');

			}
			else
			{
				$this->session->set_flashdata('message', $result);
				redirect('login/login');
			}
		}
		else
		{
			$this->index();
		}
	}
}

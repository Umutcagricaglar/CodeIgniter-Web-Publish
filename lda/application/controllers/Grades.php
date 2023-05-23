<?php

class Grades extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->helper('url');
		if(!$this->session->userdata('id'))
		{
			redirect('login/login');
		}
		$usertype=$this->session->userdata('user_type');
		if($usertype!='admin')
		{
			redirect('login/login');
		}

	}

	public function view($grade = 'science1')
	{
		if (!file_exists(APPPATH . 'views/pages/grades/' . $grade . '.php')) {
			show_404();
		}
		$data['title'] = ucfirst($grade);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/grades/' . $grade, $data);
		$this->load->view('templates/footer');
	}


}

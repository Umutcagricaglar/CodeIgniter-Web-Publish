<?php


class Materials extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
//			$this->load->model('ardes_model');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->helper('url');
		if(!$this->session->userdata('id'))
		{
			redirect('login/login');
		}

	}

	public function view($material = 'science1')
	{
		if (!file_exists(APPPATH . 'views/materials/' . $material . '.php')) {
			show_404();
		}
		$data['title'] = ucfirst($material);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('materials/' . $material, $data);
		$this->load->view('templates/footer');
	}


}

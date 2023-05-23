<?php
class Classes extends CI_Controller
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


	public function view($topic = 'index')
	{
		if (!file_exists(APPPATH . 'views/pages/categories/' . $topic . '.php')) {
			show_404();
		}
		$data['title'] = ucfirst($topic);
		$usernamedata = $this->session->userdata('name');
		$data['username'] = $usernamedata;
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/categories/' . $topic, $data);
		$this->load->view('templates/footer');
//		echo "Merhaba $usernamedata!";
//		echo '<p align="center"><a href="'.base_url().'classes/logout">Logout</a></p>';

	}


	function logout()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('login/login');
	}
}



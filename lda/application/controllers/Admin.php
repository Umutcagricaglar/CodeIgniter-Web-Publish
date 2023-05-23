<?php
class Admin extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
		$this->load->model('admin_model');
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

	public function view($adminp = 'adminhome')
	{
		if (!file_exists(APPPATH . 'views/pages/admin/' . $adminp . '.php')) {
			show_404();
		}
		$data['msgs'] = $this->admin_model->get_msgs();
		$data['rgstrs'] = $this->admin_model->get_rgstrs();

		$data['title'] = ucfirst($adminp);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pages/admin/' . $adminp, $data);
		$this->load->view('templates/footer');

	}

}

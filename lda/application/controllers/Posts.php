<?php
class Posts extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('posts_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$this->load->helper('url');
		$data['posts'] = $this->posts_model->get_posts();
		$data['title'] = 'Posts archive';


		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('pages/posts/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL)
	{
		$data['posts_item'] = $this->posts_model->get_posts($slug);

		if (empty($data['posts_item']))
		{
			show_404();
		}
		$this->load->helper('url');
		$data['title'] = $data['posts_item']['title'];


		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('pages/posts/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a new post';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('pages/posts/create');
			$this->load->view('templates/footer');

		}
		else
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->posts_model->set_posts();
			$this->load->view('pages/posts/success');
			$this->load->view('templates/footer');

		}
	}

}

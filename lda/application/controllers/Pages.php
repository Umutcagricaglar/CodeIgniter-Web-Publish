<?php
	class Pages extends CI_Controller{
		public function __construct()
		{

			parent::__construct();
//			$this->load->model('ardes_model');
			$this->load->helper('url_helper');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('Msg_model');


		}
		public function view($page = 'home') {
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
				show_404();
			}
			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}

		public function savedata()
		{
			/*load registration view form*/
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('pages/contacts');
			$this->load->view('templates/footer');

			/*Check submit button */
			if($this->input->post('save'))
			{
				$data['topic']=$this->input->post('topic');
				$data['first_name']=$this->input->post('first_name');
				$data['last_name']=$this->input->post('last_name');
				$data['email']=$this->input->post('email');
				$data['msg']=$this->input->post('msg');
				$response=$this->Msg_model->saverecords($data);
				if($response==true){
					echo "Form Başarı ile Gönderildi";
				}
				else{
					echo "Hata: Form Gönderilemedi!";
				}
			}
		}

	}

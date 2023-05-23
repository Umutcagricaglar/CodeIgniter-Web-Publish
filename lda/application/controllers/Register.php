<?php
////defined('BASEPATH') OR exit('No direct script access allowed');
//
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('register_model');
	}

	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('account/register');
		$this->load->view('templates/footer');
	}

	function validation()
	{

		$this->form_validation->set_rules('user_name','Name','required|trim', array('required' => '*Lütfen Bir Kullanıcı Adı Giriniz'));
		$this->form_validation->set_rules('user_email','Email Address','required|trim|valid_email|is_unique[lda_register.email]', array('required' => '*Lütfen Bir E-Posta Adresi Giriniz'));
		$this->form_validation->set_rules('user_password','Password','required', array('required' => '*Lütfen Bir Şifre Giriniz'));
		if($this->form_validation->run())
		{
			$verification_key = md5(rand());
			$encrypted_password = $this->input->post('user_password');
			$data=array(
				'name' => $this->input->post('user_name'),
				'email' => $this->input->post('user_email'),
				'password' => password_hash($encrypted_password, PASSWORD_BCRYPT),
				'verification_key' => $verification_key,
				'is_email_verified' => 'no'
			);
			$id = $this->register_model->insert($data);
			if($id > 0)
			{
				$subject = "Lütfen e-posta adresinizi doğrulayın";
				$message = "<p> Merhaba ".$this->input->post('user_name')."</p>
					<p> Bu, LDA sisteminden gelen e-posta doğrulama postasıdır.
					Kayıt işlemini tamamlamak ve sisteme giriş yapmak için
					Lütfen bu <a href='".base_url()."register/verify_email/".$verification_key."'>link</a> tıklayın.
					<p>Tıkladıktan sonra LDA sistemine giriş için e-posta adresiniz aktive edilecektir.</p>
					<p>Teşekkürler,</p>
					";
					//Has to be filled with host info
				$config = array(
					'protocol' => 'smtp',
					'smtp_host' => '',	//host
					'smtp_port' => ,	//host port
					'smtp_user' => '',	//user
					'smtp_pass' => '',	//password
					'mailtype' => 'html',
					'charset' => 'utf-8',
					'wordwrap' => TRUE
				);
				//sends automated e-mail to registered account, requires info
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from(''); //sender email
				$this->email->to($this->input->post('user_email'));
				$this->email->subject($subject);
				$this->email->message($message);
				if($this->email->send())
				{
					$this->session->set_flashdata('message', 'Aktivasyon için e-posta adresinizi kontrol ediniz');
					redirect('register/register');
				}
			}
		}
		else
		{
			$this->index();
		}

	}
	function verify_email()
	{
		if($this->uri->segment(3))
		{
			$verification_key = $this->uri->segment(3);
			if($this->register_model->verify_email($verification_key))
			{
				$data['message'] = '<h1 align="center">E-posta adresiniz başarı ile aktive edilmiştir, <a href="'.base_url().'login/login">Buraya tıklayarak giriş yapabilirsiniz.</a></h1>';
			}
			else
			{
				$data['message'] = '<h1 align="center">Hatalı Bağlantı</h1>';
			}
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('account/email_verification', $data);
			$this->load->view('templates/footer');
		}

	}
}


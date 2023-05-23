<?php
class Login_model extends CI_Model
{
	function can_login($email, $password)
	{
		$this->db->where('email', $email);
		$query = $this->db->get('lda_register');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				if($row->is_email_verified == 'yes')
				{
					$hash_password = $row->password;

					if(password_verify($password, $hash_password) )
//
					{
						$this->session->set_userdata('id', $row->id);
						$this->session->set_userdata('name', $row->name);
						$this->session->set_userdata('user_type', $row->user_type);
					}
					else
					{

						return 'Hatalı Şifre';

					}
				}
				else
				{
					return 'İlk önce e-posta adresinizi doğrulayın';
				}
			}
		}
		else
		{
			return 'Hatalı e-posta adresi';
		}
	}
}

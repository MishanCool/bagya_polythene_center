<?php

class login_control extends CI_Controller{

	public function login_user()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('sign_page');
		}
		else
		{
			$this->load->model('model_user');
			$result = $this->model_user->login_user();

			if($result != false)
			{
				//set session
				$user_type=$result->user_type;
				$user_data = array(

					'user_id' => $result->id,
					'fname' => $result->first_name,
					'lname' => $result->last_name,
					'email' => $result->email,
					'mobile_number' => $result->mobile_number,
					'logged_in'=>TRUE
				);
				$this->session->set_userdata($user_data);

				/* print_r($_SESSION); print session */
				if($user_type=="admin"){
					//echo "FUCK";
					$this->load->view('admin_page');
				}
				else
				{
					$this->load->view('customer_page');
					//$this->session->set_flashdata('welcome','welcome back');
					//redirect('Polythene_controller/index');
				}
			
			}
			else
			{
				$this->session->set_flashdata('errormsg','wrong email or password');
				redirect('Polythene_controller/register');
			}

		}
	}

}

?>

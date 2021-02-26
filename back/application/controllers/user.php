<?php

class User extends CI_Controller {

    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index()
	{
		if($this->session->userdata('is_logged_in') && $this->session->userdata('status')==0){
			redirect('admin/pengguna');
        }elseif($this->session->userdata('is_logged_in') && $this->session->userdata('status')==1){
			redirect('admin/berita');
		}else{
        	$this->load->view('admin/login');	
        }
	}

    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials()
	{	

		$this->load->model('Users_model');

		$user_name = $this->input->post('user_name');
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->Users_model->validate($user_name, $password);
		$status = $this->Users_model->status($user_name);
		
		if($is_valid)
		{
			$data = array(
				'user_name' => $user_name,
				'status' => $status,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			if($this->session->userdata('status')==0){
				redirect('admin/pengguna');
			}else{
				redirect('admin/berita');
			}
			
		}/*elseif($is_valid && $status==1){
			$data = array(
				'user_name' => $user_name,
				'status' => $status,
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('admin/pengguna');
		}*/
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
		}
	}	

    /**
    * The method just loads the signup view
    * @return void
    */
	
	

    /**
    * Create new user and store it in the database
    * @return void
    */	
	
	
	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

}
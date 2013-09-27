<?php

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}
	public function login()
	{
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password', 'required');
		
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('user/login');
		}
		else
		{
			//check whether user is registered

			//if user is not registered, ask user to register
			if(!$this->user_model->username_check($this->input->post('username')))
			{
				$this->load->view('user/login');
			}
			else
			{

			//else check for authentication
				//if username and password are correct, show success msg and assign a session
				//else display error and prompt user to re-enter login information

			}
			

		}
	}
	
}
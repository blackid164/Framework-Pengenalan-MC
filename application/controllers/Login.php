<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
	}

	public function index()
	{
		$this->load->view('login');		
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!'
			));
		$this->form_validation->set_rules('password', 'Password', 'required',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!'
			));

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			// $level = $this->input->post('level');

			$id_user = $this->loginmodel->login($username, $password);

			if ($id_user) {
				$level = $this->loginModel->get_user($id_user);
				$user_data = array(
					'id_user' => $id_user,
					'username' => $username,
					'logged_in' => true,
					'level' => $level[0]->id_level
				);

				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('user_loggedin', 'You are now logged in');
				redirect('blog');
			} else {
				$this->session->set_flashdata('login_failed', 'Login Failed');
				// var_dump($username);
				// var_dump($password);
				// var_dump($id_user);
				redirect('login');
			}

		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('user_loggedout', 'You are logged out');

		redirect('login');
	}

}
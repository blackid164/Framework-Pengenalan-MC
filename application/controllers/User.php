<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usermodel');
	}

	public function index()
	{
		$data['user'] = $this->UserModel->get_user();
		$this->load->view('tampil_user', $data);
	}

	public function update_user($id_user)
	{
		$this->form_validation->set_rules('nama', 'nama', 'required',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!'
			));

		$this->form_validation->set_rules('alamat', 'alamat', 'required',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!'
			));
		$this->form_validation->set_rules('no_telp', 'No telp', 'required|numeric',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'numeric' 		=> 'Kolom %s hanya boleh diisi angka'
			));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'valid_email' 	=> 'Kolom %s harus diisi dengan format email'
			));
		$data['single_user'] = $this->UserModel->get_single_user($id_user);
		if ($this->form_validation->run() === FALSE)
	    {
			$this->load->view('update_user', $data);	    	
	    } else {
			if ($this->input->post('update')) {
				$this->UserModel->update($id_user);
				$this->session->set_flashdata('updated', 'Data '.$data['single_user'][0]->nama.' Berhasil di update');
				redirect('user','refresh');
			}
	    }
		// $this->load->view('update_user', $data);	    	
	}

	public function delete_user($id_user)
	{
		$data['single_user'] = $this->UserModel->get_single_user($id_user);
		$this->UserModel->delete($id_user);
		$this->session->set_flashdata('deleted', 'Data '.$data['single_user'][0]->nama.' Berhasil di Hapus');
		redirect('user','refresh');
	}

	public function ganti_pass()
	{
		if ($this->session->userdata('level') == 2 ) {
			$this->session->set_flashdata('not_allow', 'Anda cuma user biasa ea. . .');
			redirect('blog');
		}
		if ($this->input->post('submit')) {
			$this->UserModel->ganti_pass($this->session->userdata('id'));
			$this->session->set_flashdata('updated', 'Password anda berhasil diubah!');
			redirect('blog');
		}
		$this->load->view('ganti_password');
	}

}
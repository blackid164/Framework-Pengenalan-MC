<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrasiModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insert_user($enc_password)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'agama' => $this->input->post('agama'),
			'username' => $this->input->post('username'),
			'password' => $enc_password
		);

		$this->db->insert('user', $data);
	}

	public function insert_user_level($id_user)
	{
		$data = array(
			'id_user' => $id_user,
			'id_level' => $this->input->post('typeuser')
		);

		$this->db->insert('user_level', $data);
	}

	public function get_user($username)
	{
		$this->db->select('id_user');
		$this->db->from('user');
		$this->db->where('username', $username);
		return $this->db->get()->result();
	}

}
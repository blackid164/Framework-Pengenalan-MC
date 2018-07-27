<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function get_user()
	{
		$this->db->from('user');
		$this->db->join('user_level', 'user.id = user_level.id_user');
		$this->db->join('level', 'user_level.id_level = level.id');

		return $this->db->get()->result();
	}
	
	public function get_single_user($id)
	{
		$this->db->from('user');
		$this->db->join('user_level', 'user.id = user_level.id_user');
		$this->db->join('level', 'user_level.id_level = level.id');
		$this->db->where('user.id_user', $id);

		return $this->db->get()->result();
	}

	public function update($id_user)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email'),
			'agama' => $this->input->post('agama')
		);
		$this->db->where('id_user', $id_user);
		$this->db->update('user', $data);

		$object = array('id_level' => $this->input->post('typeuser'));
		$this->db->where('id_user', $id_user);
		$this->db->update('user_level', $object);
	}

	public function delete($id_user)
	{
		$this->db->where('id_user', $id_user);
		$this->db->delete('user');

		$this->db->where('id_user', $id_user);
		$this->db->delete('user_level');
	}

	public function ganti_pass($id_user)
	{
		$data = array (
			'password' => md5($this->input->post('password'))
		);
		$this->db->where('id_user', $id_user);
		$this->db->update('user', $data);
	}
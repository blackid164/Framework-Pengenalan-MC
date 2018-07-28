<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categorymodel');
		if ($this->session->userdata('level') != 1) {
			$this->session->set_flashdata('not_admin', 'Gak boleh boss!');
			redirect('blog');
		}
	}

	public function index()
	{
		$data['categories'] = $this->categoryModel->get_all_categories();
		$this->load->view('template/header');
		$this->load->view('select_category', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama', 'nama_kategori', 'required|is_unique[category.cat_name]',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'is_unique'		=> 'Isi dari kolom %s sudah ada'
			)
		);
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!'
			)
		);

		if ($this->form_validation->run() === FALSE)
	    {
	    	$this->load->view('template/header');
	        $this->load->view('insert_category');
	        $this->load->view('template/footer');
	    } else {
			if ($this->input->post('simpan')) {
				$this->categoryModel->tambah();
				redirect('category');
			}
			$this->load->view('template/header');
			$this->load->view('insert_category');
			$this->load->view('template/footer');
		}
	}

	public function update_category($id_category) {
		$data['detail'] = $this->categoryModel->get_single_category($id);

		if ($this->input->post('update')) {
			$this->categoryModel->update($id);
			redirect('category');
		}
		$this->load->view('template/header');
		$this->load->view('update_category', $data);
		$this->load->view('template/footer');
	}

	public function delete_category($id_category)
	{
		$this->categoryModel->delete_category($id);
		redirect('category');
	}

}
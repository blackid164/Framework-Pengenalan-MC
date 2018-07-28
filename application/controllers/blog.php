<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categorymodel');
	}

	public function index()
	{
		if ($this->session->userdata('level') == 1) {
			$data['level'] = true;
		} else {
			$data['level'] = false;
		}
		$this->load->model('data_artikel');
		$limit_per_page = 3;
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;
		$total_records = $this->data_artikel->get_total();
		if ($total_records > 0) {
			$data['data_artikel'] = $this->data_artikel->get_artikels($limit_per_page, $start_index);

			$config['base_url'] = base_url() . 'blog/index';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config['uri_segment'] = 3;
			
			$this->pagination->initialize($config);
			
			$data['links'] = $this->pagination->create_links();
		}
		$this->load->view('template/header');
		$this->load->view('home_view', $data);
		$this->load->view('template/footer');
	}

	public function detail($id_blog)
	{
		if ($this->session->userdata('level') == 2) {
			$this->session->set_flashdata('not_allow', 'Anda hanya user biasa');
			redirect('blog');
		}
		$this->load->model('data_artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('template/header');
		$this->load->view('home_detail', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		// cek level apabila bukan admin tidak bisa mengakses form tambh
		if ($this->session->userdata('level') != 1) {
			$this->session->set_flashdata('not_allow', 'Gak boleh boss!');
			redirect('blog');
		}
		$this->load->model('data_artikel');
		$data = array();
    	$data['categories'] = $this->categorymodel->get_all_categories();

		$this->form_validation->set_rules('input_judul', 'Judul', 'required',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!'
			));

		$this->form_validation->set_rules('input_content', 'Konten', 'required|min_length[10]',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'min_length' 	=> 'Isi kolom %s kurang panjang'
			));
		$this->form_validation->set_rules('input_author', 'Author', 'required|alpha',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'alpha' 	=> 'Kolom %s hanya boleh diisi huruf'
			));
		$this->form_validation->set_rules('input_email', 'Email', 'required|valid_email',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'valid_email' 	=> 'Kolom %s harus diisi dengan format email'
			));
		$this->form_validation->set_rules('input_notelp', 'NoTelp', 'required|numeric',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'numeric' 	=> 'Kolom %s hanya boleh diisi angka'
			));
		$this->form_validation->set_rules('input_username', 'Username', 'required|is_unique[blog.username]',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'is_unique'		=> 'Isi dari kolom %s sudah ada'
			));
		$this->form_validation->set_rules('input_password', 'Password', 'required',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!'
			));
		$this->form_validation->set_rules('input_passconf', 'Password Konfirmasi', 'required|matches[input_password]',
			array(
				'required' 		=> 'Kolom %s tidak boleh kosong!',
				'matches'		=> 'Kolom %s tidak cocok dengan kolom Password'
			));

		if ($this->form_validation->run() === FALSE)
	    {
	    	$this->load->view('template/header');
	        $this->load->view('insert_blog', $data);
	        $this->load->view('template/footer');
	    } else {


			if ($this->input->post('submit')) {
				$upload = $this->artikel->upload();

				if ($upload['result'] == 'success') {
					$this->artikel->insert($upload);
					redirect('blog');
				}else{
					$data['message'] = $upload['error'];
				}
			}
			$this->load->view('template/header');
			$this->load->view('insert_blog', $data);
			$this->load->view('template/footer');
	    }
			
	}

	public function update($id_blog) {
		if ($this->session->userdata('level') != 1) {
			$this->session->set_flashdata('not_allow', 'Gak boleh boss!');
			redirect('blog');
		}
		$this->load->model('data_artikel');
		$data['single'] = $this->artikel->get_single($id);
		$data['categories'] = $this->categorymodel->get_all_categories();
		if ($this->input->post('update')) {
			$upload=$this->artikel->upload();
			$this->artikel->update($upload, $id);
			redirect('blog');
		}

		$this->load->view('template/header');
		$this->load->view('update_blog', $data);
		$this->load->view('template/footer');
	}

	public function delete($id_blog)
	{
		if ($this->session->userdata('level') != 1) {
			$this->session->set_flashdata('not_allow', 'Gak boleh boss!');
			redirect('blog');
		}
		$this->load->model('data_artikel');
		$this->artikel->delete($id);
		redirect('blog');
	}

	public function blog_kolom()
	{
		$this->load->model('data_artikel');
		$data['blog'] = $this->artikel->get_all_blogs();
		$this->load->view('template/header');
		$this->load->view('tampil_all_blog', $data);
		$this->load->view('template/footer');
	}



}
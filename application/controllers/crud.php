<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('mcrud');
		$this->gallery_path = realpath(APPPATH . '../assets/image/');
        $this->gallery_path_url = base_url() . 'assets/image/';
	}

	public function index()
	{
		$data['query'] = $this->mcrud->Get_crud();
		$this->load->view('halaman_crud', $data);
	}

	public function tambah()
	{
		$this->load->view('halaman_tambah');
	}

	public	function tambah_aksi($upload)
	{

		$config['upload_path'] = $this->gallery_path;
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']  = '2048';
	    $config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->do_upload('images');

    	$data = array
    	(
     	   	'judul' => $this->input->post('judul'),
       		'konten' => $this->input->post('konten'),
        	'images' => $this->upload->file_name,
        	'tgl_posting' => date('Y-m-d')
        );
    	$this->mcrud->insert($data);
    	redirect('crud');
	}

	public function hapus($id_blog)
	{
		$this->mcrud->hapus_data($id_blog);
		redirect('mcrud');
	}

	public function edit()
	{
		$data['data'] = $this->mcrud->Get_single($this->uri->segment(3));
		$this->load->view('halaman_edit',$data);
	}

	public function edit_aksi()
	{
		$id_blog = $this->input->post('id_blog');

		$this->mcrud->Hapus_gambar($id_blog);

		$config['upload_path'] = $this->gallery_path;
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $config['max_size']  = '2048';
	    $config['remove_space'] = TRUE;

		$this->load->library('upload', $config);
		$this->upload->do_upload('images');


		$data = array
		(
     	   	'judul' => $this->input->post('judul'),
       		'konten' => $this->input->post('konten'),
        	'images' => $this->upload->file_name,
        	'tgl_posting' => date('Y-m-d')
        );

		$where = array
		(
  			'id_blog' => $id_blog
 		);

 		$this->crud->update($where,$data,'blog');
 		redirect('mcrud');
	}
}

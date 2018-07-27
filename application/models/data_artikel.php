<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_artikel extends CI_Model {

	public function get_artikels($limit = FALSE, $offset = FALSE){
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		$query = $this->db->get('blog');
		return $query->result();
	}

	public function get_total()
	{
		return $this->db->count_all("blog");
	}

	public function get_all_blogs(){
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('category', 'blog.id_category = category.id_blog');
		return $this->db->get()->result();
	}	

	public function get_single($id)
	{
		$this->db->select('*');
		$this->db->from('blog');
		$this->db->join('category', 'blog.id_category = category.id_blog');
		$this->db->where('blog.id_blog='.$id);
		return $this->db->get()->result();
	}

	public function upload()
	{
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert($upload)
	{
		$data = array(
			'id_blog' => '',
			'judul' => $this->input->post('input_judul'),
			'konten' => $this->input->post('input_content'),
			'tgl_posting' => date("Y-m-d"),
			'image' => $upload['file']['file_name'],
			'author' => $this->input->post('input_author'),
			'email_author' => $this->input->post('input_email'),
			'no_telp' => $this->input->post('input_notelp'),
			'id_category' => $this->input->post('cat_id')
		);

		$this->db->insert('blog', $data);
	}

	public function update($upload, $id_blog){
		if ($upload['result']=='success') {
			$data = array(
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('content'),
				'image' => $upload['file']['file_name'],
				'author' => $this->input->post('input_author'),
				'email_author' => $this->input->post('input_email'),
				'no_telp' => $this->input->post('input_notelp'),
				'id_category' => $this->input->post('cat_id')
			);
		} else {
			$data = array(
				'judul' => $this->input->post('judul'),
				'konten' => $this->input->post('content'),
				'author' => $this->input->post('input_author'),
				'email_author' => $this->input->post('input_email'),
				'no_telp' => $this->input->post('input_notelp'),
				'id_category' => $this->input->post('cat_id')
			);
		}
		$this->db->where('id_blog', $id);
		$this->db->update('blog', $data);
	}

	public function delete($id_blog){
		$this->db->where('id_blog', $id);
		$this->db->delete('blog');
	}
}

/* End of file blog.php */
/* Location: ./application/models/blog.php */
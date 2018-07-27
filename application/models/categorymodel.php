<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model {

	public function get_all_categories()
    {
        // Urutkan berdasar abjad
        // $this->db->order_by('cat_name');

        $query = $this->db->get('category');
        return $query->result();
    }

    public function tambah()
	{
		$data = array(
			'cat_name' => $this->input->post('nama'),
			'cat_description' => $this->input->post('deskripsi'),
			'date_created' => date("Y-m-d")
		);

		$this->db->insert('category', $data);
	}

	public function get_single_category($id_category)
	{
		$query = $this->db->query('select * from category where id_category='.$id);
		return $query->result();
	}

	public function update($id_category)
	{
		$data = array(
		'cat_name' => $this->input->post('nama'),
		'cat_description' => $this->input->post('deskripsi')
		);
		$this->db->where('id_category', $id);
		$this->db->update('category', $data);
	}

	public function delete_category($id_category){
		$this->db->where('id_category', $id);
		$this->db->delete('category');
	}	

}
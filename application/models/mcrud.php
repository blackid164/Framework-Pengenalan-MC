<?php

class Mcrud extends CI_Model
{

	function Get_crud()
	{
		$query = $this->db->query('select * from blog');
		return $query->result();
	}
 
	function Insert($data)
	{
		$this->db->insert('blog', $data);
	}
	function Hapus_data($id_blog)
	{

		$row = $this->db->where('id_blog',$id_blog)->get('blog')->row();

		$this->db->where('id_blog', $id_blog);

		unlink('assets/image/'.$row->images);

		$this->db->delete('blog', array('id_blog' => $id_blog));
	}

	function Get_single($id)
	{
		$data = array();
		$options = array('id_blog' => $id);
		$Q = $this -> db -> get_where('blog',$options,1);
			if($Q->num_rows()>0)
			{
				$data = $Q->row_array();
			}
		$Q ->free_result();
		return $data; 
	}

	function edit($where,$table)
	{  
	 return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table)
	{
	  $this->db->where($where);
	  $this->db->update($table,$data);
	 } 

	function Hapus_gambar($id_blog)
	{

		$row = $this->db->where('id_blog',$id_blog)->get('blog')->row();

		$this->db->where('id_blog', $id_blog);

		unlink('assets/image/'.$row->images);
	}
}
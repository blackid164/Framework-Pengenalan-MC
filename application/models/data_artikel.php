<?php

class Data_artikel extends CI_Model
{

	public function Get_artikel()
	{
		$query = $this->db->query('select * from blog');
		return $query->result();
	}
}
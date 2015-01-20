<?php
class Product_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}
	public function getRows($sql)
	{
		$rs=$this->db->query($sql);
		return $rs->num_rows();
	}
}
?>
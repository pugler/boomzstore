<?php
class Store extends CI_Controller
{

/* --- End Load Construct --- */
	public function __construct()
	{
		parent::__construct();
	}
/* --- End Load Construct --- */

/* --- Start Load Index --- */
	public function index()
	{

		$this->load->view("store/index");
	}
/* --- End Load Index --- */

}
?>
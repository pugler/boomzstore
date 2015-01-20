<?php
class Contact_us extends CI_Controller
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

		$this->load->view("contact_us/index");
	}
/* --- End Load Index --- */

}
?>
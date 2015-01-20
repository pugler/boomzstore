<?php
class Enewsletter extends CI_Controller
{

/* --- Start Load Construct --- */
	public function __construct()
	{
		parent::__construct();
	}
/* --- End Load Construct --- */

/* --- Start Load Index --- */
	public function index()
	{
		$this->load->view("enewsletter/index");
	}
/* --- End Load Index --- */

/* --- Start Submit E-News--- */
	public function add()
	{
		if($this->input->post("btsave")!=null)
		{
			$ar=array(
				"name"=>$this->input->post("name"),
				"lastname"=>$this->input->post("lastname"),
				"email"=>$this->input->post("email"),
				"e_promotion"=>$this->input->post("e_promotion"),
				"e_news"=>$this->input->post("e_news"),
				"e_articles"=>$this->input->post("e_articles"),
				"getIP"=>($_SERVER['REMOTE_ADDR']),
				"create_date"=>date('Y-m-d H:i:s'),
				"modify_date"=>date('Y-m-d H:i:s')
			);
			$this->db->insert("enewsletter",$ar);
			redirect("enewsletter/success","refresh");
			exit();
		}
		
		$this->load->view("enewsletter/add");
	}
/* --- End Add --- */

/* --- Start Load Index --- */
	public function success()
	{

		$this->load->view("enewsletter/success");
	}
/* --- End Load Index --- */

}
?>
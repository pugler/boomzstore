<?php
class Sess extends CI_Controller
{

/* --- End Load Construct --- */
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
	}
/* --- End Load Construct --- */

/* --- Start Load Index --- */
	public function index()
	{
		if ($this->input->post("bt")!=null)
		{
			if ($this->input->post("username")=="admin" && $this->input->post("password")=="admin")
			{
				$ar=array(
					"mysess_id"=>$this->input->post("username")
				);
				$this->session->set_userdata($ar);
			}
		}
		if ($this->session->userdata("mysess_id")==null)
		{
			$data['sess']=$this->form();
		}
		else
		{
			$data['sess']=$this->session->userdata("mysess_id")." ".anchor("sess/logout","Logout",array("class"=>"logout", "onclick"=>"javascript:return confirm ('Are you want Log out ?');"));
		}
		$this->load->view("sess/check_sess",$data) ;
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ("sess","refresh");
		exit();
	}
	
	private function form()
	{
		$frm="<form method='post' action=''>";
		$frm.="<p>Username : <input type='text' name='username' value=''/> ";
		$frm.="<p>Password : <input type='password' name='password' value=''/> ";
		$frm.="<p><input type='submit' name='bt' value='submit'/> ";
		$frm.="</form>";
		return $frm;
	}
/* --- End Load Index --- */

}
?>
<?php
class Member extends CI_Controller
{

/* --- Start Load Construct --- */
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library("session");
		
		
	}
/* --- End Load Construct --- */

/* --- Start Load Index --- */
	public function index()
	{
		$this->load->view("member/index");
	}
/* --- End Load Index --- */

/* --- Start Add Member --- */
	public function add()
	{
		if($this->input->post("btsave")!=null)
		{
			$ar=array(
				"username"=>$this->input->post("username"),
				"password1"=>$this->input->post("password1"),
				"password2"=>$this->input->post("password2"),
				"name"=>$this->input->post("name"),
				"lastname"=>$this->input->post("lastname"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"city"=>$this->input->post("city"),
				"province"=>$this->input->post("province"),
				"postalcode"=>$this->input->post("postalcode"),
				"email"=>$this->input->post("email"),
				"mobile"=>$this->input->post("mobile"),
				"e_promotion"=>$this->input->post("e_promotion"),
				"e_news"=>$this->input->post("e_news"),
				"e_articles"=>$this->input->post("e_articles"),
				"getIP"=>($_SERVER['REMOTE_ADDR']),
				"create_date"=>date('Y-m-d H:i:s'),
				"modify_date"=>date('Y-m-d H:i:s')
			);
			$this->db->insert("member",$ar);
			redirect("member/success","refresh");
			exit();
		}
		$this->load->view("member/add");
	}
/* --- End Add --- */


/* --- Start Load Index --- */
	public function success()
	{

		$this->load->view("member/success");
	}
/* --- End Load Index --- */



/* --- Start Load Index --- */
	public function login()
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
			$data['login']=$this->form();
		}
		else
		{
			$data['login']=$this->session->userdata("mysess_id")." ".anchor("member/logout","ออกจากระบบ",array("class"=>"logout", "onclick"=>"javascript:return confirm ('คุณต้องการออกจากระบบ?');"));
		}
		$this->load->view("member/login",$data) ;
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ("member/login","refresh");
		exit();
	}
	
	private function form()
	{
		$frm="<form method='post' action=''>";
		$frm.="<p>ชื่อผู้ใช้งาน : <input type='text' name='username' value=''/> ";
		$frm.="รหัสผ่าน : <input type='password' name='password' value=''/> ";
		$frm.="<input type='submit' name='bt' value='เข้าสู่ระบบ'/></p> ";
		$frm.="</form>";
		return $frm;
	}
/* --- End Load Index --- */

/* --- Start Load Register --- */
	public function register()
	{

		$this->load->view("member/register");
	}
/* --- End Load Register --- */

}
?>
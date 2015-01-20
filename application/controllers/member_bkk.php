<?php
class Member extends CI_Controller
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

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."index.php/member/index";
		$config['per_page']=5;
		$config['total_rows']=$this->db->count_all("member");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select 2 data order by 0-2 from table member 
		$rs=$this->db->get("member",2,0); 
		$data['rs']=$rs->result_array();
	--- */

	/* --- Select 1 data by identical from table member 
	    $id="10";
		$rs=$this->db->get_where("member",array("id"=>$id)); 
		$data['rs']=$rs->result_array();
	--- */

	/* --- Select Some data by identical position from table member 
	    $this->db->select("id,member_name,member_tel");
		$rs=$this->db->get("member"); 
		$data['rs']=$rs->result_array();
	--- */

	/* --- Select All database from table member --- Long Code format 
		$rs=$this->db->get("member"); 
		$data['rs']=$rs->result_array(); 
	--- */

	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->select("id,member_name,member_tel,member_address")->from("member")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("member/index",$data);
	}
/* --- End Load Index --- */

/* --- Start Add --- */
	public function add()
	{
		if($this->input->post("btsave")!=null)
		{
			$ar=array(
				"member_name"=>$this->input->post("member_name"),
				"member_tel"=>$this->input->post("member_tel"),
				"member_address"=>$this->input->post("addr")
			);
			$this->db->insert("member",$ar);
			redirect("member","refresh");
			exit();
		}
		$this->load->view("member/add");
	}
/* --- End Add --- */

/* --- Start Edit --- */
	public function edit($id)
	{
		if($this->input->post("btsave")!=null)
		{
			$ar=array(
				"member_name"=>$this->input->post("member_name"),
				"member_tel"=>$this->input->post("member_tel"),
				"member_address"=>$this->input->post("addr")
			);
			$this->db->where("id",$id);
			$this->db->update("member",$ar);
			redirect("member","refresh");
			exit();
		}
		$sql="Select * from member where id='$id'";
		$rs=$this->db->query($sql);

		if($rs->num_rows()==0)
		{
			$data['rs']=array();
		}
		else
		{
			$data['rs']=$rs->row_array();
		}
		$this->load->view("member/edit",$data);
	}
/* --- End Edit --- */

/* --- Start Delete --- */
	public function del($id)
	{
		$this->db->delete("member",array('id'=>$id));
		redirect("member","refresh");
		exit();
	}
/* End Delete */

/* --- Start Load Login --- */
	public function login()
	{

		$this->load->view("member/login");
	}
/* --- End Load Login --- */

/* --- Start Load Register --- */
	public function register()
	{

		$this->load->view("member/register");
	}
/* --- End Load Register --- */

}
?>
<?php
class Home extends CI_Controller
{

/* --- End Load Construct --- */
	public function __construct()
	{
		parent::__construct();
	}
/* --- End Load Construct --- */

/* --- Start Load Index Normal --- */
	/*  public function index()
	{

		$this->load->view("home/index");
	}
	*/
	
/* --- Start Load Index --- */
	public function index()
	{

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

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,news_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("news")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */

	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('news_type','General')->from("news")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs2']=$this->db->where('news_type','Events')->from("news")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs3']=$this->db->where('news_type','Promotion')->from("news")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs4']=$this->db->where('news_type','Feature')->from("news")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs5']=$this->db->where('article_type','Mobile')->from("articles")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs6']=$this->db->where('article_type','Computer')->from("articles")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs7']=$this->db->where('article_type','Game')->from("articles")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs8']=$this->db->where('article_type','Camera')->from("articles")->order_by('id','DESC')->limit(3)->get()->result_array();
		$data['rs9']=$this->db->where('article_type','Review')->from("articles")->order_by('id','DESC')->limit(3)->get()->result_array();
		
		$this->load->view("home/index",$data);
	}
/* --- End Load Index --- */

/* --- Start Load Index --- */
	public function index_news()
	{

		$this->load->view("home/index_news");
	}
/* --- End Load Index --- */

}
?>
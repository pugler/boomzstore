<?php
class News extends CI_Controller
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
		$config['base_url']=base_url()."/news/index";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('news')->where('news_type','General')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("news");
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

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,news_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("news")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */

	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('news_type','General')->from("news")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("news/index",$data);
	}
/* --- End Load Index --- */

/* --- Start Load Event --- */
	public function events()
	{

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."/news/events";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('news')->where('news_type','Events')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("news");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,news_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("news")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */

	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('news_type','Events')->from("news")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("news/events",$data);
	}
/* --- End Load Event --- */

/* --- Start Load Promotion Story --- */
	public function promotion()
	{

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."/news/promotion";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('news')->where('news_type','Promotion')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("news");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,news_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("news")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */

	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('news_type','Promotion')->from("news")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("news/promotion",$data);
	}
/* --- End Load Promotion Story --- */

/* --- Start Load Feature Story --- */
	public function feature()
	{

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."/news/feature";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('news')->where('news_type','Feature')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("news");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,news_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("news")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */

	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('news_type','Feature')->from("news")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("news/feature",$data);
	}
/* --- End Load Feature Story --- */

/* --- Start Load New Detail --- */
	public function news_detail( $news_id )
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('id',$news_id);
		$db_get = $this->db->get();
		$data['rs'] = $db_get->result_array();
		
		$this->load->view("news/news_detail",$data);
	}
/* --- End Load New Detail --- */

}
?>
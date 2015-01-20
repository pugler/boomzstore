<?php
class Articles extends CI_Controller
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
		$config['base_url']=base_url()."/articles/index";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('articles')->where('article_type','Mobile')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("articles");
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
		$data['rs']=$this->db->select("id,article_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("articles")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */
		
	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('article_type','Mobile')->from("articles")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("articles/index",$data);
	}
/* --- End Load Index --- */

/* --- Start Load Computer --- */
	public function computer()
	{

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."/articles/index";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('articles')->where('article_type','Computer')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("articles");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,article_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("articles")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */
		
	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('article_type','Computer')->from("articles")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("articles/computer",$data);
	}
/* --- End Load Computer --- */

/* --- Start Load Game --- */
	public function game()
	{

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."/articles/index";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('articles')->where('article_type','Game')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("articles");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,article_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("articles")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */
		
	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('article_type','Game')->from("articles")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("articles/game",$data);
	}
/* --- End Load Game --- */

/* --- Start Load Camera --- */
	public function camera()
	{

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."/articles/index";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('articles')->where('article_type','Camera')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("articles");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,article_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("articles")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */
		
	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('article_type','Camera')->from("articles")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("articles/camera",$data);
	}
/* --- End Load Camera --- */

/* --- Start Load Review --- */
	public function review()
	{

	/* --- Start Load Pagination ---*/
		$this->load->library("pagination");

		/* --- Set Number list Pagination ---*/
		$config['base_url']=base_url()."/articles/index";
		$config['per_page']=5;
		$config['total_rows']=$this->db->select('*')->from('articles')->where('article_type','Review')->count_all_results();
		
		//$config['total_rows']=$this->db->count_all("articles");
		/* --- End Number list Pagination ---*/

		/* --- Set Class Pagination ---*/
		$config['full_tag_open']="<div class='pagination'>";
		$config['full_tag_close']="</div>";
		/* --- End Class Pagination ---*/

		$this->pagination->initialize($config);

	/* --- End Load Library Pagination ---*/

	/* --- Select All database from table member --- Short Code format by CI Chaining 
		$data['rs']=$this->db->select("id,article_type,title_th,caption_th,content_th,keywords,modified_by,modified")->from("articles")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array(); --- */
		
	/* --- Select All database from table member --- Short Code format by CI Chaining --- */
		$data['rs']=$this->db->where('article_type','Review')->from("articles")->order_by('id','DESC')->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();

		$this->load->view("articles/review",$data);
	}
/* --- End Load Review --- */

/* --- Start Load Articles Detail --- */
	public function articles_detail( $articles_id )
	{
		$this->db->select('*');
		$this->db->from('articles');
		$this->db->where('id',$articles_id);
		$db_get = $this->db->get();
		$data['rs'] = $db_get->result_array();
		
		$this->load->view("articles/articles_detail",$data);
	}
/* --- End Load Articles Detail --- */

/* --- Start Load Code News Zapzaa --- */
	public function code_article_xvlnw()
	{

		$this->load->view("articles/code_article_xvlnw");
	}
/* --- End Load Code News Zapzaa --- */

}
?>
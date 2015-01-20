<?php
class Upload extends Controller
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

		$this->load->view("upload/upload_news");
	}
/* --- End Load Index --- */

/* --- Start Load Index --- */
	public function upload_news()
	{
		$config['upload_path']="../public/img/news"; 
		$config['allowed_types']="jpg|gif|png"; // ชนิดของไฟล์
		$config['max_size']=500; // ขนาดไฟล์สูงสุด kb
		$config['max_height']=800; // ความสูง
		$config['max_width']=600; // ความกว้าง
		
		$this->load->library("upload");
		$this->upload->initialize($config);
		
		if($this->upload->do_upload("picture")) // ถ้าอัพโหลดไม่มีปัญหา
		{
			$data=$this->upload->data();
			rename($data['full_path'],$data['file_path'].date("YmdHis").$data['file_ext']);
			//print_r($data); //แสดงข้อมูลออกมาทางจอ
			$config['source_image']="http://www.boomzstore.com/public/img/news/".date("YmdHis").$data['file_ext'];
			
			echo img($config['source_image']);
			echo ('</br>');
			echo ('</br> URL : ');
			echo ($config['source_image']);
			
		}
		else
		{
			echo $this->upload->display_errors();
		}
	}
/* --- End Load Index --- */

/* --- Start Load Index --- */
	public function upload_art()
	{
		$config['upload_path']="../public/img/articles"; 
		$config['allowed_types']="jpg|gif|png"; // ชนิดของไฟล์
		$config['max_size']=500; // ขนาดไฟล์สูงสุด kb
		$config['max_height']=800; // ความสูง
		$config['max_width']=600; // ความกว้าง
		
		$this->load->library("upload");
		$this->upload->initialize($config);
		
		if($this->upload->do_upload("picture")) // ถ้าอัพโหลดไม่มีปัญหา
		{
			$data=$this->upload->data();
			rename($data['full_path'],$data['file_path'].date("YmdHis").$data['file_ext']);
			//print_r($data); //แสดงข้อมูลออกมาทางจอ
			$config['source_image']="http://www.boomzstore.com/public/img/articles/".date("YmdHis").$data['file_ext'];
			
			echo img($config['source_image']);
			echo ('</br>');
			echo ('</br> URL : ');
			echo ($config['source_image']);
			
		}
		else
		{
			echo $this->upload->display_errors();
		}
	}
/* --- End Load Articles --- */

}
?>
<?php

class Articles extends Controller {

    function Articles()
    {
			parent::Controller();
			if(!$this->session->userdata('active')) redirect('/'); // check Login
			$this->table	= 'articles';
			$this->title	= 'Articles';
			$this->viewFolder = $this->router->class;
			
			/** Categories */
			$this->cate	= array('Mobile','Computer','Game','Camera','Review');
    }

    function index()
    {
		$data['title']		= 'Articles';
		$data['content']	= $this->viewFolder.'/all';
		$data['imgTitle']	= 'newspaper.png'; // img status level 2
		$data['txtTitle']	= $this->title; // text title status level 2
		$data['table']		= $this->table;

		/** Pagination */
		$config['base_url']		= base_url().'/'.$this->router->class.'/'.$this->router->method;
		$config['total_rows']	= $this->db->get_where($this->table, array('is_delete'=>'no'))->num_rows();
		$config['per_page']		= 40;
		$config['num_links']	= 5;
		$config['full_tag_open']	= '<div id="pagination">';
		$config['full_tag_close']	= '</div>';

		$this->pagination->initialize($config);
		$this->db->order_by("created", "desc");
		$query = $this->db->get_where($this->table, array('is_delete'=>'no'), $config['per_page'], $this->uri->segment(3));
		
		$data['num_rows']	= $config['total_rows'];
		$data['result']		= $query->result();
		
		/** Categories */
		$data['cate']		= $this->cate;

		$this->load->view('layouts/layout', $data);
    }

	function addnew()
	{
		if($_POST) {
			if(trim($this->input->post('title_th'))!='') {
				$this->insert_model->insertArticles();
				redirect($this->router->class);
			} else {
				$data['error'] = 'ไม่สามารถเพิ่มข้อมูลได้';
			}
		}

		$data['txtTitle']	= 'Add: Article > '.$this->title; // text title status level 2
		$data['title']		= $this->title;
		$data['imgTitle']	= 'add.png'; // img status level 2
		$data['content']	= $this->viewFolder.'/addnew';
		$this->load->view('layouts/layout', $data);
	}

	function edit($id)
	{
		if($_POST) {

			if(trim($this->input->post('title_th'))!='') {
				$this->update_model->updateArticles($this->table, $id);
				$data['complete']	= 'แก้ไขข้อมูลสำเร็จ';
			} else {
				$data['error']		= 'แก้ไขข้อมูลไม่สำเร็จ';
			}
		}

		/** Get Data for Edit */			
		$query = $this->db->get_where($this->table, array('id' => $id));
		$data['result']		= $query->row();

		$data['txtTitle']	= 'Edit: Article > '.$data['result']->title_th; // text title status level 2
		$data['title']		= $this->title;
		$data['imgTitle']	= 'page_edit.png'; // img status level 2
		$data['content']	= $this->viewFolder.'/edit';
		$data['table']		= $this->table;

		$this->load->view('layouts/layout', $data);
	}

	/* --- Start Delete --- */
	public function del($id)
	{
		$this->db->delete("articles",array('id'=>$id));
		redirect("articles","refresh");
		exit();
	}
	/* End Delete */

}
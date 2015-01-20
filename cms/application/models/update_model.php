<?php
class Update_model extends Model {

    function Update_model() {
        parent::Model();
    }


	function updateNews($table, $where) 
	{
		if($this->input->post('is_show')) $is_show = "active";
		else $is_show = "deleted";
            
		$data_post = array(
			'news_type'	=> $this->input->post('news_type'),
            //'thumbnail'			=> $this->input->post('thumb'),
			'url_pic_small'	=> $this->input->post('url_pic_small'),
			'url_pic'			=> $this->input->post('url_pic'),
            'title_th'			=> $this->input->post('title_th'),
			'caption_th'		=> $this->input->post('caption_th'),
			'content_th'		=> $this->input->post('detail_th'),
			'keywords'			=> $this->input->post('keywords'),
			'is_show'           => $is_show,
            'modified_by'       => $this->session->userdata('fullname'),
            'modified'          => date('Y-m-d H:i:s')
		);

		$this->db->where('id', $where);
		$this->db->update('news', $data_post);
	}


	function updateArticles($table, $where) 
	{
		if($this->input->post('is_show')) $is_show = "active";
		else $is_show = "deleted";
            
		$data_post = array(
			'article_type'		=> $this->input->post('article_type'),
            //'thumbnail'			=> $this->input->post('thumb'),
			'url_pic_small'	=> $this->input->post('url_pic_small'),
			'url_pic'			=> $this->input->post('url_pic'),
			'url_pic2'			=> $this->input->post('url_pic2'),
			'url_pic3'			=> $this->input->post('url_pic3'),
			'url_pic4'			=> $this->input->post('url_pic4'),
            'title_th'			=> $this->input->post('title_th'),
			'caption_th'		=> $this->input->post('caption_th'),
			'owner_th'			=> $this->input->post('owner_th'),
			'content_th'		=> $this->input->post('detail_th'),
			'review_th'			=> $this->input->post('review_th'),
			'keywords'			=> $this->input->post('keywords'),
			'is_show'           => $is_show,
            'modified_by'       => $this->session->userdata('fullname'),
            'modified'          => date('Y-m-d H:i:s')
		);

		$this->db->where('id', $where);
		$this->db->update('articles', $data_post);
	}
}

?>
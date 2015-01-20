<?php
class Login_model extends Model {

    function Login_model() {
        parent::Model();
    }

    function checkLogin() {
			$this->db->where('username', trim($this->input->post('username')));
			$this->db->where('password', trim($this->input->post('password')));
			$this->db->where('rec_status', 'active');
			$query	= $this->db->get('bk_admin');
			$item	= $query->row();	
			
			if($query->num_rows() >0) {
				$data_login = array(
								'active'	=> true,
								'id'		=> $item->id,
								'fullname'	=> $item->fullname,
								'role'		=> $item->role
							);
				$this->session->set_userdata($data_login);
				return true;
			} else {
				return false;				
			}

    }

}

?>
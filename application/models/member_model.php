<?php
class Member_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}
	function check_captcha($param)
	{		
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($param['captcha'], $this->input->ip_address(), $param['expiration']);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();
		
		if($row->count > 0 ) {
			return true;
		}else {
			return false;
		}		
	}
	
	function insert_member($param) {
		if($this->db->insert("member_info",$param)) {
			return true;
		}else {
			return false;
		}
	}
	
	function verify_member($param) {
		$member_email = $param['member_email'];
				
		$where = array(
					'email' => $member_email
				);
		$data = array(               
					'status' => MEMBER_STATUS,
					'modify_date' => date('Y-m-d H:i:s')
				);
		
		return $this->update_member_status($where,$data);
	}
	
	function update_member_status($where,$data) {
		
		if(!empty($where['email']) || !empty($where['id'])) {
			if(!empty($where['email'])) {
				$this->db->where('email', $where['email']);
			}
			if(!empty($where['id'])) {
				$this->db->where('id', $where['id']);
			}
		}else {
			echo "ไม่พบสมาชิกที่ต้องการแก้ไขข้อมูล!";
			die;
		}		
		
		return $this->db->update('member_info', $data); 
	}
	
	function check_authen($param) {
		$email = $param['email'];
		$password = $param['password'];
		
		$this->db->select('*');
		$this->db->from('member_info');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$query = $this->db->get();
		$result = $query->row_array();
		
		return $result;
	}
	
	function get_authen() {
		$this->load->helper('cookie');
		
		$member_cookie = $this->input->cookie("member_info");
		if(!empty($member_cookie)) {
			$authen_data = json_decode(base64_decode($member_cookie));		
			$this->db->select('*');
			$this->db->from('member_info');
			$this->db->where('id',$authen_data->id);
			$query = $this->db->get();
			$result = $query->row_array();			
			return $result;
		}else {
			return false;
		}
	}
	
	function set_authen($member_info) {
		$this->load->helper('cookie');
		
		$member['id'] = $member_info['id'];
		$member['email'] = $member_info['email'];
		$member['firstname'] = $member_info['firstname'];
		$member['status'] = $member_info['status'];
				
		$this->input->set_cookie("member_info", base64_encode(json_encode($member)), 7*24*60*60 );		
		
		return;
	}
	
	function editprofile($param) {
		$member_info = $this->get_authen();
		$this->db->where('id',$member_info['id']);
		return $this->db->update('member_info', $param); 
		
	}
	
}
?>
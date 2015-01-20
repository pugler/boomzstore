<?php
class Member_new extends CI_Controller
{

/* --- Start Load Construct --- */
	public function __construct() {
		parent::__construct();
		$this->load->helper('cookie');
		$this->load->model('member_model');
	}
	
	function login() {
		
		$this->load->view("member_new/login") ;
	}
	
	function logout() {
		delete_cookie("member_info");
		redirect(base_url());
	}
	
	function submit_login() {
		
		if(!empty($_POST)) {
			$param['email'] = $this->input->post("email");
			$param['password'] = $this->input->post("password");
			
			$member_info = $this->member_model->check_authen($param);
			
			if(!empty($member_info)) {
				$this->member_model->set_authen($member_info);
				redirect(base_url()."member/profile");
				
			}else {
				echo "login failed";
				die;
			}
			
			
		}else {
			echo "login failed";
			die;
		}
		
		
	}
	
	function profile() {
		
		$member_info = $this->member_model->get_authen();
		$data['member_info'] = $member_info;
		
		$this->load->view("member_new/profile",$data);
	}
	
	function editprofile() {
		$member_info = $this->member_model->get_authen();
		$data['member_info'] = $member_info;
		$this->load->view("member_new/editprofile",$data);
	}
	
	function submit_editprofile() {
		
		$param['firstname'] = $_POST['firstname'];
		$param['surname'] = $_POST['surname'];
		$param['sex'] = $_POST['sex'];
		$param['birthdate'] = $_POST['byear']."-".$_POST['bmonth']."-".$_POST['bdate'];
		$param['address'] = $_POST['address'];
		$param['sub_district'] = $_POST['sub_district'];
		$param['district'] = $_POST['district'];
		$param['province'] = $_POST['province'];
		$param['postcode'] = $_POST['postcode'];
		$param['mobile_no'] = $_POST['mobile'];
		$param['telephone_no'] = $_POST['tel'];
		$param['career'] = $_POST['career'];
		
		$editprofile = $this->member_model->editprofile($param);
		
		if($editprofile) {
			redirect(base_url()."member/profile");
		}else {
			redirect(base_url()."member/editprofile");
		}
		
	}


}
?>
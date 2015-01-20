<?php
class Register extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		
		$this->load->library("session");
		$this->load->helper('cookie');
		
		
	}

	public function index($step=1)
	{
		switch($step) {
			case 1 : 
				$this->load->helper("captcha");		
				$vals = array(			
					'img_path' => './public/captcha/',
					'img_url' => base_url().'public/captcha/',
					'img_width' => 100,
					'img_height' => 40
					);
				$cap = create_captcha($vals);				
				$data = array(
					'captcha_time' => $cap['time'],
					'ip_address' => $this->input->ip_address(),
					'word' => $cap['word']
					);				
				$return['captcha'] = $cap;
				$query = $this->db->insert_string('captcha', $data);
				$this->db->query($query);				
				$this->load->view("member_new/register1",$return);
			break;
			
			case 2 :
				$this->load->view("member_new/register2");
			break;
		}
		
	}
/* --- End Load Index --- */

	function add($step) {
	
		$this->load->model('member_model');
		
		switch($step) {
			case 1 :
				$param['email'] = $this->input->post("email");
				$param['password'] = $this->input->post("password");
				$param['captcha'] = $this->input->post("captcha");
				
				// First, delete old captchas
				$param['expiration'] = time()-7200; // Two hour limit			

				// Then see if a captcha exists:
				$check_captcha = $this->member_model->check_captcha($param);
				
				if (!$check_captcha) 				{
					//echo "You must submit the word that appears in the image"; die;
					redirect("register?wrongcaptcha","refresh");
				}else {
					$register_info = array(
									"email" => $param['email'],
									"password" => $param['password']
								);
					$this->input->set_cookie("register_info", json_encode($register_info), 60*60 );
					redirect("register/2");
				}								
						
			break;
			
			case 2 :
				if(!isset($_COOKIE['register_info']) || empty($_COOKIE['register_info'])){
					redirect("register");
				}else {
					$register_info = json_decode($_COOKIE['register_info'],true);
					$param = array(
						'email' 	=> $register_info['email'],
						'password'	=> md5($register_info['password']),
						'firstname'	=> $_POST['firstname'],
						'surname'	=> $_POST['surname'],
						'sex'		=> $_POST['sex'],
						'birthdate'	=> $_POST['byear']."-".$_POST['bmonth']."-".$_POST['bdate'],
						'address'	=> $_POST['address']." ".$_POST['village']." ".$_POST['soi']." ".$_POST['street'],
						'sub_district' => $_POST['sub_district'],
						'district'	=> $_POST['district'],
						'province'	=> $_POST['province'],
						'country' 	=> $_POST['country'],
						'postcode'	=> $_POST['postcode'],
						'mobile_no' => $_POST['mobile'],
						'telephone_no' => $_POST['tel'],
						'career'	=> $_POST['career'],
						'revenue'	=> $_POST['revenue'],
						'register_date' => date('Y-m-d H:i:s'),
						'accept_newsletter' => empty($_POST['accept_newsletter'])? "0" : "1"
					);					
					
					if($this->member_model->insert_member($param)) {
						$mail_data['subject'] = "ขอบคุณที่สมัครสมาชิก และร่วมเป็นส่วนหนึ่งกับ BoomzStore ของเรา ";
						$mail_data['message'] = $this->register_mail(array('email' => $register_info['email'] , 'password' => $register_info['password'])); 
						$mail_data['email'] = $register_info['email'];
						$this->sendmail($mail_data);					
						redirect("register/finish");
					}else {
						echo "เกิดข้อผิดพลาด โปรดลองใหม่!";
					}					
				}
				
			break;
		}
	}
	
	function finish() {
		$this->load->view("member_new/register_finish");
	}
	
	function verify($param) {
		$this->load->model('member_model');
		$data['member_email'] = base64url_decode($param);
		$verify = $this->member_model->verify_member($data);
		
		if($verify) {
			$data['register_msg'] = '<p class="grey">ยืนยันการสมัครสมาชิกเรียบร้อย (Verify Account Successfully)</p>
						<p class="red">ท่านสามารถล็อกอินเพื่อเข้าสู่ระบบ</p>';						
			
		}else {
			$data['register_msg'] = '<p class="red">การยืนยันการสมัครสมาชิกไม่ถูกต้อง</p>';
		}
		
						
		$this->load->view("member_new/register_finish",$data);
		
		
	}
	
	function register_mail($param) {
		//$this->load->view("member_new/register_mail");
		$msg = '<table style="width: 100%; padding: 5px;">
		<tr style="background-color: #e1e5e8; ">
			<td style="color: #f13a01;border: 1px solid #cccccc; border-radius: 3px; padding: 5px;">ยินดีต้อนรับสมาชิกใหม่</td>
		</tr>
		<tr>
			<td style="padding: 10px 30px;">
				ขอบคุณที่สมัครสมาชิก และร่วมเป็นส่วนหนึ่งกับ BoomzStore ของเรา <br/>
				รายละเอียดบัญชีสมาชิกของท่านคือ : <br/>
				---------------------------------------- <br/>
				<span style="color: #f13a01;">Username : '.$param['email'].' </span><br/>
				<span style="color: #f13a01;">Password : '.$param['password'].' </span><br/>			
				----------------------------------------<br/>
				ท่านต้องยืนยันการสมัครสมาชิกก่อน จึงจะทำการล๊อกอินเข้าสู่ระบบได้ <br/><br/>
				
				<span style="color: #f13a01;">กรุณาคลิกที่ลิงก์ด้านล่างนี้เพื่อทำการยืนยัน </span><br/>
				Link <a href="'.base_url().'register/verify/'.base64url_encode($param['email']).'">'.base_url().'register/verify/'.base64url_encode($param['email']).'</a> <br/><br/>
				
				ท่านจะได้รับสิทธิประโยชน์ต่างๆ ดังนี้ <br/>
				1. เข้าร่วมกิจกรรม และรับส่วนลดพิเศษต่างๆ <br/>
				2. รับอีเมล์อัพเดทข่าวสารไอที และโปรโมชั่นต่างๆ <br/>
				3. ประกาศ ซื้อ - ขาย ฟรี!
				<br/>
				
			</td>
		</tr>
		<tr style="background-color: #e1e5e8; ">
			<td style="border: 1px solid #cccccc; border-radius: 3px; padding: 5px;">ขอบคุณที่มาเป็นส่วนหนึ่งกับเรา <a href="<?=base_url()?>"><?=base_url()?></a></td>
		</tr>
	</table>';
	
	return $msg;
	
	}
	
	function check_email() {
		$email = urldecode($_GET['email']);
		
		$sql = "SELECT * FROM member_info WHERE email = ?";
		$query = $this->db->query($sql,array($email));
		$row = $query->num_rows();
		
		if ($row == 0){
			echo "true";
		}else {
			echo "false";
		}
	}	
	
	function check_captcha() {
		$captcha = $_GET['captcha'];
				
		// First, delete old captchas
		$expiration = time()-7200; // Two hour limit
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);

		// Then see if a captcha exists:
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($captcha, $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->row();

		if ($row->count == 0){
			echo "false";
		}else {
			echo "true";
		}
	}
	
	private function sendmail($param) {
		
		$email = $param['email'];
		$subject = $param['subject'];
		$message = $param['message'];
		
		$this->load->library('email');
		
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		
		$this->email->initialize($config);
		
		$this->email->from('noreply@boomzstore.com', 'BoomzStore');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();		
		
	}
	
	
	

/* --- Start Add Member --- */
	public function add_a()
	{
		if($this->input->post("btsave")!=null)
		{
			$ar=array(
				"username"=>$this->input->post("username"),
				"password1"=>$this->input->post("password1"),
				"password2"=>$this->input->post("password2"),
				"name"=>$this->input->post("name"),
				"lastname"=>$this->input->post("lastname"),
				"address"=>$this->input->post("address"),
				"district"=>$this->input->post("district"),
				"city"=>$this->input->post("city"),
				"province"=>$this->input->post("province"),
				"postalcode"=>$this->input->post("postalcode"),
				"email"=>$this->input->post("email"),
				"mobile"=>$this->input->post("mobile"),
				"e_promotion"=>$this->input->post("e_promotion"),
				"e_news"=>$this->input->post("e_news"),
				"e_articles"=>$this->input->post("e_articles"),
				"getIP"=>($_SERVER['REMOTE_ADDR']),
				"create_date"=>date('Y-m-d H:i:s'),
				"modify_date"=>date('Y-m-d H:i:s')
			);
			$this->db->insert("member",$ar);
			redirect("member/success","refresh");
			exit();
		}
		$this->load->view("member/add");
	}
/* --- End Add --- */


/* --- Start Load Index --- */
	public function success()
	{

		$this->load->view("member/success");
	}
/* --- End Load Index --- */



/* --- Start Load Index --- */
	public function login()
	{
		if ($this->input->post("bt")!=null)
		{
			if ($this->input->post("username")=="admin" && $this->input->post("password")=="admin")
			{
				$ar=array(
					"mysess_id"=>$this->input->post("username")
				);
				$this->session->set_userdata($ar);
			}
		}
		if ($this->session->userdata("mysess_id")==null)
		{
			$data['login']=$this->form();
		}
		else
		{
			$data['login']=$this->session->userdata("mysess_id")." ".anchor("member/logout","ออกจากระบบ",array("class"=>"logout", "onclick"=>"javascript:return confirm ('คุณต้องการออกจากระบบ?');"));
		}
		$this->load->view("member/login",$data) ;
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect ("member/login","refresh");
		exit();
	}
	
	private function form()
	{
		$frm="<form method='post' action=''>";
		$frm.="<p>ชื่อผู้ใช้งาน : <input type='text' name='username' value=''/> ";
		$frm.="รหัสผ่าน : <input type='password' name='password' value=''/> ";
		$frm.="<input type='submit' name='bt' value='เข้าสู่ระบบ'/></p> ";
		$frm.="</form>";
		return $frm;
	}
/* --- End Load Index --- */

/* --- Start Load Register --- */
	public function register()
	{

		$this->load->view("member/register");
	}
/* --- End Load Register --- */

}
?>

		<?php $this->load->view("template_new/header"); ?>
		
			
			<!--------------------------- box_content ------------------------------>
			<div id="register1-page-content" class="register-page box_content">
				<div id="register-bar">
					<div class="bar-name">
						<h1><span>สมัครสมาชิก (Create an Account)</span></h1>
					</div>					
					<div class="register-step step-1">
						<!-- register step -->
					</div>
				</div>	
				<div id="register-body">
					<div id="register-form">
						<form id="register1" name="register1" action="<?=base_url()?>register/add/1" method="post">
							<div class="form-input-box">
								<label class="form-label"><em>*</em> อีเมล์ของท่าน (E-Mail Address) : </label>
								<input id="email"  type="text" name="email" value="" /> (สำหรับล็อกอินเข้าสู่ระบบ)
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> ยืนยันอีเมล์ (Confirm E-Mail Address) : </label>
								<input type="text" name="email_confirm" value="" /> 
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> รหัสผ่าน (Password) : </label>
								<input id="password" type="password" name="password" value="" /> (สำหรับล็อกอินเข้าสู่ระบบ)
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> ยืนยันรหัสผ่าน (Confirm Password) : </label>
								<input type="password" name="password_confirm" value="" /> 
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> รหัสภาพ (Captcha) : </label>
								<?=$captcha['image']?> (กรอกอัขระที่ปรากฏในภาพ) <br/>
								<?php if(isset($_GET['wrongcaptcha'])) :?>
								<span class="error">คุณกรอกรหัสไม่ตรงกับภาพ </span><br/>
								<?php endif ?>
								<input type="text" name="captcha" value="" /> 
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> เงื่อนไขการใช้บริการ (Term and Condition) : </label>
								<textarea></textarea><br/>
								<input type="checkbox" name="accept_term" /> ยอมรับเงื่อนไขการใช้บริการ (Accept Term and Condition)
							</div>
							<div class="form-input-box">
								<a id="register1-submit" href="#"><img src="<?=base_url()?>public/img/member_new/next_step_bttn.png" /></a>
								
							</div>						
						</form>
					</div>
				</div>
				<div id="register-bottom">
					<div class="bottom-content">
						<strong>สิทธิพิเศษสำหรับสมาชิก : </strong>1.เข้าร่วมกิจกรรม และรับส่วนลดพิเศษต่างๆ  2.รับอีเมล์อัพเดทข่าวสารไอที และโปรโมชั่นต่างๆ 3.ประกาศซื้อ-ขาย ฟรี!
					</div>
				</div>
				
			</div>
			<!--------------------------- end box_content ------------------------------>
		<script src="<?=base_url()?>public/js/jquery.validate.js"></script>
		<script>
			$('#register1').validate({
				rules: {
					email: {
						required: true,
						email: true,
						remote: "register/check_email"
					},
					email_confirm : {
						required: true,
						equalTo: "#email"
					},
					password: {
						required: true,
						minlength: 5
					},
					password_confirm: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					captcha: {
						required: true,
						remote: "register/check_captcha"
					},
					accept_term: "required"				
				},
				messages: {
					email: {
						required: "กรุณากรอกอีเมล์ให้ถูกต้อง",
						email: "กรุณากรอกอีเมล์ให้ถูกต้อง",
						remote: "อีเมล์นี้ถูกใช้ไปแล้ว"
					},
					email_confirm: {
						required: "กรุณายืนยันอีเมล์",
						equalTo: "อีเมล์ต้องตรงกับอีเมล์ที่กรอก"
					},
					password: {
						required: "กรุณากรอกรหัสผ่าน",
						minlength: "รหัสผ่านอย่างน้อย 5 ตัวอักษร"
					},
					password_confirm: {
						required: "กรุณายืนยันรหัสผ่าน",
						minlength: "รหัสผ่านอย่างน้อย 5 ตัวอักษร",
						equalTo: "รหัสผ่านต้องตรงกับรหัสผ่านที่กรอก"
					},
					captcha: "กรุณากรอกรหัสภาพให้ถูกต้อง",
					accept_term: "กรุณายอมรับเงื่อนไขการใช้บริการ"
				}
			});
			$('#register1-submit').click(function() {
				$('#register1').submit();
			});
		</script>

		
		<?php $this->load->view("template_new/footer"); ?>

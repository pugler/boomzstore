
		<?php $this->load->view("template_new/header"); ?>
		
			
			<!--------------------------- box_content ------------------------------>
			<div id="register-page-content" class="register-page box_content">
				<div id="register-bar">
					<div class="bar-name">
						<h1><span>สมัครสมาชิก (Create an Account)</span></h1>
					</div>					
					<div class="register-step step-3">
						<!-- register step -->
					</div>
				</div>	
				<div id="register-body">
					<div class="register-finish">
						<?php if(empty($register_msg)) : ?>
						<p class="grey">สมัครสมาชิกเรียบร้อย (Create an Account Successfully)</p>
						<p class="red">กรุณาเช็คอีเมล์ที่ท่านสมัครไว้ แล้วคลิกยืนยันการสมัครสมาชิกอีกครั้ง</p>
						<p class="grey">(หากไม่พบอีเมล์ในกล่อง Inbox กรุณาเช็คที่กล่อง Junk ค่ะ)</p>
						<?php else : ?>
						<?php echo $register_msg; ?>
						<?php endif ?>
						<div class="finish-thumbnail">
							<img src="<?=base_url()?>public/img/member_new/finish_email.png" />
						</div>
					</div>
				</div>
				<div id="register-bottom">
					<div class="bottom-content">
						<strong>สิทธิพิเศษสำหรับสมาชิก : </strong>1.เข้าร่วมกิจกรรม และรับส่วนลดพิเศษต่างๆ  2.รับอีเมล์อัพเดทข่าวสารไอที และโปรโมชั่นต่างๆ 3.ประกาศซื้อ-ขาย ฟรี!
					</div>
				</div>
				
			</div>
			<!--------------------------- end box_content ------------------------------>
		

		
		<?php $this->load->view("template_new/footer"); ?>

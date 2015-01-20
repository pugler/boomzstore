
		<?php $this->load->view("template_new/header"); ?>
		
			
			<!--------------------------- box_content ------------------------------>
			<div id="register-page-content" class="register-page box_content">
				<div id="profile-bar">
					<div class="bar-name">
						<h1><span>ข้อมูลสมาชิก (Member Profile)</span></h1>
					</div>					
					
				</div>	
				<div id="profile-body">
					<div class="profile-content">
						<div class="profile-info">
							<label>อีเมล์ของท่าน (Your Email Address) : </label>
							<span><?=$member_info['email'];?></span>
						</div>
						<div class="profile-info">
							<label>ชื่อของท่าน (Your Name) : </label>
							<span><?=$member_info['firstname']?></span>
						</div>
						<div class="profile-info">
							<label>นามสกุล (Surname) : </label>
							<span><?=$member_info['surname']?></span>
						</div>
						<div class="profile-info">
							<label>เพศ (Sex) : </label>
							<span>
								<?php if($member_info['sex'] == 'male') : ?>
								ชาย
								<?php else : ?>
								หญิง
								<?php endif ?>
							</span>
						</div>
						<div class="profile-info">
							<label>วัน/เดือน/ปี เกิด (Date of Birth) : </label>
							<span>
								<?php 	
									list($by,$bm,$bd) = explode('-',$member_info['birthdate']);
									echo $bd.'/'.$bm.'/'.$by;
								?>
							</span>
						</div>
						<hr/>
						<div class="profile-info">
							<label>ที่อยู่ของท่าน (Your Address) : </label>
							<span><?=$member_info['address']?></span>							
						</div>
						<div class="profile-info">
							<label>ตำบล (Sub-District) : </label>
							<span><?=$member_info['sub_district']?></span>							
						</div>
						<div class="profile-info">
							<label>อำเภอ (District) : </label>
							<span><?=$member_info['district']?></span>							
						</div>
						<div class="profile-info">
							<label>จังหวัด (Province) : </label>
							<span><?=$member_info['province']?></span>							
						</div>
						<div class="profile-info">
							<label>ประเทศ (Country) : </label>
							<span>ไทย</span>							
						</div>
						<div class="profile-info">
							<label>รหัสไปรษณีย์ (Postcode) : </label>
							<span><?=$member_info['postcode']?></span>							
						</div>
						<div class="profile-info">
							<label>โทรศัพท์มือถือ (Mobile Number) : </label>
							<span><?=$member_info['mobile_no']?></span>							
						</div>
						<div class="profile-info">
							<label>โทรศัพท์บ้าน (Telephone Number) : </label>
							<span><?=$member_info['telephone_no']?></span>							
						</div>
						
						<hr/>
						
						<div class="profile-info">
							<label>อาชีพ (Career) : </label>
							<span><?=$member_info['career']?></span>							
						</div>
						
						<div class="profile-info">
							<a href="<?=base_url()?>member/editprofile">แก้ไขข้อมูล</a>
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

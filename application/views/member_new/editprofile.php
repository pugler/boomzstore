<?php
	$provinces = array("กรุงเทพมหานคร","กระบี่","กาญจนบุรี","กาฬสินธุ์","กำแพงเพชร","ขอนแก่น","จันทบุรี","ฉะเชิงเทรา","ชลบุรี","ชัยนาท","ชัยภูมิ","ชุมพร","ตรัง","ตราด","ตาก","นครนายก","นครปฐม","นครพนม","นครราชสีมา","นครศรีธรรมราช","นครสวรรค์","นนทบุรี","นราธิวาส","น่าน","บึงกาฬ","บุรีรัมย์","ปทุมธานี","ประจวบคีรีขันธ์","ปราจีนบุรี","ปัตตานี","พระนครศรีอยุธยา","พะเยา","พังงา","พัทลุง","พิจิตร","พิษณุโลก","ภูเก็ต","มหาสารคาม","มุกดาหาร","ยะลา","ยโสธร","ระนอง","ระยอง","ราชบุรี","ร้อยเอ็ด","ลพบุรี","ลำปาง","ลำพูน","ศรีสะเกษ","สกลนคร","สงขลา","สตูล","สมุทรปราการ","สมุทรสงคราม","สมุทรสาคร","สระบุรี","สระแก้ว","สิงห์บุรี","สุพรรณบุรี","สุราษฎร์ธานี","สุรินทร์","สุโขทัย","หนองคาย","หนองบัวลำภู","อำนาจเจริญ","อุดรธานี","อุตรดิตถ์","อุทัยธานี","อุบลราชธานี","อ่างทอง","เชียงราย","เชียงใหม่","เพชรบุรี","เพชรบูรณ์","เลย","แพร่","แม่ฮ่องสอน");
	$career = array("รับราชการ","รัฐวิสาหกิจ","พนักงานบริษัท/รับจ้าง","ธุรกิจส่วนตัว","แม่บ้าน/พ่อบ้าน","other");
	
 
 ?>
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
						<form name="editprofile" method="post" action="<?=base_url()?>member/submit_editprofile">
							<div class="profile-info">
								<label>อีเมล์ของท่าน (Your Email Address) : </label>
								<span><?=$member_info['email'];?></span>
							</div>
							<div class="profile-info">
								<label>ชื่อของท่าน (Your Name) : </label>
								<input type="text" name="firstname" value="<?=$member_info['firstname']?>" />
							</div>
							<div class="profile-info">
								<label>นามสกุล (Surname) : </label>
								<input type="text" name="surname" value="<?=$member_info['surname']?>" />
							</div>
							<div class="profile-info">
								<label>เพศ (Sex) : </label>
								<input type="radio" name="sex" value="male" <?php if($member_info['sex'] == 'male') :?>checked="checked"<?php endif ?>  /> ชาย
								<input type="radio" name="sex" value="female" <?php if($member_info['sex'] == 'female') :?>checked="checked"<?php endif ?> /> หญิง								
							</div>
							<div class="profile-info">
								<label>วัน/เดือน/ปี เกิด (Date of Birth) : </label>
									<?php 	
										list($by,$bm,$bd) = explode('-',$member_info['birthdate']);										
									?>
								<select name="bdate">
									<option value="">วันที่</option>
									<?php for($i=1;$i<=31;$i++) : ?>
									<option value="<?=$i?>" <?php if($i==$bd) : ?> selected="selected" <?php endif ?> ><?=$i?></option>
									<?php endfor ?>
								</select>
								<select name="bmonth">
									<option value="">เดือน</option>
									<?php for($i=1;$i<=12;$i++) : ?>
									<option value="<?=$i?>" <?php if($i==$bm) : ?> selected="selected" <?php endif ?> ><?=$i?></option>
									<?php endfor ?>
								</select>
								<select name="byear">
									<option value="">พ.ศ.</option>
									<?php for($i=2500;$i<=(date('Y')+543);$i++) : ?>
									<option value="<?=$i?>" <?php if($i==$by) : ?> selected="selected" <?php endif ?> ><?=$i?></option>
									<?php endfor ?>
								</select>
							</div>
							<hr/>
							<div class="profile-info">
								<label>ที่อยู่ของท่าน (Your Address) : </label>
								<input type="text" name="address" value="<?=$member_info['address']?>" />
							</div>
							<div class="profile-info">
								<label>ตำบล (Sub-District) : </label>
								<input type="text" name="sub_district" value="<?=$member_info['sub_district']?>" />
							</div>
							<div class="profile-info">
								<label>อำเภอ (District) : </label>
								<input type="text" name="district" value="<?=$member_info['district']?>" />								
							</div>
							<div class="profile-info">
								<label>จังหวัด (Province) : </label>
								<select name="province">
									<option value="">--เลือกจังหวัด--</option>
									<?php foreach($provinces as $p) :?>
									<option value="<?=$p?>" <?php if($p == $member_info['province']) : ?> selected="selected" <?php endif ?> ><?=$p?></option>
									<?php endforeach ?>									
								</select>
													
							</div>
							<div class="profile-info">
								<label>ประเทศ (Country) : </label>
								<span>ไทย</span>							
							</div>
							<div class="profile-info">
								<label>รหัสไปรษณีย์ (Postcode) : </label>
								<input type="text" name="postcode" value="<?=$member_info['postcode']?>" />
							</div>
							<div class="profile-info">
								<label>โทรศัพท์มือถือ (Mobile Number) : </label>
								<input type="text" name="mobile" value="<?=$member_info['mobile_no']?>" />								
							</div>
							<div class="profile-info">
								<label>โทรศัพท์บ้าน (Telephone Number) : </label>
								<input type="text" name="tel" value="<?=$member_info['telephone_no']?>" />
								</div>
							
							<hr/>
							
							<div class="profile-info">
								<label>อาชีพ (Career) : </label>
								<select name="career">
									<?php foreach($career as $c) : ?>
										<option value="<?=$c?>" <?php if($c == $member_info['career']) :?> selected="selected" <?php endif ?> ><?=$c?></option>
									<?php endforeach ?>
								</select>				
							</div>
							<input type="submit" value="แก้ไขข้อมูล" />
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
		

		
		<?php $this->load->view("template_new/footer"); ?>

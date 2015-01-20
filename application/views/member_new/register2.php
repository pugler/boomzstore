<?php
	$provinces = array("กรุงเทพมหานคร","กระบี่","กาญจนบุรี","กาฬสินธุ์","กำแพงเพชร","ขอนแก่น","จันทบุรี","ฉะเชิงเทรา","ชลบุรี","ชัยนาท","ชัยภูมิ","ชุมพร","ตรัง","ตราด","ตาก","นครนายก","นครปฐม","นครพนม","นครราชสีมา","นครศรีธรรมราช","นครสวรรค์","นนทบุรี","นราธิวาส","น่าน","บึงกาฬ","บุรีรัมย์","ปทุมธานี","ประจวบคีรีขันธ์","ปราจีนบุรี","ปัตตานี","พระนครศรีอยุธยา","พะเยา","พังงา","พัทลุง","พิจิตร","พิษณุโลก","ภูเก็ต","มหาสารคาม","มุกดาหาร","ยะลา","ยโสธร","ระนอง","ระยอง","ราชบุรี","ร้อยเอ็ด","ลพบุรี","ลำปาง","ลำพูน","ศรีสะเกษ","สกลนคร","สงขลา","สตูล","สมุทรปราการ","สมุทรสงคราม","สมุทรสาคร","สระบุรี","สระแก้ว","สิงห์บุรี","สุพรรณบุรี","สุราษฎร์ธานี","สุรินทร์","สุโขทัย","หนองคาย","หนองบัวลำภู","อำนาจเจริญ","อุดรธานี","อุตรดิตถ์","อุทัยธานี","อุบลราชธานี","อ่างทอง","เชียงราย","เชียงใหม่","เพชรบุรี","เพชรบูรณ์","เลย","แพร่","แม่ฮ่องสอน");
 ?>
		<?php $this->load->view("template_new/header"); ?>
		
			
			<!--------------------------- box_content ------------------------------>
			<div id="register2-page-content" class="register-page box_content">
				<div id="register-bar">
					<div class="bar-name">
						<h1><span>สมัครสมาชิก (Create an Account)</span></h1>
					</div>					
					<div class="register-step step-2">
						<!-- register step -->
					</div>
				</div>	
				<div id="register-body">
					<div id="register-form">
						<form id="register2" name="register2" action="<?=base_url()?>register/add/2" method="post">
							<div class="form-input-box">
								<label class="form-label"><em>*</em> ชื่อของท่าน (Your Name) : </label>
								<input type="text" name="firstname" value="" />
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> นามสกุล(Surname) : </label>
								<input type="text" name="surname" value="" /> 
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> เพศ (Sex) : </label>
								<input type="radio" name="sex" value="1" /> ชาย (Male)
								<input type="radio" name="sex" value="2" /> หญิง (Female)
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> วัน/เดือน/ปี เกิด (Date of Birth) : </label>
								<select name="bdate">
									<option value="">วันที่</option>
									<?php for($i=1;$i<=31;$i++) : ?>
									<option value="<?=$i?>"><?=$i?></option>
									<?php endfor ?>
								</select>
								<select name="bmonth">
									<option value="">เดือน</option>
									<?php for($i=1;$i<=12;$i++) : ?>
									<option value="<?=$i?>"><?=$i?></option>
									<?php endfor ?>
								</select>
								<select name="byear">
									<option value="">พ.ศ.</option>
									<?php for($i=2500;$i<=(date('Y')+543);$i++) : ?>
									<option value="<?=$i?>"><?=$i?></option>
									<?php endfor ?>
								</select>
							</div>
							<hr />
							<div class="form-input-box">
								<div>
									<label class="form-label"><em>*</em> บ้านเลขที่ของท่าน (Your Address) : </label>
									<input type="text" name="address" />
								</div>
								<div>
									<label class="form-label"> หมู่บ้าน (Village) : </label>
									<input type="text" name="village" />
								</div>								
							</div>
							<div class="form-input-box">
								<div>
									<label class="form-label"> ซอย (Lane) : </label>
									<input type="text" name="soi" />
								</div>
								<div>
									<label class="form-label"> ถนน (Street) : </label>
									<input type="text" name="street" />
								</div>								
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> ตำบล/แขวง(Sub-District) : </label>
								<input type="text" name="sub_district" value="" /> 
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> อำเภอ/เขต(District) : </label>
								<input type="text" name="district" value="" /> 
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> จังหวัด(Province) : </label>
								<select name="province">
									<option value="">--เลือกจังหวัด--</option>
									<?php foreach($provinces as $p) :?>
									<option value="<?=$p?>"><?=$p?></option>
									<?php endforeach ?>									
								</select>
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> ประเทศ (Country) : </label>
								<select name="country">
									<option value="">--เลือกประเทศ--</option>
									<option value="Thailand">Thailand</option>
								</select>
							</div>
							<div class="form-input-box">
								<label class="form-label"><em>*</em> รหัสไปรษณีย์ (Post Code) : </label>
								<input type="text" name="postcode" value="" />  (5 หลัก)
							</div>
							<div class="form-input-box">
								<div>
									<label class="form-label"><em>*</em> โทรศัพท์มือถือ (Mobile Number) : </label>
									<input type="text" name="mobile" /> (10 หลัก)
								</div>
								<div>
									<label class="form-label"> โทรศัพท์บ้าน (Telephone Number) : </label>
									<input type="text" name="tel" />
								</div>								
							</div>
							<hr />
							<div class="form-input-box">
								<div>
									<label class="form-label"> อาชีพ (Career) : </label>
									<select name="career">
										<option value="">--อาชีพ--</option>
										<option value="รับราชการ">รับราชการ</option>
										<option value="รัฐวิสาหกิจ">รัฐวิสาหกิจ</option>
										<option value="พนักงานบริษัท/รับจ้าง">พนักงานบริษัท/รับจ้าง</option>
										<option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
										<option value="แม่บ้าน/พ่อบ้าน">แม่บ้าน/พ่อบ้าน</option>
										<option value="other">อื่นๆ </option>
									</select>
								</div>
								<div>
									<label class="form-label"> รายได้ (Revenue) : </label>
									<select name="revenue">
										<option value="">--รายได้ต่อเดือน--</option>
										<option value="1">&lt; 15,000</option>
										<option value="2">15,000 - 24,999</option>
										<option value="3">25,000 - 34,999</option>
										<option value="4">35,000 - 44,999</option>
										<option value="5">45,000 - 54,999</option>
										<option value="6">55,000 - 64,999</option>
										<option value="7">65,000 - 74,999</option>
										<option value="8">75,000 &gt;</option>
									</select>
									บาท
								</div>								
							</div>
							<div class="form-input-box">
								<input type="checkbox" name="accept_newsletter" checked="checked" /> รับข่าวสารทางอีเมล์ (Get E-Newsletter)								
							</div>
							
							<div class="form-input-box">
								<a id="register2-submit" href="#"><img src="<?=base_url()?>public/img/member_new/next_step_bttn.png" /></a>								
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
			$('#register2-submit').click(function() {
				$('#register2').submit();
			});
			$('#register2').validate({
				rules: {
					firstname: "required",
					surname: "required",
					sex: "required",
					bdate: "required",
					bmonth: "required",
					byear: "required",
					address: "required",
					sub_district: "required",
					district: "required",
					province: "required",
					country: "required",
					postcode: "required",
					mobile: {
						required: true,
						number: true,
						minlength: 10
					}							
				},
				messages: {
					firstname: "กรุณากรอกชื่อ",
					surname: "กรุณากรอกนามสกุล",
					sex: "กรุณาเลือกเพศ",
					bdate: "กรุณาเลือกวันเกิด",
					bmonth: "กรุณาเลือกเดือนเกิด",
					byear: "กรุณาเลือกปีเกิด",
					address: "กรูณากรอกที่อยู่",
					sub_district: "กรุณากรอกตำบล/แขวง",
					district: "กรุณากรอกอำเภอ/เขต",
					province: "กรุณาเลือกจังหวัด",
					country: "กรุณาเลือกประเทศ",
					postcode: "กรุณากรอกรหัสไปรษณีย์",
					mobile: "กรุณากรอกหมายเลขโทรศัพท์มือถือ"					
				}
			});
		</script>

		
		<?php $this->load->view("template_new/footer"); ?>

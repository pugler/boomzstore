<meta charset="utf-8">
<!--------------------------- Start CSS ------------------------------>
<link href="../../../public/css/layout.css" rel="stylesheet" type="text/css" />
<link href="../../../public/css/template.css" rel="stylesheet" type="text/css" /> 
<link href="../../../public/css/fontset.css" rel="stylesheet" type="text/css" />
<link href="../../../public/css/layout_slide.css" rel="stylesheet" type="text/css" />
<link href="../../../public/css/menu_style.css" rel="stylesheet" type="text/css" />
<!--------------------------- End CSS ------------------------------>

<!--------------------------- Start Validator Form ------------------------------>
<script type="text/javascript" src="../../../public/js/validator/jquery.js"></script>
<script type="text/javascript" src="../../../public/js/validator/jquery.validationEngine.js"></script>
<link rel="stylesheet" href="../../../public/css/validator/validationEngine.jquery.css" type="text/css" />
<!--------------------------- End Validator Form ------------------------------>


<!--------------------------- Start Select checkbox All ------------------------------>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {

// Select all
$("A[href='#select_all']").click( function() {
$("#" + $(this).attr('rel') + " INPUT[type='checkbox']").attr('checked', true);
return false;
});

// Select none
$("A[href='#select_none']").click( function() {
$("#" + $(this).attr('rel') + " INPUT[type='checkbox']").attr('checked', false);
return false;
});

});
</script>
<!--------------------------- End Select checkbox All ------------------------------>

<?php echo form_open("member/add"); ?><div align="left">
<table width="640" border="0" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
	
	
	<tr>
      <td><span class="url_aobut_product">*</span> ชื่อผู้ใช้งาน :</td>
	  <td><label></label></td>
    </tr>
	<tr>
      <td><label>&nbsp;
            <input type="text" name="username" value="" size="30" maxlength="50" class="validate[required,custom[onlyLetter],length[4,50]]"/>
        </label>      </td>
	  <td><label> </label>
	    <span class="url_aobut_product">ชื่อสำหรับล๊อกอินเข้าสู่ระบบ </span></td>
    </tr>
	<tr>
	  <td><label><span class="url_aobut_product">* </span></label>รหัสผ่าน :</td>
	  <td><span class="url_aobut_product">*</span> ยืนยันรหัสผ่าน :</td>
    </tr>
	<tr>
      <td><label>&nbsp;
            <input type="password" name="password1" value=""  id="password1" size="30" maxlength="50" class="validate[required,length[6,50]]"/>
        </label>      </td>
	  <td><label> &nbsp;
            <input type="password" name="password2" value="" size="30" maxlength="50" class="validate[required,confirm[password1]]"/>
        </label>      </td>
    </tr>
	
	<tr>
	  <td><span class="url_aobut_product">*</span> ชื่อ :</td>
	  <td width="360"><label><span class="url_aobut_product">* </span></label>
	    นามสกุล
	    :</td>
	</tr>
	<tr>
	  <td width="240"><label>&nbsp;
	      <input type="text" name="name" value="" size="30" maxlength="100" class="validate[required,length[4,100]]"/>
      </label>      </td>
		<td><label>
		  &nbsp;
		  <input type="text" name="lastname" value="" size="30" maxlength="100" class="validate[required,length[4,100]]"/>
		  </label>        </td>
	</tr>
	
	<tr>
      <td><span class="url_aobut_product">*</span> ที่อยู่ :</td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
      <td colspan="2"><label>&nbsp;
        <textarea name="address" cols="70" rows="4" class="validate[required,length[4,250]]"></textarea>
      </label>      </td>
    </tr>
	<tr>
      <td><span class="url_aobut_product">*</span> ตำบล :</td>
	  <td><label><span class="url_aobut_product">* </span></label>
	    อำเภอ
	    :</td>
    </tr>
	<tr>
      <td><label>&nbsp;
            <input type="text" name="district" value="" size="30" maxlength="150" class="validate[required,length[2,150]]"/>
        </label>      </td>
	  <td><label> &nbsp;
            <input type="text" name="city" value="" size="30" maxlength="150" class="validate[required,length[2,150]]"/>
        </label>      </td>
    </tr>
	
	<tr>
      <td><span class="url_aobut_product">*</span> จังหวัด :</td>
	  <td><label><span class="url_aobut_product">* </span></label>
	    รหัสไปรษณีย์
	    :</td>
    </tr>
	<tr>
      <td><label>&nbsp;
            <input type="text" name="province" value="" size="30" maxlength="150" class="validate[required,length[2,150]]"/>
        </label>      </td>
	  <td><label> &nbsp;
            <input type="text" name="postalcode" value="" size="30" maxlength="5" class="validate[required,custom[onlyNumber],length[5,5]]"/>
        </label>      </td>
    </tr>
	
	<tr>
	  <td><label><span class="url_aobut_product">* </span></label>
	    อีเมล์ : </td>
	  <td><label><span class="url_aobut_product">* </span></label>
	    เบอร์มือถือ
	    :</td>
	</tr>
	<tr>
	  <td><label> &nbsp;
            <input type="text" name="email" value="" size="30" maxlength="150" placeholder="name@example.com" class="validate[required,custom[email]]" />
        </label>      </td>
	  <td><label> &nbsp;
            <input type="text" name="mobile" value="" size="30" maxlength="10" class="validate[required,custom[onlyNumber],length[10,10]]"/>
        </label>      </td>
	</tr>
	
	<tr>
	  <td colspan="2">&nbsp;&nbsp;สมัครสมาชิก เพื่อรับโปรโมชั่นส่วนลด และเข้าร่วมกิจกรรมพิเศษ ก่อนใคร! </td>
    </tr>
	
	<tr>
	  <td colspan="2"><span class="url_aobut_product">* </span> ต้องรับข่าวสาร : </td>
    </tr>
	<tr>
	  <td colspan="2"><table width="485" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="390"><fieldset id="email_1">
		  	<a rel="email_1" href="#select_all">เลือกทั้งหมด</a> | 
            <!--<a rel="email_1" href="#select_none">ยกเลิก</a> | -->
			<input name="e_promotion" type="checkbox" value="get promotion" checked="checked" />โปรโมชั่นและส่วนลด
			<input name="e_news" type="checkbox" value="get news" checked="checked" />ข่าวสารไอที
			<input name="e_articles" type="checkbox" value="get articles" checked="checked" />บทความรีวิว
		    </fieldset></td>
          </tr>
      </table></td>
    </tr>
	
	
	<tr>
      <td><span class="url_aobut_product">&nbsp;&nbsp;&nbsp;กรอกข้อมูล * ให้ครบถ้วน</span></td>
	  <td>
	  		<!--<input type="reset" name="Cancel" value="Cancel" />&nbsp;&nbsp; -->
	    	<input type="submit" name="btsave" value="สมัครสมาชิก"/>	  </td>
  </tr>
</table>
</div>
<?php echo form_close(); ?>
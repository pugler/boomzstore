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

<?php echo form_open("enewsletter/add"); ?><div align="left">
<table width="640" border="0" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
	
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
	  <td><label><span class="url_aobut_product">* </span></label>
อีเมล์ : </td>
	  <td>&nbsp;</td>
    </tr>
	<tr>
	  <td><label> &nbsp;
            <input type="text" name="email" value="" size="30" maxlength="150" placeholder="name@example.com" class="validate[required,custom[email]]" />
        </label>      </td>
	  <td><span class="url_aobut_product">อีเมล์สำหรับรับข่าวสาร</span></td>
	</tr>
	
	<tr>
	  <td colspan="2"><label><span class="url_aobut_product">* </span></label>
ต้องรับข่าวสาร :</td>
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
	  <td colspan="2">สมัครตอนนี้ รับโปรโมชั่นส่วนลด, อัพเดทข่าวสารไอที และอ่านบทความรีวิวเด็ดๆ ก่อนใคร! </td>
    </tr>
	<tr>
      <td><span class="url_aobut_product">&nbsp;&nbsp;&nbsp;กรอกข้อมูล * ให้ครบถ้วน</span></td>
	  <td>
	  		<!--<input type="reset" name="Cancel" value="Cancel" />&nbsp;&nbsp; -->
	    	<input type="submit" name="btsave" value="สมัครรับข่าวสาร"/>	  </td>
  </tr>
</table>
</div>
<?php echo form_close(); ?>
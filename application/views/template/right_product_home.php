<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-------------------------- Start CSS ----------------------------->
<?php $this->load->view("template/css"); ?>
<!--------------------------- End CSS ------------------------------>

<!--------------------------- Start News Tab ------------------------------>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content2").hide(); //Hide all content
	$("ul.tabs2 li:first").addClass("active").show(); //Activate first tab
	$(".tab_content2:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs2 li").click(function() {
		$("ul.tabs2 li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content2").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>
<div class="container2">
    <ul class="tabs2">
        <li><a href="#news-tab5">สินค้าแนะนำ</a></li>
        <li><a href="#news-tab6">สินค้าขายดี</a></li>
        <li><a href="#news-tab7">โปรโมชั่น@TARAD</a></li>
        <li><a href="#news-tab8">โปรโมชั่น@lnwshop</a></li>
    </ul>
    <div class="tab_container2">
<!------------------------------------- Start Tab Product 1 --------------------------------------------->
        <div id="news-tab5" class="tab_content2">
            <!--------------------------- box_detail_latest (product) --------------------->
					<div class="box_detail_latest">
					<!--------------------------- Start latest product 01 ------------------------->
						<div class="box_detail_latest_itoffer">
							<div class="thumbnail_latest_itoffer">
								<a href="http://boomzstore.tarad.com/product.detail_904566_th_4911729" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/001_sunny_koala.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
							</div>
							<div class="name_latest_itoffer">
								 <a href="http://boomzstore.tarad.com/product.detail_904566_th_4911729" target="_blank" title="สินค้าราคาพิเศษ">Sonny Angel - Koala ปลั๊กเสียบช่องหูฟัง (ลิขสิทธิ์แท้)</a> 
							</div>
							<div class="price_latest_itoffer"><s>ปกติ 240 บ.</s><br />
						    เหลือ 189 บ.</div>
						</div>
					<!--------------------------- End latest product 01 ------------------------------>
					<!--------------------------- Start latest product 02 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_904566_th_4911725" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/002_sunny_rabbit.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_904566_th_4911725" target="_blank" title="สินค้าราคาพิเศษ">Sonny Angel - Rabbit ปลั๊กเสียบช่องหูฟัง (ลิขสิทธิ์แท้)</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 240 บ.</s><br />
					  เหลือ 189 บ.</div>
					</div>
					<!--------------------------- End latest product 02 ------------------------------>
					<!--------------------------- Start latest product 03 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_904566_th_4911721" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/003_sunny_cock.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_904566_th_4911721" target="_blank" title="สินค้าราคาพิเศษ">Sonny Angel - Cock ปลั๊กเสียบช่องหูฟัง (ลิขสิทธิ์แท้)</a>
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 240 บ.</s><br />
					    เหลือ 189 บ.</div>
					</div>
					<!--------------------------- End latest product 03 ------------------------------>
					<!--------------------------- Start latest product 04 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_904566_th_4911717" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/004_sunny_lion.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_904566_th_4911717" target="_blank" title="สินค้าราคาพิเศษ">Sonny Angel - Lion ปลั๊กเสียบช่องหูฟัง (ลิขสิทธิ์แท้)</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 240 บ.</s><br />
					  เหลือ 189 บ.</div>
					</div>
					<!--------------------------- End latest product 04 ------------------------------>
					<!--------------------------- Start latest product 05 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_904566_th_4905214" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/005_s3_gundam_1.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
						 <a href="http://boomzstore.tarad.com/product.detail_904566_th_4905214" target="_blank" title="สินค้าราคาพิเศษ">เคส Gundam Hyaku Shiki สำหรับ Galaxy S3 (ลิขสิทธิ์แท้)</a> 
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 1,290 บ.</s><br />
					    เหลือ 999 บ.</div>
					  </div>
					<!--------------------------- End latest product 05 ------------------------------>
					<!------------------------- Start latest product 06 ------------------------------>
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_904566_th_4905213" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/006_s3_gundam_2.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							 <a href="http://boomzstore.tarad.com/product.detail_904566_th_4905213" target="_blank" title="สินค้าราคาพิเศษ">เคส Gundam MSZ-006 Zeta สำหรับ Galaxy S3 (ลิขสิทธิ์แท้)</a> 
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 1,290 บ.</s><br />
					    เหลือ 999 บ.</div>
					</div>
					<!--------------------------- End latest product 06 ------------------------------>
					<!--------------------------- Start latest product 07 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_904566_th_4905164" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/007_s3_melody_1.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.tarad.com/product.detail_904566_th_4905164" target="_blank" title="สินค้าราคาพิเศษ">เคส My Melody Heart สำหรับ Galaxy S3 (ลิขสิทธิ์แท้)</a> 
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
					  เหลือ 699 บ.</div>
				</div>
				<!--------------------------- End latest product 07 ------------------------------>
				<!--------------------------- Start latest product 08 ---------------------------->
				<div class="box_detail_latest_itoffer">
					<div class="thumbnail_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_904566_th_4905148" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/suggest/oct_2012_w4/008_s3_melody_2.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
					</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.tarad.com/product.detail_904566_th_4905148" target="_blank" title="สินค้าราคาพิเศษ">เคส My Melody Flower-Black สำหรับ Galaxy S3 (ลิขสิทธิ์แท้)</a> 
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
				    เหลือ 699 บ.</div>
				</div>
				<!--------------------------- End latest product 08 ------------------------------>
				<br style="clear: both;" />
			</div>
			<br style="clear: both;" />
			<!--------------------------- end box_detail_latest (product) --------------------------->
        </div>
<!------------------------------------- End Tab Product 1 --------------------------------------------->
	
<!------------------------------------- Start Tab Product 2 --------------------------------------------->
        <div id="news-tab6" class="tab_content2">
                        <!--------------------------- box_detail_latest (product) --------------------->
					<div class="box_detail_latest">
					<!--------------------------- Start latest product 01 ------------------------->
						<div class="box_detail_latest_itoffer">
							<div class="thumbnail_latest_itoffer">
								<a href="http://boomzstore.tarad.com/product.detail_908186_th_4838564" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/001_Little_TwinStar_Charapin.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
							</div>
							<div class="name_latest_itoffer">
								 <a href="http://boomzstore.tarad.com/product.detail_908186_th_4838564" target="_blank" title="สินค้าราคาพิเศษ">Little Twin Star Charapin สำหรับเสียบช่องหูฟัง (ลิขสิทธิ์แท้)</a> 
							</div>
							<div class="price_latest_itoffer"><s>ปกติ 320 บ.</s><br />
						    เหลือ 300 บ.</div>
						</div>
					<!--------------------------- End latest product 01 ------------------------------>
					<!--------------------------- Start latest product 02 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_867772_th_4838509" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/002_Little_TwinStars_Touchpen.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_867772_th_4838509" target="_blank" title="สินค้าราคาพิเศษ">Little Twin Stars Touchpen สำหรับสัมผัสหน้าจอ (ลิขสิทธิ์แท้)</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 650 บ.</s><br />
					  เหลือ 620 บ.</div>
					</div>
					<!--------------------------- End latest product 02 ------------------------------>
					<!--------------------------- Start latest product 03 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_867772_th_4838308" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/003_Exocharge.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_867772_th_4838308" target="_blank" title="สินค้าราคาพิเศษ">Exocharge ที่ชาร์จในรถยนต์ </a>
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 690 บ.</s><br />
					    เหลือ 650 บ.</div>
					</div>
					<!--------------------------- End latest product 03 ------------------------------>
					<!--------------------------- Start latest product 04 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_867772_th_4836346" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/004_FOCUS_UltraClear.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_867772_th_4836346" target="_blank" title="สินค้าราคาพิเศษ">ฟิล์มกันรอย FOCUS-Ultra Clear สำหรับ iPhone 4 / 4S</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 120 บ.</s><br />
					  เหลือ 100 บ.</div>
					</div>
					<!--------------------------- End latest product 04 ------------------------------>
					<!--------------------------- Start latest product 05 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/36/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/005_samsung_S3.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
						 <a href="http://boomzstore.lnwshop.com/product/36/" target="_blank" title="สินค้าราคาพิเศษ">Samsung Galaxy S3 <br />
						 ( สีขาว,สีน้ำเงิน )</a>						</div>
						<div class="price_latest_itoffer"><s>ปกติ 21,900 บ.<br />
						</s>เหลือ 21,400 บ.</div>
					  </div>
					<!--------------------------- End latest product 05 ------------------------------>
					<!------------------------- Start latest product 06 ------------------------------>
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/30/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/006_iPhone4s.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							 <a href="http://boomzstore.lnwshop.com/product/30/" target="_blank" title="สินค้าราคาพิเศษ">iPhone 4S 16GB <br />
							 (สีดำ-สีขาว)</a>						</div>
						<div class="price_latest_itoffer"><s>ปกติ 22,550 บ.</s><br />
					    เหลือ 22,200 บ.</div>
					</div>
					<!--------------------------- End latest product 06 ------------------------------>
					<!--------------------------- Start latest product 07 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/37/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/007_samsung_note.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.lnwshop.com/product/37/" target="_blank" title="สินค้าราคาพิเศษ">Samsung Galaxy Note <br />
						 ( สีดำ,สีขาว )</a>					</div>
					<div class="price_latest_itoffer"><s>ปกติ 20,500 บ.</s> <br />
					  เหลือ 18,900 บ.</div>
				</div>
				<!--------------------------- End latest product 07 ------------------------------>
				<!--------------------------- Start latest product 08 ---------------------------->
				<div class="box_detail_latest_itoffer">
					<div class="thumbnail_latest_itoffer">
						<a href="http://boomzstore.lnwshop.com/product/33/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/best_sale/oct_2012_w4/008_The_New_iPad.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
					</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.lnwshop.com/product/33/" target="_blank" title="สินค้าราคาพิเศษ">The New iPad WIFI 4G 16GB <br />
						 ( สีดำ,สีขาว )</a>					</div>
					<div class="price_latest_itoffer"><s>ปกติ 20,550 บ.<br />
					</s>เหลือ 20,250 บ.</div>
				</div>
				<!--------------------------- End latest product 08 ------------------------------>
				<br style="clear: both;" />
			</div>
			<br style="clear: both;" />
			<!--------------------------- end box_detail_latest (product) --------------------------->
        </div>
<!------------------------------------- End Tab Product 2 --------------------------------------------->

<!------------------------------------- Start Tab Product 3 --------------------------------------------->
        <div id="news-tab7" class="tab_content2">
                        <!--------------------------- box_detail_latest (product) --------------------->
					<div class="box_detail_latest">
					<!--------------------------- Start latest product 01 ------------------------->
						<div class="box_detail_latest_itoffer">
							<div class="thumbnail_latest_itoffer">
								<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838357" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/001_Kitty_Bear.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
							</div>
							<div class="name_latest_itoffer">
								 <a href="http://boomzstore.tarad.com/product.detail_901054_th_4838357" target="_blank" title="สินค้าราคาพิเศษ">เคส Kitty and Bear สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a> 
							</div>
							<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
						    เหลือ 599 บ.</div>
						</div>
					<!--------------------------- End latest product 01 ------------------------------>
					<!--------------------------- Start latest product 02 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838369" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/002_Kitty_Red_Apple.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838369" target="_blank" title="สินค้าราคาพิเศษ">เคส Kitty Red Apple สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
					  เหลือ 599 บ.</div>
					</div>
					<!--------------------------- End latest product 02 ------------------------------>
					<!--------------------------- Start latest product 03 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838399" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/003_Kitty_Flower_Pink.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838399" target="_blank" title="สินค้าราคาพิเศษ">เคส Kitty Flower Pink สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a>
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
					    เหลือ 599 บ.</div>
					</div>
					<!--------------------------- End latest product 03 ------------------------------>
					<!--------------------------- Start latest product 04 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838404" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/004_Kitty_Candy.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838404" target="_blank" title="สินค้าราคาพิเศษ">เคส Kitty Candy สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
					  เหลือ 599 บ.</div>
					</div>
					<!--------------------------- End latest product 04 ------------------------------>
					<!--------------------------- Start latest product 05 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838421" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/005_Kitty_Rabbit_Pink.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
						 <a href="http://boomzstore.tarad.com/product.detail_901054_th_4838421" target="_blank" title="สินค้าราคาพิเศษ">เคส Kitty Rabbit Pink สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a> 
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
					    เหลือ 599 บ.</div>
					  </div>
					<!--------------------------- End latest product 05 ------------------------------>
					<!------------------------- Start latest product 06 ------------------------------>
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838430" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/006_Kitty_Boue_Red.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							 <a href="http://boomzstore.tarad.com/product.detail_901054_th_4838430" target="_blank" title="สินค้าราคาพิเศษ">เคส Kitty Boue Red สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a> 
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
					    เหลือ 599 บ.</div>
					</div>
					<!--------------------------- End latest product 06 ------------------------------>
					<!--------------------------- Start latest product 07 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838492" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/007_LittleTwin_Stars_Classic.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.tarad.com/product.detail_901054_th_4838492" target="_blank" title="สินค้าราคาพิเศษ">เคส Little Twin Stars Classic สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a> 
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
					  เหลือ 599 บ.</div>
				</div>
				<!--------------------------- End latest product 07 ------------------------------>
				<!--------------------------- Start latest product 08 ---------------------------->
				<div class="box_detail_latest_itoffer">
					<div class="thumbnail_latest_itoffer">
						<a href="http://boomzstore.tarad.com/product.detail_901054_th_4838572" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/tr_weekly/oct_2012_w4/008_Kitty_FlowerWhite.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
					</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.tarad.com/product.detail_901054_th_4838572" target="_blank" title="สินค้าราคาพิเศษ">เคส Kitty Flower White สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a> 
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 890 บ.</s><br />
				    เหลือ 599 บ.</div>
				</div>
				<!--------------------------- End latest product 08 ------------------------------>
				<br style="clear: both;" />
			</div>
			<br style="clear: both;" />
			<!--------------------------- end box_detail_latest (product) --------------------------->
        </div>
<!------------------------------------- End Tab Product 3 --------------------------------------------->
		
<!------------------------------------- Start Tab Product 4 --------------------------------------------->
        <div id="news-tab8" class="tab_content2">
                        <!--------------------------- box_detail_latest (product) --------------------->
					<div class="box_detail_latest">
					<!--------------------------- Start latest product 01 ------------------------->
						<div class="box_detail_latest_itoffer">
							<div class="thumbnail_latest_itoffer">
								<a href="http://boomzstore.lnwshop.com/product/2/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/001_Plug_Mickey.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
							</div>
							<div class="name_latest_itoffer">
								 <a href="http://boomzstore.lnwshop.com/product/2/" target="_blank" title="สินค้าราคาพิเศษ">Plug Mickey ปลั๊กเสียบช่องหูฟัง(ลิขสิทธิ์แท้)</a> 
							</div>
							<div class="price_latest_itoffer"><s>ปกติ 320 บ.</s><br />
					  เหลือ 269 บ.</div>
						</div>
					<!--------------------------- End latest product 01 ------------------------------>
					<!--------------------------- Start latest product 02 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/3/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/002_Plug_Stitch.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.lnwshop.com/product/3/" target="_blank" title="สินค้าราคาพิเศษ">Plug Stitch ปลั๊กเสียบช่องหูฟัง(ลิขสิทธิ์แท้)</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 320 บ.</s><br />
					  เหลือ 269 บ.</div>
					</div>
					<!--------------------------- End latest product 02 ------------------------------>
					<!--------------------------- Start latest product 03 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/6/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/003_Doraemon_Nobita.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/6/" target="_blank" title="สินค้าราคาพิเศษ">เคส 86hero Doraemon and Nobita สำหรับ iPhone 4 /4S (ลิขสิทธิ์แท้)</a>
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 1,290 บ.</s><br />
					    เหลือ 899 บ.</div>
					</div>
					<!--------------------------- End latest product 03 ------------------------------>
					<!--------------------------- Start latest product 04 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/10/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/004_ExoclearEdge-Clear.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						<a href="http://boomzstore.lnwshop.com/product/10/" target="_blank" title="สินค้าราคาพิเศษ">เคส Exoclear Edge-Clear สำหรับ iPhone 4 /4S(ลิขสิทธิ์แท้)</a>
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 990 บ.</s><br />
					  เหลือ 699 บ.</div>
					</div>
					<!--------------------------- End latest product 04 ------------------------------>
					<!--------------------------- Start latest product 05 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/59/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/005_WithLove_Telephone.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
						 <a href="http://boomzstore.lnwshop.com/product/59/" target="_blank" title="สินค้าราคาพิเศษ">เคส With Love - Telephone สำหรับ iPhone 4 /4S</a> 
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 450 บ.</s><br />
				    เหลือ 299 บ.</div>
					  </div>
					<!--------------------------- End latest product 05 ------------------------------>
					<!------------------------- Start latest product 06 ------------------------------>
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/60/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/006_WithLove_Full Heart.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
						<div class="name_latest_itoffer">
							 <a href="http://boomzstore.lnwshop.com/product/60/" target="_blank" title="สินค้าราคาพิเศษ">เคส With Love - Full Heart สำหรับ iPhone 4 /4S</a> 
						</div>
						<div class="price_latest_itoffer"><s>ปกติ 450 บ.</s><br />
				    เหลือ 299 บ.</div>
					</div>
					<!--------------------------- End latest product 06 ------------------------------>
					<!--------------------------- Start latest product 07 ---------------------------->
					<div class="box_detail_latest_itoffer">
						<div class="thumbnail_latest_itoffer">
							<a href="http://boomzstore.lnwshop.com/product/61/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/007_WithLove_Radio.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
						</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.lnwshop.com/product/61/" target="_blank" title="สินค้าราคาพิเศษ">เคส With Love - Radio สำหรับ iPhone 4 /4S</a> 
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 450 บ.</s><br />
				    เหลือ 299 บ.</div>
				</div>
				<!--------------------------- End latest product 07 ------------------------------>
				<!--------------------------- Start latest product 08 ---------------------------->
				<div class="box_detail_latest_itoffer">
					<div class="thumbnail_latest_itoffer">
						<a href="http://boomzstore.lnwshop.com/product/63/" target="_blank" title="สินค้าราคาพิเศษ"><img src="<?php echo base_url(); ?>public/img/products/ns_weekly/oct_2012_w4/008_WithLove_MixHeart.jpg" alt="สินค้าราคาพิเศษ" title="สินค้าราคาพิเศษ" /></a>
					</div>
					<div class="name_latest_itoffer">
						 <a href="http://boomzstore.lnwshop.com/product/63/" target="_blank" title="สินค้าราคาพิเศษ">เคส With Love - Mix Heart สำหรับ iPhone 4 /4S</a> 
					</div>
					<div class="price_latest_itoffer"><s>ปกติ 450 บ.</s><br />
				    เหลือ 299 บ.</div>
				</div>
				<!--------------------------- End latest product 08 ------------------------------>
<!------------------------------------- End Tab Product 4 --------------------------------------------->

				<br style="clear: both;" />
			</div>
			<br style="clear: both;" />
			<!--------------------------- end box_detail_latest (product) --------------------------->
   </div>
	<div class="bar_all_page2"><b><a href="<?php echo base_url(); ?>store" title="ข่าวสารไอทีทั้งหมด">ดูสินค้าและร้านค้าทั้งหมด</a></b> </div>
    </div>
</div>
<div style="clear: both; display: block; text-align:center; padding: 7px;"></div>

<!--------------------------- end right_latest_news ------------------------------>
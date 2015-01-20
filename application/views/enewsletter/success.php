<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Newsletter | BoomzStore.com - ศูนย์กลางการแบ่งปัน ความรู้ บทความ และการซื้อขายสินค้าไอที ราคาถูก สำหรับคนดิจิตอล</title>
<meta name="keywords" content="boomzstore, boom, boomz, store, buy, sale, trade, exchange, mobile, computer, camera, game, games, review, reviews, article, online, it, notebook, download, news, test, program, tip, tips, rating, communication, software, hardware, tech update, network, graphic, server, digital, internet, virus, ipad, iphone, mac, 3g, 4g, iphone 5, iphone 4, event, บูม สโตร์,  บูม, สโตร์, ซื้อ, ขาย, ซื้อขาย, แลกเปลี่ยน,  มือถือ, สมาร์ทโฟน, คอมพิวเตอร์, กล้องถ่ายรูป, กล้องถ่ายวิดีโอ, กล้องฟิล์ม, เกมส์, เกม, รีวิว, บทความ, ออนไลน์, ไอที, โน๊ตบุ๊ค, ดาวน์โหลด, ข่าว, โปรแกรม, ซอร์ฟแวร์, ทิป, ลำดับ, ฮาร์ดแวร์, อัพเดท, เน็ตเวิค, กราฟฟิก, เซริฟเวอร์, ดิจิตอล, อินเตอร์เน็ต, ไวรัส, ไอแพด, ไอโฟน, แมค, 3จี, 4จี, ไอโฟน 4, กิจกรรม, สินค้าไอที, ราคาถูก" />
<meta name="description" content="BoomzStore.com - ศูนย์กลางการแบ่งปัน ความรู้ บทความ และการซื้อขายสินค้าไอที ราคาถูก สำหรับคนดิจิตอล" />
<meta name="language" content="th" />

<!--------------------------- Start CSS ------------------------------>
<?php $this->load->view("template/css"); ?>
<!--------------------------- End CSS ------------------------------>

<!--------------------------- Google Analytics ------------------------------>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29403843-1']);
  _gaq.push(['_setDomainName', 'boomzstore.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--------------------------- End Google Analytics ------------------------------>

</head>
<body>
	<!--------------------------- main ------------------------------>
	<div class="main">
	
	   <!--------------------------- Start top bar ------------------------------>
		<?php $this->load->view("template/top_bar"); ?>
		<!--------------------------- end top bar ------------------------------>
		
		<!--------------------------- Start header ------------------------------>
		<?php $this->load->view("template/header"); ?>
		<!--------------------------- end header ------------------------------>
		
		<!--------------------------- Start main menu ------------------------------>
		<?php $this->load->view("template/mainmenu"); ?>
		<!--------------------------- end main menu ------------------------------>
		
		<!--------------------------- box_content ------------------------------>
		<div class="box_content">
			
			<!--------------------------- box_top_template ------------------------------>
			<?php $this->load->view("template/top_template"); ?>
			<!--------------------------- end box_top_template ------------------------------>
			
			<!--------------------------- box_content ------------------------------>
			<div class="box_content">
				
				<!--------------------------- left_content ------------------------------>
				<div class="left_content">
					<div class="box_navigator"><a href="<?php echo base_url(); ?>home">หน้าแรก</a> >> <span class="navigator_this_page_color">สมัครรับอีเมล์ข่าวสาร</span></div>
	
<div class="box_con_detail"></p>
  <p align="left" class="content_title_bar"><strong>สมัครรับอีเมล์ข่าวสารจาก BoomzStore.com  </strong></p>
  <p align="left">&nbsp;</p>
		  <p>ทางทีมงานได้รับข้อมูลของท่านแล้ว   ขอบคุณที่สมัครรับอีเมล์ข่าวสารกับ BoomzStore.com</p>
		  <p>&nbsp;</p>
		  <p><a href="<?php echo base_url(); ?>home"><< กลับหน้าหลัก</a></p>
	</div>
				</div>
				<!--------------------------- end left_content ------------------------------>

				<!--------------------------- right_content ------------------------------>
				<?php $this->load->view("template/right_content"); ?>
				<!--------------------------- end right_content ------------------------------>
				
				<br style="clear: both;" />
			</div>
			<!--------------------------- end box_content ------------------------------>

			<!--------------------------- Start footer ------------------------------>
			<?php $this->load->view("template/footer"); ?>
			<!--------------------------- End footer ------------------------------>
			
		</div>
		<!--------------------------- end box_content ------------------------------>
	</div>
	<!--------------------------- end main ------------------------------>
</body>
</html>
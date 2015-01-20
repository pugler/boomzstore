<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home | BoomzStore.com - ศูนย์กลางการแบ่งปัน ความรู้ บทความ และการซื้อขายสินค้าไอที ราคาถูก สำหรับคนดิจิตอล</title>
<meta name="keywords" content="boomzstore, boom, boomz, store, buy, sale, trade, exchange, mobile, computer, camera, game, games, review, reviews, article, online, it, notebook, download, news, test, program, tip, tips, rating, communication, software, hardware, tech update, network, graphic, server, digital, internet, virus, ipad, iphone, mac, 3g, 4g, iphone 5, iphone 4, event, บูม สโตร์,  บูม, สโตร์, ซื้อ, ขาย, ซื้อขาย, แลกเปลี่ยน,  มือถือ, สมาร์ทโฟน, คอมพิวเตอร์, กล้องถ่ายรูป, กล้องถ่ายวิดีโอ, กล้องฟิล์ม, เกมส์, เกม, รีวิว, บทความ, ออนไลน์, ไอที, โน๊ตบุ๊ค, ดาวน์โหลด, ข่าว, โปรแกรม, ซอร์ฟแวร์, ทิป, ลำดับ, ฮาร์ดแวร์, อัพเดท, เน็ตเวิค, กราฟฟิก, เซริฟเวอร์, ดิจิตอล, อินเตอร์เน็ต, ไวรัส, ไอแพด, ไอโฟน, แมค, 3จี, 4จี, ไอโฟน 4, กิจกรรม, สินค้าไอที, ราคาถูก" />
<meta name="description" content="BoomzStore.com - ศูนย์กลางการแบ่งปัน ความรู้ บทความ และการซื้อขายสินค้าไอที ราคาถูก สำหรับคนดิจิตอล" />
<meta name="language" content="th" />
<!--------------------------- Start Meta tag for Google tools  ------------------------------>
<meta name="google-site-verification" content="hBkIXzGv1cuvg6hN9Sr6YndX4D2RiW0o7uzMh2I6zE4" />
<!--------------------------- End Meta tag for Google tools ------------------------------>
<!--------------------------- Start CSS ------------------------------>
<?php $this->load->view("template/css"); ?>
<link href="<?php echo base_url(); ?>public/css/style_slide.css" rel="stylesheet" type="text/css" />

<!--------------------------- End CSS ------------------------------>

<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.easing.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/script.js"></script>

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

<style type="text/css">
<!--
/*Editor who edit you can Edit only edit area on top of style sheet*/
.bg_ads_left{
/*Edit area*/	
    background:url(http://www.tarad.com/asset/index1000/img_ads/bg_watch_discount_left.jpg) no-repeat;
	/*background-color:#FFFFFF;*/
	height: 835px;
	top: 119px;
/*End edit-area*/
/*Not Edit area*/
	background-position: right top;
	left: -500px;
	width: 50%;
	position: fixed;
	cursor: pointer;
/*End Not Edit area*/
}
.bg_ads_right{
/*Edit area*/	
	background:url(http://www.tarad.com/asset/index1000/img_ads/bg_watch_discount_right.jpg) no-repeat ;
	/*background-color:#FFFFFF;*/
	height: 835px;
	top: 119px;
/*End edit-area*/
/*Not Edit area*/
	background-position: left top;
	right: -500px;
	position: fixed;
	width: 50%;
	cursor: pointer;
/*End Not Edit area*/
}
-->
</style>

</head>
<body>

<!-- Start BG promotion L R
<a href="http://boomzstore.tarad.com/" target="_blank">
<div class="bg_ads_left"></div>
</a>
<a href="http://boomzstore.tarad.com/" target="_blank">
<div class="bg_ads_right"></div>  
</a> 
<!-- End Banner promotion L R -->

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
				
					<!--------------------------- box_left_menu ------------------------------>
					<?php $this->load->view("template/box_left_menu"); ?>
					<!--------------------------- end box_left_menu ------------------------------>
					
					<!--------------------------- box_email_news ------------------------------>
					<?php $this->load->view("template/box_email_news"); ?>
					<!--------------------------- end box_email_news ------------------------------>

					<!--------------------------- Start advertising_left ------------------------------>
			       <?php $this->load->view("template/advertising_left"); ?>
					<!--------------------------- end advertising_left ------------------------------>
					
				</div>
				<!--------------------------- end left_content ------------------------------>
				
				<!--------------------------- right_content ------------------------------>
				<div class="right_content">
					<div class="box_latest">

				<!--------------------------- box_latest_news ------------------------------>
        		<?php $this->load->view("template/right_slide_home"); ?>
				<!--------------------------- end box_latest_news -------------------------->

				<!--------------------------- box_latest_news ------------------------------>
        		<?php $this->load->view("template/right_news_home"); ?>
				<!--------------------------- end box_latest_news -------------------------->
				
				<!--------------------------- box_latest_product ------------------------------>
        		<?php $this->load->view("template/right_product_home"); ?>
				<!--------------------------- end box_latest_product -------------------------->
				
				<!--------------------------- box_latest_review ------------------------------>
        		<?php $this->load->view("template/right_review_home"); ?>
				<!--------------------------- end box_latest_review -------------------------->
	</div>
	<!--------------------------- end right_content ------------------------------>
</div>
<!--------------------------- end box_content ------------------------------>
			
<!--------------------------- box_content ------------------------------>
<div class="box_content">		
	<!--------------------------- left_content ------------------------------>
	<div class="left_content">		

	<!--------------------------- box_latest_review ------------------------------>
    <?php $this->load->view("template/left_weekly_sale_home"); ?>
	<!--------------------------- end box_latest_review -------------------------->

		<!--------------------------- box_latest_board ------------------------------>
           <div class="box_latest_board">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
  					var js, fjs = d.getElementsByTagName(s)[0];
 					if (d.getElementById(id)) {return;}
  						js = d.createElement(s); js.id = id;
  						js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						fjs.parentNode.insertBefore(js, fjs);
					}
					(document, 'script', 'facebook-jssdk'));
				</script>
				<div class="fb-like-box" data-href="http://www.facebook.com/pages/BoomzStorePage/287047281324848" data-width="686" data-colorscheme="light" data-show-faces="true" data-stream="no" data-header="false">
				</div>
			</div>
		<!--------------------------- end box_latest_board ------------------------------>				
       	</div>
	<!--------------------------- end left_content ------------------------------>

	<!--------------------------- right_content ------------------------------>
	<?php $this->load->view("template/right_content_home"); ?>
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
	</div>
	<!--------------------------- end main ------------------------------>
</body>
</html>
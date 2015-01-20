<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail News Page | BoomzStore.com - <?php echo $rs[0]['title_th'] ?></title>
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
		<?php $this->load->view("template/mainmenu_news"); ?>
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
					<div class="box_navigator"><a href="<?php echo base_url(); ?>home">หน้าแรก</a> >> <a href="<?php echo base_url(); ?>news">ข่าวสารไอที</a> >> <span class="navigator_this_page_color">เนื้อหาข่าวสารไอที</span></div>
					
					<!--------------------------- box_detail ------------------------------>
					<div class="box_detail">
						<!--------------------------- box_title_detail ------------------------------>
						<div class="box_title_list_news">
							<div class="icon_title"><img src="<?php echo base_url(); ?>public/img/icon_list_news.png" alt="" title="" /></div>
							<div class="title_list_detail">
								<h1 class="link_red"><?php echo $rs[0]['title_th'] ?></h1>
								<span class="title_list_posted"><?php echo $rs[0]['created'] ?></span>
							</div>
							<br style="clear: both;" />
						</div>
						<!--------------------------- end box_title_detail ------------------------------>

						<div class="detail_info">
							<!-- test detail -->
							<img src="<?php echo base_url(); ?>public/img/app_world_logo.jpg" alt="" title="" style="padding: 4px; border: 1px solid #CCC; margin-left: 70px; margin-bottom: 15px;" />
							<p>ข่าวต่อจาก ระบบเซิร์ฟเวอร์ BlackBerry ในยุโรปล่มติดกันสามวัน สหรัฐเริ่มโดนด้วย สรุปสถานการณ์ล่าสุดคือระบบกลับคืนมาหมดแล้ว แต่ระยะเวลาที่ล่มก็รวมทั้งหมด 4 วันทางซีอีโอร่วมและผู้ก่อตั้งบริษัทคือ Mike Lazaridis ได้ออกมาขอโทษผู้ใช้ BlackBerry ทั่วโลกผ่านวิดีโอบน YouTube อย่างไรก็ตาม ผู้ใช้ในบางภูมิภาคอาจจะเจอปัญหาข้อความดีเลย์บ้างเล็กน้อยสถิติอัพไทม์ของ RIM ในรอบ 18 เดือนที่ผ่านมาอยู่ที่ 99.97% ซึ่งถือว่าทำได้ดีมาก แต่เหตุการณ์ในรอบ 3-4 วันที่ผ่านมาก็คงทำให้ผู้ใช้ BlackBerry หลายคนเปลี่ยนใจเช่นกัน</p>
							<!-- end test detail -->
							<br style="clear: both;" />
						</div>
						
						<!--------------------------- tag_social_button ------------------------------>
						<div class="tag_social_button">
							<div class="box_tag"><span class="text_color_666">Tag :</span>&nbsp;&nbsp;<a href="#" target="_blank">iPhone4</a>, <a href="#" target="_blank">Apple</a>, <a href="#" target="_blank">4S</a>, <a href="#" target="_blank">Smart Mobile</a></div>

							<!--------------------------- box_social_button ------------------------------>
							<div class="box_social_button">
								<!--<div class="tweet_button"><a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="kaninbakavee">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script></div>
								<div class="tweet_button">
									<!-- Place this tag where you want the +1 button to render -->
									<!--<g:plusone size="medium"></g:plusone>

									<!-- Place this render call where appropriate -->
									<!--<script type="text/javascript">
									  (function() {
										var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										po.src = 'https://apis.google.com/js/plusone.js';
										var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									  })();
									</script>
								</div>
								<div class="facebook_button">
									<div id="fb-root"></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) {return;}
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>
									<div class="fb-like" data-send="true" data-layout="button_count" data-width="50" data-show-faces="true"></div>
								</div>-->
							</div>
							<!--------------------------- end box_social_button ------------------------------>
							<br style="clear: both;" />
						</div>
						<!--------------------------- end tag_social_button ------------------------------>

						<!--------------------------- box_outer_interesting_detail ------------------------------>
						<div class="box_outer_interesting_detail">
							<div class="tab_outer_interesting_detail">
								<img src="<?php echo base_url(); ?>public/img/tab_outer_interesting_news.jpg" alt="" title="" />
								<span class="text_interesting_detail">ข่าวไอทีอื่นๆ ที่น่าสนใจ</span>
								<span class="icon_interesting_detail"><img src="<?php echo base_url(); ?>public/img/icon_news.png" alt="" title="" /></span>							</div>
							
							<!--------------------------- box_detail_interesting_detail ------------------------------>
							<div class="box_detail_interesting_detail">
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<div class="box_list_detail_interesting">
									<div class="thumbnail_have_border"><a href="#" target="_blank"><img src="<?php echo base_url(); ?>public/img/thumbnail_right_news3.jpg" alt="" title="" /></a></div>
									<div class="box_title_news_top5">
										<h2><a href="#" target="_blank" class="link_h2">Apple ปล่อยอัพเดท iTunes 10.5.1 beta สำหรับนักพัฒนาแล้ว!</a></h2>
										<span class="posted_news">Posted: Sun, 16 October 2011</span>
									</div>
								</div>
								<br style="clear: both;" />
							</div>
							<div class="bar_all_page"><b><a href="#" target="_blank">อ่านข่าวทั้งหมด</a></b></div>
							<!--------------------------- end box_detail_interesting_detail ------------------------------>
						</div>
						<!--------------------------- end box_outer_interesting_detail ------------------------------>

						<!--------------------------- box_comment ------------------------------>
						<div class="box_comment">
							<div class="tab_all_comment"><span class="text_all_comment"><b>ข้อความคิดเห็น :&nbsp;</b></span></div>
							<!--------------------------- box_section_comment ------------------------------>
							<div class="box_section_comment">
								<!--------------------------- box_list_comment ------------------------------>
								Insert Facebook Comment
								<br style="clear: both;" />
								<!--------------------------- end box_list_comment ------------------------------>
							</div>
							<!--------------------------- end box_section_comment ------------------------------>
							
							<!--------------------------- box rules comment ------------------------------>
							<div class="box_outer_interesting_detail">
								<div class="tab_all_comment"><span class="text_all_comment"><b>กฏ-กติกาการแสดงความคิดเห็น :</b></span></div>
								<div class="box_detail_list_detail">
									<ol class="box_list_rules">
										<li>ห้ามแสดงความคิดเห็นในเชิงก่อกวนนอกประเด็น และหรือสร้างความรำคาญ</li>
										<li>ห้ามแสดงความคิดเห็นเพื่อขายสินค้า หรือโฆษณาแอบแฝง</li>
										<li>ห้ามแสดงความคิดเห็นพาดพิงหรือสร้างความเสียหายให้แก่ผู้อื่น</li>
										<li>ห้ามแสดงความคิดเห็น โดยใส่ข้อความส่วนตัว, อีเมล์ และเบอร์โทรศัพท์ หากเกิดปัญหาขึ้น ทีมงานไม่ขอรับผิดชอบใดๆ ทั้งสิ้น</li>
										<li>ห้ามแสดงความคิดเห็นด้วยภาษาหยาบคาย และเชิงลามกอนาจาร</li>
										<li>ห้ามแสดงความคิดเห็นหมิ่นสถาบันเบื้องสูง และศาสนาต่างๆ เป็นอันขาด</li>
									</ol>
								</div>
							</div>
							<!--------------------------- end ox rules comment ------------------------------>
						</div>
						<!--------------------------- end box_comment ------------------------------>
						
					</div>
					<!--------------------------- end box_detail ------------------------------>
				</div>
				<!--------------------------- end left_content ------------------------------>

				<!--------------------------- Start right_content ------------------------------>
				<?php $this->load->view("template/right_content_news"); ?>
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
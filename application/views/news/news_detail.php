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

<!--------------------------- Start FB Comment ------------------------------>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--------------------------- End FB Comment ------------------------------>

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
		<?php
			if(count($rs)==0)
			{
				echo"<div class='box_list_detail' align='center'>";
				echo"</br>";
				echo"-- ขอโทษค่ะ! ไม่พบข้อมูลข่าวหรือบทความที่ท่านต้องการ --";
				echo"</br>";
				echo"</br>";
				echo"</div>";
			}
			else
			{
				//$no=$this->uri->segment(3)+1;
				foreach($rs as $r)
				{
				$month_th = array(  
					"1"=>"มกราคม",  
					"2"=>"กุมภาพันธ์",  
					"3"=>"มีนาคม",  
					"4"=>"เมษายน",  
					"5"=>"พฤษภาคม",  
					"6"=>"มิถุนายน",   
					"7"=>"กรกฎาคม",  
					"8"=>"สิงหาคม",  
					"9"=>"กันยายน",  
					"10"=>"ตุลาคม",  
					"11"=>"พฤศจิกายน",  
					"12"=>"ธันวาคม"                    
				);  
				$no_page = $r{'id'};
				$url_pic = $r{'url_pic'};
				echo"<div class='left_content'>";
					echo"<div class='box_navigator'>";
						echo"<a href='http://www.boomzstore.com/home'>หน้าแรก</a> >> <a href='index'>ข่าวสารไอที</a> >> <span class='navigator_this_page_color'>".$r{'title_th'}."</span>";
					echo"</div>";
					echo"<div class='box_detail'>";
					echo"<div class='box_title_list_news'>";
					echo"<div class='icon_title'>";
					echo"<img src='../../../public/img/icon_list_news.png' alt='' title='' />";
					echo"</div>";
					echo"<div class='title_list_detail'>";
						echo"<h1 class='link_red'>".$r{'title_th'}."</h1>";
						echo"<div class='title_list_detail'><span class='title_list_posted'>โพสต์เมื่อ : ".date('d' ,strtotime($r{'modified'})).' '.$month_th[date('n' ,strtotime($r{'modified'}))].' '.date('Y' ,strtotime($r{'modified'}))."</div>";
					echo"</div>";
					echo"<br style='clear: both;' />";
				echo"</div>";		
				echo"<div class='detail_info'>";
					echo"<img src='$url_pic' alt='' title='' style='padding: 0px; border: 1px solid #CCC; margin-left: 0px; margin-bottom: 20px;' />";		
					echo"<p>".$r{'content_th'}."</p>";	
					echo"</div>";
				echo"</div>";
				echo"<div class='tag_social_button'>";
					echo"<div class='box_tag'>";
						echo"<span class='text_color_666'>Tag :</span>&nbsp;&nbsp;<span class='text_color_orange'>".$r{'keywords'}."</span></div>";
					echo"<br style='clear: both;' />";
				echo"</div>";
				echo"<div class='box_comment'>";
					echo"<div class='tab_all_comment'>";
						echo"<span class='text_all_comment'><b>ข้อความคิดเห็น :&nbsp;</b></span>";
					echo"</div>";
					echo"<div class='box_section_comment'>";
					echo"<div class='fb-comments' data-href='http://www.boomzstore.com/news/news_detail_$no_page' data-num-posts='10' data-width='685'></div>";
					echo"<br style='clear: both;' />";
				echo"</div>";
				//$no++;
				}
			}
		?>
						
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
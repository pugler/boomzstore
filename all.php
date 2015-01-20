<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News | BoomzStore.com - ศูนย์กลางการแบ่งปัน ความรู้ บทความ และการซื้อขายสินค้าไอที ราคาถูก สำหรับคนดิจิตอล</title>
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

<!-- Set Class Pagination -->
	<style>
	.pagination
	{
		float:left;
		width:600px;
		margin-top:5px;
	}
	.pagination strong
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#fff;
		color:red;
	}
	.pagination a
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#eee;
		color:#555;
		text-decoration:none;
	}
	.pagination a:hover
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#f2f2f2;
		color:red;
	}
	.pagination a:active
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#fff;
		color:red;
	}
	</style>
<!-- End Class Pagination -->

</head>
<body>
	<!--------------------------- main ------------------------------>
	<div class="main">
		
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
					<div class="box_navigator">
						<a href="<?php echo base_url(); ?>home">หน้าแรก</a> >> <span class="navigator_this_page_color">ข่าวสารไอที</span>
					</div>
					
					<!--------------------------- category_it_news ------------------------------>
					<div class="category_it_news">
						<span class="stly_text_buy_seal_hot"><b>หมวดข่าวไอที :</b></span><br />
						<!-- <div class="general_news"><a href="#" class="general_news_text">ข่าวทั่วไป</a></div> -->
						<!--------- this page -------->
						<div class="general_news"><span class="general_news_text_visited">ข่าวทั่วไป</span></div>
						
						<div class="pr_news"><a href="#" class="general_news_text">ข่าวประชาสัมพันธ์</a></div>
						<!--------- this page -------->
						<!--<div class="pr_news"><span class="general_news_text_visited">ข่าวประชาสัมพันธ์</span></div>-->

						<div class="success_news"><a href="#" class="success_news_text">ข่าวความสำเร็จ</a></div>
						<!--------- this page -------->
						<!--<div class="success_news"><span class="success_news_text_visited">ข่าวความสำเร็จ</span></div>-->
						<br style="clear: both;" />
					</div>
					<!--------------------------- end category_it_news ------------------------------>
					</br>
					
		<!--------------------------- Start box_list_detail ------------------------------>	
<!-- Start Pagination -->
<?php echo $this->pagination->create_links(); ?>
<!-- End Pagination -->
</br>
</br>
</br>
		<?php
			if(count($rs)==0)
			{
				echo"<tr><td colspan='5' align='center'>--no data--</td></tr>";
			}
			else
			{
				$no=$this->uri->segment(3)+1;
				foreach($rs as $r)
				{
				$no_page = $r{'id'};
				if 
				echo"<div class='box_list_detail'>";
					echo"<div class='box_title_list_news'>";
							echo"<div class='icon_title'>";
								echo"<img src='../../../public/img/icon_list_news.png' alt='' title='' />";
							echo"</div>";
							echo"<div class='title_list_detail'>";
								echo"<h1><a href='new/news_detail_$no_page' target='_blank' class='link_red'>".$r{'title_th'}."</a></h1>";
								echo"<div class='title_list_detail'><span class='title_list_posted'>Posted : ".$r{'modified'}."</span></div>";
							echo"</div>";
							echo"<br style='clear: both;' />";
						echo"</div>";
						echo"<div class='box_detail_list_detail'>";
							echo"<div class='left_latest_news'>";
								echo"<div class='thumbnail_have_border'>";
								echo"<a href='new/news_detail_$no_page' target='_blank'><img src='../../../public/img/thumbnail_left_news.jpg' alt='' title='' /></a>";
								echo"</div>";
							echo"</div>";
							echo"<div class='detail_list_detail'>";
								echo"<p>".$r{'caption_th'}."</p>";
								echo"<span class='list_detail_readmore'><a href='new/news_detail_$no_page' target='_blank'>อ่านต่อ..</a></span>";
							echo"</div>";	
							echo"<br style='clear: both;' />";	
						echo"</div>";
						echo"<div class='tag_social_button'>";
							echo"<div class='box_tag'>";
							echo"<span class='text_color_666'>Tag :</span>&nbsp;&nbsp;".$r{'keywords'}."</div>";
						echo"<br style='clear: both;' />";
					echo"</div>";
				echo"</div>";
				echo"</br>";
					$no++;
				}
			}
		?>
<!-- Start Pagination -->
<?php echo $this->pagination->create_links(); ?>
<!-- End Pagination -->
<!--------------------------- End box_list_detail ------------------------------>
</br>
</br>
</br>
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
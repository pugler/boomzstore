<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-------------------------- Start CSS ----------------------------->
<?php $this->load->view("template/css"); ?>
<!--------------------------- End CSS ------------------------------>

<!--------------------------- Start News Tab ------------------------------>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content3").hide(); //Hide all content
	$("ul.tabs3 li:first").addClass("active").show(); //Activate first tab
	$(".tab_content3:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs3 li").click(function() {
		$("ul.tabs3 li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content3").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>
<div class="container3">
    <ul class="tabs3">
        <li><a href="#news-tab9">รีวิวมือถือ</a></li>
        <li><a href="#news-tab10">รีวิวคอมพิวเตอร์</a></li>
        <li><a href="#news-tab11">รีวิวเกมส์</a></li>
        <li><a href="#news-tab12">รีวิวกล้อง</a></li>
		<li><a href="#news-tab13">บทสัมภาษณ์</a></li>
    </ul>
    <div class="tab_container3">
        <div id="news-tab9" class="tab_content3">
            <!--------------------------- box_detail_latest (News) ------------------------>
		<div class="box_detail_latest">
				<?php
			if(count($rs5)==0)
			{
			    echo"<div align='center'>";
				echo"</br>";
				echo"</br>";
				echo"-- ขอโทษค่ะ! ไม่พบข้อมูลข่าวหรือบทความที่ท่านต้องการ --";
				echo"</br>";
				echo"</br>";
				echo"</div>";
			}
			else
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
				//$no=$this->uri->segment(3)+1;
				foreach($rs5 as $r)
				{
				$no_page = $r{'id'};
				$url_pic_small = $r{'url_pic_small'};
				echo"<div class='thumbnail_have_border'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที'><img src='$url_pic_small' alt='' title='' /></a></div>";
				echo"<div class='detail_left_latest_news'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที' class='link_red'>".$r{'title_th'}."</a></div>";
				echo"<br/>";
				echo"<div class='detail_left_latest_news'> โพสต์เมื่อ : ".date('d' ,strtotime($r{'modified'})).' '.$month_th[date('n' ,strtotime($r{'modified'}))].' '.date('Y' ,strtotime($r{'modified'}))."</div>";
				echo"<div class='detail_left_latest_news'>".$r{'caption_th'}."</div>";
				echo"<div class='detail_left_latest_news'><div class='fb-like' data-href='http://www.boomzstore.com/articles/articles_detail_$no_page' data-send='false' data-layout='button_count' data-width='450' data-show-faces='false' data-font='tahoma'></div>&nbsp;";
				echo"<a href='https://twitter.com/share' class='twitter-share-button' data-url='http://www.boomzstore.com/news/news_detail_$no_page' data-via='BoomzStore' data-hashtags='Review'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
				echo"</div>";
				echo"<br/>";
				//$no++;
				}
			}
		?>
		</div>
	<!--------------------------- end box_detail_latest (News) ------------------------------>
        </div>
        <div id="news-tab10" class="tab_content3">
            <!--------------------------- box_detail_latest (News) ------------------------>
		<div class="box_detail_latest">
					<?php
			if(count($rs6)==0)
			{
			    echo"<div align='center'>";
				echo"</br>";
				echo"</br>";
				echo"-- ขอโทษค่ะ! ไม่พบข้อมูลข่าวหรือบทความที่ท่านต้องการ --";
				echo"</br>";
				echo"</br>";
				echo"</div>";
			}
			else
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
				//$no=$this->uri->segment(3)+1;
				foreach($rs6 as $r)
				{
				$no_page = $r{'id'};
				$url_pic_small = $r{'url_pic_small'};
				echo"<div class='thumbnail_have_border'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที'><img src='$url_pic_small' alt='' title='' /></a></div>";
				echo"<div class='detail_left_latest_news'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที' class='link_red'>".$r{'title_th'}."</a></div>";
				echo"<br/>";
				echo"<div class='detail_left_latest_news'> โพสต์เมื่อ : ".date('d' ,strtotime($r{'modified'})).' '.$month_th[date('n' ,strtotime($r{'modified'}))].' '.date('Y' ,strtotime($r{'modified'}))."</div>";
				echo"<div class='detail_left_latest_news'>".$r{'caption_th'}."</div>";
				echo"<div class='detail_left_latest_news'><div class='fb-like' data-href='http://www.boomzstore.com/articles/articles_detail_$no_page' data-send='false' data-layout='button_count' data-width='450' data-show-faces='false' data-font='tahoma'></div>&nbsp;";
				echo"<a href='https://twitter.com/share' class='twitter-share-button' data-url='http://www.boomzstore.com/news/news_detail_$no_page' data-via='BoomzStore' data-hashtags='Review'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
				echo"</div>";
				echo"<br/>";
				//$no++;
				}
			}
		?>
		</div>
	<!--------------------------- end box_detail_latest (News) ------------------------------>
        </div>
        <div id="news-tab11" class="tab_content3">
            <!--------------------------- box_detail_latest (News) ------------------------>
		<div class="box_detail_latest">
					<?php
			if(count($rs7)==0)
			{
			    echo"<div align='center'>";
				echo"</br>";
				echo"</br>";
				echo"-- ขอโทษค่ะ! ไม่พบข้อมูลข่าวหรือบทความที่ท่านต้องการ --";
				echo"</br>";
				echo"</br>";
				echo"</div>";
			}
			else
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
				//$no=$this->uri->segment(3)+1;
				foreach($rs7 as $r)
				{
				$no_page = $r{'id'};
				$url_pic_small = $r{'url_pic_small'};
				echo"<div class='thumbnail_have_border'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที'><img src='$url_pic_small' alt='' title='' /></a></div>";
				echo"<div class='detail_left_latest_news'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที' class='link_red'>".$r{'title_th'}."</a></div>";
				echo"<br/>";
				echo"<div class='detail_left_latest_news'> โพสต์เมื่อ : ".date('d' ,strtotime($r{'modified'})).' '.$month_th[date('n' ,strtotime($r{'modified'}))].' '.date('Y' ,strtotime($r{'modified'}))."</div>";
				echo"<div class='detail_left_latest_news'>".$r{'caption_th'}."</div>";
				echo"<div class='detail_left_latest_news'><div class='fb-like' data-href='http://www.boomzstore.com/articles/articles_detail_$no_page' data-send='false' data-layout='button_count' data-width='450' data-show-faces='false' data-font='tahoma'></div>&nbsp;";
				echo"<a href='https://twitter.com/share' class='twitter-share-button' data-url='http://www.boomzstore.com/news/news_detail_$no_page' data-via='BoomzStore' data-hashtags='Review'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
				echo"</div>";
				echo"<br/>";
				//$no++;
				}
			}
		?>
		</div>
	<!--------------------------- end box_detail_latest (News) ------------------------------>
        </div>
        <div id="news-tab12" class="tab_content3">
            <!--------------------------- box_detail_latest (News) ------------------------>
		<div class="box_detail_latest">
					<?php
			if(count($rs8)==0)
			{
			    echo"<div align='center'>";
				echo"</br>";
				echo"</br>";
				echo"-- ขอโทษค่ะ! ไม่พบข้อมูลข่าวหรือบทความที่ท่านต้องการ --";
				echo"</br>";
				echo"</br>";
				echo"</div>";
			}
			else
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
				//$no=$this->uri->segment(3)+1;
				foreach($rs8 as $r)
				{
				$no_page = $r{'id'};
				$url_pic_small = $r{'url_pic_small'};
				echo"<div class='thumbnail_have_border'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที'><img src='$url_pic_small' alt='' title='' /></a></div>";
				echo"<div class='detail_left_latest_news'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที' class='link_red'>".$r{'title_th'}."</a></div>";
				echo"<br/>";
				echo"<div class='detail_left_latest_news'> โพสต์เมื่อ : ".date('d' ,strtotime($r{'modified'})).' '.$month_th[date('n' ,strtotime($r{'modified'}))].' '.date('Y' ,strtotime($r{'modified'}))."</div>";
				echo"<div class='detail_left_latest_news'>".$r{'caption_th'}."</div>";
				echo"<div class='detail_left_latest_news'><div class='fb-like' data-href='http://www.boomzstore.com/articles/articles_detail_$no_page' data-send='false' data-layout='button_count' data-width='450' data-show-faces='false' data-font='tahoma'></div>&nbsp;";
				echo"<a href='https://twitter.com/share' class='twitter-share-button' data-url='http://www.boomzstore.com/news/news_detail_$no_page' data-via='BoomzStore' data-hashtags='Review'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
				echo"</div>";
				echo"<br/>";
				//$no++;
				}
			}
		?>
		</div>
	<!--------------------------- end box_detail_latest (News) ------------------------------>
        </div>
        <div id="news-tab13" class="tab_content3">
            <!--------------------------- box_detail_latest (News) ------------------------>
		<div class="box_detail_latest">
					<?php
			if(count($rs9)==0)
			{
			    echo"<div align='center'>";
				echo"</br>";
				echo"</br>";
				echo"-- ขอโทษค่ะ! ไม่พบข้อมูลข่าวหรือบทความที่ท่านต้องการ --";
				echo"</br>";
				echo"</br>";
				echo"</div>";
			}
			else
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
				//$no=$this->uri->segment(3)+1;
				foreach($rs9 as $r)
				{
				$no_page = $r{'id'};
				$url_pic_small = $r{'url_pic_small'};
				echo"<div class='thumbnail_have_border'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที'><img src='$url_pic_small' alt='' title='' /></a></div>";
				echo"<div class='detail_left_latest_news'><a href='http://www.boomzstore.com/articles/articles_detail_$no_page' target='_blank' title='บทความไอที' class='link_red'>".$r{'title_th'}."</a></div>";
				echo"<br/>";
				echo"<div class='detail_left_latest_news'> โพสต์เมื่อ : ".date('d' ,strtotime($r{'modified'})).' '.$month_th[date('n' ,strtotime($r{'modified'}))].' '.date('Y' ,strtotime($r{'modified'}))."</div>";
				echo"<div class='detail_left_latest_news'>".$r{'caption_th'}."</div>";
				echo"<div class='detail_left_latest_news'><div class='fb-like' data-href='http://www.boomzstore.com/articles/articles_detail_$no_page' data-send='false' data-layout='button_count' data-width='450' data-show-faces='false' data-font='tahoma'></div>&nbsp;";
				echo"<a href='https://twitter.com/share' class='twitter-share-button' data-url='http://www.boomzstore.com/news/news_detail_$no_page' data-via='BoomzStore' data-hashtags='Review'>Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>";
				echo"</div>";
				echo"<br/>";
				//$no++;
				}
			}
		?>
		</div>
	<!--------------------------- end box_detail_latest (News) ------------------------------>
   </div>
	<div class="bar_all_page3"><b><a href="<?php echo base_url(); ?>articles" title="บทความไอทีทั้งหมด">อ่านบทความทั้งหมด</a></b></div>
    </div>
</div>
<div style="clear: both; display: block; text-align:center; padding: 7px;"></div>

<!--------------------------- end right_latest_news ------------------------------>
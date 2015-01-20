<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-------------------------- Start CSS ----------------------------->
<?php $this->load->view("template/css"); ?>
<!--------------------------- End CSS ------------------------------>

<!--------------------------- Start Slide Tab ------------------------------>
	
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery1.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>public/js/slides1.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '<?php echo base_url(); ?>public/img/slide_home/img/loading.gif',
				play: 10000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
<div id="container_slide">
		<div id="body_slide">
			<!-- Icon New <img src="../img/slide_home/new-ribbon.png" width="112" height="112" alt="New Ribbon" id="ribbon"> -->
			<div id="slides">
				<div class="slides_container">
					<div class="slide">
						<a href="http://boomzstore.tarad.com" title="Boomzstore TARAD" target="_blank"><img src="<?php echo base_url(); ?>public/img/slide_home/bn_boomz_tarad.png" width="740" height="300" alt="Slide 1"></a>
						<!--  <div class="caption">
							<p>Advertise with us</p>
						</div> -->
					</div>
					<div class="slide">
						<a href="http://boomzstore.lnwshop.com" title="Boomzstore lnwshop" target="_blank"><img src="<?php echo base_url(); ?>public/img/slide_home/bn_boomz_lnwshop.png" width="740" height="300" alt="Boomzstore lnwshop"></a>
						<!--  <div class="caption">
							<p>Advertise with us</p>
						</div> -->
					</div>
					<div class="slide">
						<a href="<?php echo base_url(); ?>store" title="BoomzStore Weekly Sale"><img src="<?php echo base_url(); ?>public/img/slide_home/bn_boomz_weeklysale.png" width="740" height="300" alt="Advertise with us"></a>
						<!--  <div class="caption">
							<p>Advertise with us</p>
						</div> -->
					</div>
					<div class="slide">
						<a href="<?php echo base_url(); ?>event" title="BoomzStore Free Shipping"> <img src="<?php echo base_url(); ?>public/img/slide_home/bn_boomz_shipping.png" width="740" height="300" alt="Advertise with us"></a>
						<!--  <div class="caption">
							<p>Advertise with us</p>
						</div> -->
					</div>
					<div class="slide">
						<a href="<?php echo base_url(); ?>advertise" title="Advertise with BoomzStore"><img src="<?php echo base_url(); ?>public/img/slide_home/bn_boomz_ads.png" width="740" height="300" alt="Advertise with us"></a>
						<!--  <div class="caption">
							<p>Advertise with us</p>
						</div> -->
					</div>
				</div>
				<a href="#" class="prev"><img src="<?php echo base_url(); ?>public/img/slide_home/arrow-prev.png" width="19" height="200" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="<?php echo base_url(); ?>public/img/slide_home/arrow-next.png" width="19" height="200" alt="Arrow Next"></a>
			</div>
			<!-- BG <img src="../img/slide_home/example-frame.png" width="739" height="341" alt="Example Frame" id="frame"> -->
		</div>
</div>
 <div class="box_tags"><span class="navigator_this_page_color"><strong>คำยอดฮิต : </strong></span><a href="http://boomzstore.tarad.com/product_867382_th" title="เคส iPhone 4S" target="_blank">เคส iPhone 4S</a> , <a href="http://boomzstore.lnwshop.com/category/17/เคส-galaxy-s3/" title="เคส Galaxy S3" target="_blank">เคส Galaxy S3</a> , <a href="http://boomzstore.tarad.com/product_908186_th" title="Plug กันฝุ่นมือถือ" target="_blank">Plug กันฝุ่นมือถือ</a> , <a href="http://boomzstore.lnwshop.com/category/3/weekly-sale-ลด-10-15/" title="Weekly Sale ลด 10-15%" target="_blank">Weekly Sale ลด 10-15%</a> , <a href="http://boomzstore.tarad.com/product_867772_th" title="อุปกรณ์มือถือ" target="_blank">อุปกรณ์มือถือ</a></div>
 <br style="clear: both;" />
<!--------------------------- end Slide Tab ------------------------------>
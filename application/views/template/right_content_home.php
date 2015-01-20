<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-------------------------- Start CSS ----------------------------->
<?php $this->load->view("template/css"); ?>
<!--------------------------- End CSS ------------------------------>
<!--------------------------- right_content ------------------------------>
<div class="right_content">
	<div class="box_standard_300"><a href="http://www.facebook.com/casemanpage" target="_blank" rel="nofollow"><img src="<?php echo base_url(); ?>public/img/ads/banner_caseman_300x250.jpg" alt="" width="300" height="250" border="0" title="ลงโฆษณา" /></a>
	</div>
	<div class="box_standard_fb300">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
		<script>
			new TWTR.Widget(
				{
  					version: 2,
  					type: 'profile',
  					rpp: 10,
  					interval: 30000,
  					width: 300,
  					height: 365,
  					theme: {
    				shell: {
      				background: '#cccccc',
      				color: '#666'
   		 		},
    		tweets: 
				{
      				background: '#ffffff',
      				color: '#666',
      				links: '#f13a01'
    			}
  			},
  				features: 
				{
    				scrollbar: true,
    				loop: false,
    				live: false,
    				hashtags: true,
    				timestamp: true,
   					avatars: true,
    				behavior: 'default'
  				}
}).render().setUser('BoomzStore').start();
		</script>
	</div>
</div>
<!--------------------------- end right_content ------------------------------>
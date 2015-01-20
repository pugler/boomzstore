<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-------------------------- Start CSS ----------------------------->
<?php $this->load->view("template/css"); ?>
<!--------------------------- End CSS ------------------------------>

<script type="text/javascript" src="<?php echo base_url(); ?>public/css/jquery.topbar_menu.js"></script>
<script>
        $('document').ready(function(){
            $('.topbar_menu').fixedMenu();
        });
</script>
<div class="topbar_menu" >
    <ul>
      <li class="single-link">
        <a href="<?php echo base_url(); ?>">+หน้าแรก</a>      
		</li>
      <!--<li class="current"> -->
	  <li class="single-link">
        <a href="http://www.boomzgadget.com/">สินค้าไอที</a>      
		</li>
	   <li class="single-link">
        <a href="http://www.boomzfashion.com/">เสื้อผ้าแฟชั่น</a>      
		</li>
	  	   <li class="single-link">
        <a href="<?php echo base_url(); ?>contact_us">รับออกแบบกราฟฟิก</a>      
	  </li>
	   <li class="single-link">
        <a href="<?php echo base_url(); ?>contact_us">รับออกแบบเว็บ</a>      
	  </li>
	  <li class="single-link">
        <a href="<?php echo base_url(); ?>contact_us">รับเขียนโปรแกรม</a>      
	  </li>
	  <li class="single-link">
        <a href="<?php echo base_url(); ?>contact_us">รับดูแลและเพิ่มข้อมูลบนเว็บ</a>      
	  </li>
	  <li class="single-link">
        <a href="<?php echo base_url(); ?>contact_us">รับสกรีนและขายเสื้อยืด</a>      
	  </li>
      <li class="single-link">
		<?php if(empty($_COOKIE['member_info'])) :?>
        <a href="<?php echo base_url(); ?>register">+สมัครสมาชิก</a>        
		<?php else : ?>
		<a href="<?php echo base_url(); ?>member/profile">ข้อมูลสมาชิก</a>        
		<?php endif ?>
		</li>
	  <li class="single-link">
		<?php if(empty($_COOKIE['member_info'])) : ?>
			<a href="<?php echo base_url(); ?>member/login">เข้าสู่ระบบ</a>      
		<?php else : ?>
			<a href="<?php echo base_url(); ?>member/logout">ออกจากระบบ</a>      
		<?php endif ?>
		</li>
	  <li class="single-link">
        <a href="<?php echo base_url(); ?>enewsletter">สมัครรับข่าวสาร</a>      
		</li>
	  <li class="single-link">
        <a href="<?php echo base_url(); ?>advertise">ลงโฆษณา</a>
      </li>
	  <li class="single-link">
        <a href="<?php echo base_url(); ?>howto">ช่วยเหลือ |</a>      
	</li>
    </ul>
</div>
<div class="header-logo"><img src="<?=base_url()?>public/img/logo/logo_backend1.gif" /></div>
<div class="header-nav">
	<span class="blue12-hello">Hello,</span>&nbsp;&nbsp;
	<?=$this->session->userdata('fullname')?>&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="<?=base_url()?>index.php/logout" class="Lwhite">Log Out</a>
</div>
<?php echo(doctype('xhtml1-trans'))?>
<html>
<head>
    <title>CMS | <?=$title?></title>
    <?php echo(meta(array('name'=>'Content-type','content'=>'text/html;charset=utf-8','type'=>'equiv')))?>
    <?php echo(link_tag(base_url().'public/css/layout.css'))?>
    <?php echo(link_tag(base_url().'public/css/style.css'))?>
    <?php echo(link_tag(base_url().'public/css/element.css'))?>
    <?php echo(link_tag(base_url().'public/css/font.css'))?>
		<script type="text/javascript" djConfig="parseOnLoad: true" src="<?php echo(base_url())?>library/dojo/dojo/dojo.js"></script>
		<script type="text/javascript">
			dojo.require("dijit.Dialog");
			dojo.require("dijit.form.Button");
		</script>
		<script type="text/javascript" src="<?php echo(base_url())?>public/js/ajax.js"></script>
    <script type="text/javascript" src="<?php echo(base_url())?>public/js/javascript.js"></script>
    <script type="text/javascript" src="<?php echo(base_url())?>plugins/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
</head>
<body>
<center>
	<div id="header"><?=$this->load->view('layouts/header')?></div>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="center" valign="top" width="200"><div id="navigator"><?=$this->load->view('layouts/navigator')?></div></td>
			<td align="left" valign="top"><?=$this->load->view($content)?></td>
		</tr>
	</table>
	<div class="blank-footer"><!-- blank --></div>
	<div id="footer"><?=$this->load->view('layouts/footer')?></div>
</center>

</body>
</html>
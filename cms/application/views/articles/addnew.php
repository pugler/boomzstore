<script type="text/javascript" src="<?php echo(base_url())?>public/js/editor-full.js"></script>

<?php if(isset($error)):?>
<div class="box-error"><b><?=$error?></b></div>
<?php endif;?>

<div class="block-status-lavel2">
	<div class="status-lavel2"><img src="<?=base_url()?>public/img/icon/<?=$imgTitle?>" align="absmiddle" />&nbsp;&nbsp;<?=$txtTitle?></div>
</div>

<form method="post" action="/cms/<?=$this->router->class?>/addnew" id="frm">
<dl>

	<dt>Type</dt>
	<dd>
		<select name="article_type" class="properties">
		<?php foreach($this->cate as $c):?>
			<option value="<?=$c?>"><?=$c?></option>
		<?php endforeach;?>
		</select>
	</dd>
	
	<!--
	<dt>Thumbnail</dt>
	<dd><input type="text" name="thumb" id="thumb" class="cms-thumb" readonly /> <img src="../../../public/img/icon/picture.png" class="cursor" onclick="setFile('thumb', null)" title="Insert Image" /> <img src="../../../public/img/icon/pill.png" class="cursor" onclick="thumb.value='';" title="Delete" /> <i>(248px * 114px)</i></dd>
	-->
	  <dt>Pic URL Small </dt>
	  <dd><input type="text" name="url_pic_small" class="cms" /> 
	  <i>(Size 150px * 109px)</i></dd> 
	  <dt>Pic URL </dt>
	<dd><input type="text" name="url_pic" class="cms" /> 
	  <i>(Size 330px * 248px)</i></dd>
	 <dt>Pic URL 2 </dt>
	<dd><input type="text" name="url_pic2" class="cms" /> 
	  <i>(Size 330px * 248px)</i></dd>
	  <dt>Pic URL 3 </dt>
	<dd><input type="text" name="url_pic3" class="cms" /> 
	  <i>(Size 330px * 248px)</i></dd>
	  <dt>Pic URL 4 </dt>
	<dd><input type="text" name="url_pic4" class="cms" /> 
	  <i>(Size 330px * 248px)</i></dd>
	 
	<dt>Title</dt>
	<dd><input type="text" name="title_th" class="cms" /></dd>
	<dt>Caption</dt>
	<dd><input type="text" name="caption_th" class="cms" /></dd>
	<dt>Owner</dt>
	<dd><textarea name="owner_th" id="owner_th" class="cms-detail"></textarea></dd>
	<dt>Content</dt>
	<dd><textarea name="detail_th" id="detail_th" class="cms-detail"></textarea></dd>
	<dt>Review</dt>
	<dd><textarea name="review_th" id="review_th" class="cms-detail"></textarea></dd>
	<dt>Keywords</dt>
	<dd><input type="text" name="keywords" class="cms"  /></dd>
    <dt>&nbsp;</dt>
	<dd>Example: apple, galaxy tab</dd>
	<dt>Show</dt>
	<dd><input type="checkbox" name="is_show" class="checkbox" checked="checked" />&nbsp;Active</dd>
	<dt>&nbsp;</dt>
	<!--dd><input type="submit" class="bt" value="เพิ่มข้อมูล" /></dd-->
	<dd><input type="button" class="bt" value="Add"onclick="dojo.byId('frm').submit();" /></dd>
</dl>
</form>

<?=br(4)?>
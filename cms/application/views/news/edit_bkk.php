<script type="text/javascript" src="<?php echo(base_url())?>public/js/editor-full.js"></script>

<?php if(isset($complete)):?>
<div class="box-complete"><b><?=$complete?></b></div>
<?php endif;?>

<?php if(isset($error)):?>
<div class="box-error"><b><?=$error?></b></div>
<?php endif;?>

<div class="block-status-lavel2">
	<div class="status-lavel2"><img src="<?=base_url()?>public/img/icon/<?=$imgTitle?>" align="absmiddle" />&nbsp;&nbsp;<?=$txtTitle?></div>
</div>

<form method="post" action="" id="frm">
<dl>

	<dt>Type</dt>
	<dd>
		<select name="news_type" class="properties">
		<?php foreach($this->cate as $c):?>
			<?php if($result->news_type==$c):?>
			<option value="<?=$c?>" selected><?=$c?></option>
			<?php else:?>
			<option value="<?=$c?>"><?=$c?></option>
			<?php endif;?>
		<?php endforeach;?>
		</select>
	</dd>
	<dt>Thumbnail</dt>
	<dd><input type="text" name="thumb" id="thumb" class="cms-thumb" value="<?=$result->thumbnail?>" readonly /> <img src="<?=base_url()?>public/img/icon/picture.png" class="cursor" onclick="setFile('thumb', null)" title="Insert Image" /> <img src="<?=base_url()?>public/img/icon/pill.png" class="cursor" onclick="thumb.value='';" title="Delete" /> <i>(248px * 114px)</i></dd>
	<dt>Title</dt>
	<dd><input type="text" name="title_th" class="cms" value="<?=$result->title_th?>" /></dd>
	<dt>Caption</dt>
	<dd><input type="text" name="caption_th" class="cms" value="<?=$result->caption_th?>" /></dd>
	<dt>Content</dt>
	<dd><textarea name="detail_th" id="detail_th" class="cms-detail"><?=$result->content_th?></textarea></dd>
	<dt>Keywords</dt>
	<dd><input type="text" name="keywords" class="cms" value="<?=$result->keywords?>" /></dd>
    <dt>&nbsp;</dt>
	<dd>Example: apple, galaxy tab</dd>
	<dt>Show</dt>
	<dd><input type="checkbox" name="is_show" class="checkbox" <?=($result->is_show=='active')?'checked="checked"':''?> />&nbsp;Active</dd>
	<dt>&nbsp;</dt>
	<!--dd><input type="submit" class="bt" value="เพิ่มข้อมูล" /></dd-->
	<dd><input type="button" class="bt" value="Edit" onclick="dojo.byId('frm').submit();" /></dd>
</dl>
</form>

<?=br(4)?>
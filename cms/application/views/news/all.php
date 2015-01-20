<script language="JavaScript">
       function chkdel(){
              if(confirm(' กรุณายืนยันการลบอีกครั้ง !!! ')){
                     return true; // ถ้าตกลง OK โปรแกรมก็จะทำงานต่อไป 
              }else{
                     return false; // ถ้าตอบ Cancel ก็คือไม่ต้องทำอะไร 
              }
       }
</script>

<div class="block-status-lavel2">
	<div class="status-lavel2"><img src="<?=base_url()?>public/img/icon/<?=$imgTitle?>" align="absmiddle" />&nbsp;&nbsp;<?=$txtTitle?></div>
</div>
<div class="block-status-lavel2" style="border:0px solid;">
	<div class="show-result"><b>All </b> (<?=$num_rows?>)&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?=base_url().$this->router->class.'/addnew'?>">เพิ่มข้อมูล <img src="<?=base_url()?>public/img/icon/add.png" align="absmiddle" /></a></div>
</div>

<table width="99%" cellspacing="0" cellpadding="1" border="0">
  <tr>
	<td align="right"><?php echo $this->pagination->create_links(); ?></td>
  </tr>
</table>

<table width="99%" border="0" cellspacing="0" cellpadding="0" style="margin-top:8px; background:#FFF;">
  <tr class="title">
  	<td class="row-head" style="border-left:1px solid #CCC;" width="5%">&nbsp;No. </td>
    <td class="row-head" width="40%">&nbsp;Title </td>
    <td class="row-head" width="15%">Group </td>
	<td class="row-head" width="20%">Created </td>
	<td class="row-head" width="5%" align="center">Views </td>
	<td class="row-head" width="5%" align="center">Show </td>
	<td class="row-head" style="border-right:1px solid #CCC;" width="10%">&nbsp;</td>
  </tr>
<?php foreach($result as $value):?>
  <tr class="over">
    <td class="row-body" style="border-left:1px solid #CCC;">&nbsp;&nbsp;<?=$value->id?></td>
	<td class="row-body">&nbsp;<?=$value->title_th?></td>
    <td class="row-body"><?=$value->news_type?></td>
	<td class="row-body"><?=substr(text_thaidate($value->created, TRUE, TRUE), 0, -5).' | '.$value->created_by?></td>
    <td class="row-body" align="center"><?=number_format($value->views)?></td>
	<td class="row-body" align="center">
		<?=($value->is_show=='active')?'<font color="green">'.$value->is_show.'</font>':'<font color="red">'.$value->is_show.'</font>';?>
	</td>
	<td class="row-body" align="right" style="border-right:1px solid #CCC;">
		<a href="<?=base_url().$this->router->class.'/edit/'.$value->id?>"><img src="<?=base_url()?>public/img/icon/page_edit.png" title="แก้ไข" /></a>&nbsp;
		<a href="<?=base_url().$this->router->class.'/del/'.$value->id?>"><img src="<?=base_url()?>public/img/icon/delete.png" title="ลบ" OnClick="return chkdel();" /></a>&nbsp;

	</td>
  </tr>
<?php endforeach;?>
</table>

<table width="99%" cellspacing="0" cellpadding="1" border="0" style="margin-top:8px;">
  <tr>
	<td align="right"><?php echo $this->pagination->create_links(); ?></td>
  </tr>
</table>

<div dojoType="dijit.Dialog" id="confirmPopup" style="display:none;width:306px; height:130px; background-color:#EEE; border:1px solid #999;padding:4px;">
&nbsp;
</div>

<?=br(4)?>
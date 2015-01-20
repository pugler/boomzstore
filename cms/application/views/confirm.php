<div class="dialog-confirm-title">ยืนยันการลบข้อมูล</div>
<div class="" style="width:284px; height:40px; padding:10px; border-bottom:1px solid #CCC;">
<img src="<?=base_url()?>public/img/icon/error.png" align="absmiddle" />&nbsp;&nbsp;&nbsp;&nbsp;คุณต้องการลบข้อมูล ?
</div>
<div class="" style="float:right; width:140px; height:40px; line-height:40px;"><input type="button" class="bt-dialog-confirm" value="ใช่" onclick="delData('<?=$id?>', '<?=$table?>');" />&nbsp;<input type="button" class="bt-dialog-confirm" value="ไม่ใช่" onclick="	dijit.byId('confirmPopup').hide();" /></div>
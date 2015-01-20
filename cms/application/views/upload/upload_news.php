<table width="500" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td><table width="490" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td><span class="show-result"><b>Upload image for News </b>&nbsp;&nbsp;|&nbsp; <img src="<?=base_url()?>public/img/icon/add.png" align="absmiddle" /></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo form_open_multipart("upload/upload_news") ?>
<p>
  &nbsp;&nbsp;&nbsp;
  <input type="file" name="picture" size"20"/>
</p>
<p>
  &nbsp;&nbsp;&nbsp;
  <input type="submit" name="bt" value="upload"/>
</p>
<p><?php echo form_close() ?></p></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
</table>
<br />
<table width="500" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td><table width="490" border="0" align="center" cellpadding="3" cellspacing="0" bgcolor="#FFFFFF">
      <tr>
        <td><span class="show-result"><b>Upload image for Articles </b>&nbsp;&nbsp;|&nbsp; <img src="<?=base_url()?>public/img/icon/add.png" align="absmiddle" /></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo form_open_multipart("upload/upload_art") ?>
<p>
  &nbsp;&nbsp;&nbsp;
  <input type="file" name="picture" size"20"/>
</p>
<p>
  &nbsp;&nbsp;&nbsp;
  <input type="submit" name="bt" value="upload"/>
</p>
<?php echo form_close() ?></p></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
</table>
<p>&nbsp;</p>

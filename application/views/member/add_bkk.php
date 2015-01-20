<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">
	<title>Member</title>
</head>
<body>
<h1>Add Member Data</h1>

<?php echo form_open("member/add"); ?>

<table width="600" border="1" cellpadding="3" cellspacing="0" bordercolor="#CCCCCC">
	<tr>
		<td width="100"><div align="right">Name : </div></td>
		<td width="482"><input type="text" name="member_name" value=""/></td>
	</tr>
	<tr>
		<td><div align="right">Telephone : </div></td>
		<td><input type="text" name="member_tel" value=""/></td>
	</tr>
	<tr>
		<td><div align="right">Address : </div></td>
		<td><textarea name="addr" cols="60" rows="5" row="5"></textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	  <td><input type="submit" name="btsave" value="Save Data"/>&nbsp;<?php echo anchor("member","Cancel"); ?></td>
	</tr>
</table>

<?php echo form_close(); ?>

</body>
</html>
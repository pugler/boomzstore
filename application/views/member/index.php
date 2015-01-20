<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">
	<title>Member</title>

<!-- Set Class Pagination -->
	<style>
	.pagination
	{
		float:left;
		width:600px;
		margin-top:15px;
	}
	.pagination strong
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#fff;
		color:red;
	}
	.pagination a
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#eee;
		color:#555;
		text-decoration:none;
	}
	.pagination a:hover
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#f2f2f2;
		color:red;
	}
	.pagination a:active
	{
		padding:3px 5px;
		border:1px solid #ccc;
		background:#fff;
		color:red;
	}
	</style>
<!-- End Class Pagination -->

</head>
<body>
<h1>Member Data</h1>
<?php 
	echo"<p>";
	echo anchor("member/add","Add new"); 
	echo"</p>";
?>

<table width="650" border="1" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
	<thead>
		<tr>
			<th width="40"><span style="color:#000000">No.</span></th>
			<th width="160"><span style="color:#000000">Name</span></th>
			<th width="120"><span style="color:#000000">Telephone</span></th>
			<th width="206"><span style="color:#000000">Address</span></th>
			<th width="90"><span style="color:#000000"> Tools</span></th>
		</tr>
	</thead>
	<tbody>
		<?php
			if(count($rs)==0)
			{
				echo"<tr><td colspan='5' align='center'>--no data--</td></tr>";
			}
			else
			{
				$no=$this->uri->segment(3)+1;
				foreach($rs as $r)
				{
					echo"<tr>";
					echo"<td align='center'><span  style='color:#FF0000'>$no</span></td>";
					echo"<td><span style='color:#FF0000'>".$r{'member_name'}."</span></td>";
					echo"<td><span style='color:#FF0000'>".$r{'member_tel'}."</span></td>";
					echo"<td><span style='color:#FF0000'>".$r{'member_address'}."</span></td>";
					echo"<td align='center'>";

					echo anchor("member/edit/".$r{'id'},"Edit")."&nbsp;&nbsp;";
					echo anchor("member/del/".$r{'id'},"Delete",array("onclick"=>"javascript:return confirm('Are you Delete?');"));

					echo"</td>";
					echo"</tr>";
					$no++;
				}
			}
		?>
	</tbody>
</table>

<!-- Start Pagination -->
<?php echo $this->pagination->create_links(); ?>
<!-- End Pagination -->

</body>
</html>

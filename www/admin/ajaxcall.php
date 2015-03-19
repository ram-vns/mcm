<?php
$myarray=array('0'=>array(
			'name'=>'myname',
			'url'=>'www.gogle.com'),
		'1'=>array(
			'name'=>'myname1',
			'url'=>'www.gogle1.com'),
	);
$jsonarr=json_encode($myarray);

?>

<html>
<body>
<style>
table#example {
    border-collapse: collapse;   
}
#example tr {
    background-color: #eee;
    border-top: 1px solid #fff;
}
#example tr:hover {
    background-color: #ccc;
}
#example th {
    background-color: #fff;
}
#example th, #example td {
    padding: 3px 5px;
}
#example td:hover {
    cursor: pointer;
}
</style>
<table id="example">
	<tr>
		<td>Name</td>
		<td>Url</td>	
	</tr>
	<?php 
		foreach($myarray as $key=>$val){
						
			
	?>
	<tr class="<?=$key?>">
		<td onclick="mufun('<?=$val['url']?>')"><?=$val['name']?></td>
		<td onclick="mufun('<?=$val['url']?>')"><?=$val['url']?></td>	
	</tr>
	<?php
	}	
?>
	<script>
function mufun(val){
	$('#vast_video_filename').val(val);
	parent.$.colorbox.close();
}
	</script>
</table>
</body>
</html>

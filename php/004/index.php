<style>
body{
background:#ccc;
}
</style>
<?php
$color = "";
echo "��ɫ�б�";
echo "<ul>";
	for($i = 1 ; $i <= 5 ; $i++){
	if($i%2 == 0){
	$color = "red";
	}else{
	$color = "yellow";
	}
	echo "<li style='background:".$color.";width:200'>��".$i."������</li>";
	}
echo "</ul>";
?>
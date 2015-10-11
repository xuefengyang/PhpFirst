<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script >
	 var arr =document.getElementByTagName('a');
	 arr[0].href="http://www.taobao.com";
	</script>
</head>
<body>
<form method="get" action="detail.php">
	name : <input type="text" name="fname" />
	<input type="submit" /> 
</form>		
<?php 
if(isset($_COOKIE["user"])){

	echo $_COOKIE["user"];
}else{
	echo "no cookie";
}
?>
</body>
</html>
<?php
header("content-type:text/html;charset=utf-8");

$mysqli=new mysqli('localhost','root','root','yxf');
if($mysqli->connect_errno){
	die('connection error'.$mysqli->connect_error);
}

//设置字符集 
$mysqli->set_charset('utf-8');
//执行sql语句
$sql="CREATE TABLE IF NOT EXISTS product(
		id INT AUTO_INCREMENT KEY,
		name VARCHAR(100) NOT NULL )" ;
$res=$mysqli->query($sql);
//插入数据
$sql="INSERT INTO product(name) values('android')";

$res=$mysqli->query($sql);
if($res){
	echo "您是第".$mysqli->insert_id."位用户";
	echo "受影响的行数".$mysqli->affected_rows;
}else{
	echo $mysqli->errono.":".$mysqli->error;
}	

//查询

$sql="SELECT *FROM product";
$res=$mysqli->query($sql);
if($res && $res->num_rows>0){
	while($row=$res->fetch_assoc()){

	}
}else{ 
	echo "没有记录";
}
$mysqli->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		
</body>
</html>

<?php
header("Content-type:text/html;charset=utf-8");
	
	$servername="localhost";
	$username="root";
	$passwd="root";
	$dbname="yxf";
	$conn=mysql_connect($servername,$username,$passwd,$dbname);
	if(!$conn){
		//数据库连接失败
		echo "conn fail";
		
	}else{
		//连接成功
		echo "连接成功"; 
		mysql_select_db("yxf",$conn);

		$result=mysql_query("SELECT * FROM user");

		/* mysql_fetch_array(data,array_type) 
			array_type 可选值为 MYSQL_ASSOC 关联数组
								MYSQL_NUM 	索引数组(相当于mysql_fetch_row)
								MYSQL_BOTH  两者都产生

		*/
		while($row =mysql_fetch_object($result)){
			$count =count($row);
			echo "<h1>-------</h1>";
			for ($i=0; $i < $count; $i++) { 
					echo $row->id."<br>";
					echo $row->username."<br>";
					echo $row->password."<br>";
					echo $row->age."<br>";
					echo $row->salary."<br>";
				}	
			}
		}
	//关闭数据库
	mysql_close($conn);
	?>
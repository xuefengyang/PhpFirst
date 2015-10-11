
<?php 
	setcookie("user","yxf",time()-3600);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<a href="index2.php"> jump </a>
	<?php 
		// PHP 的保函文件的关键字 include require 
		// 效果一样 但是在处理错误的时候 incline会继续执行 只会翻出
		// 警告 require 会立即停止运行
		require 'head.php';

	?> 
</div>
<?php 
	function sortArrarTest(){
		$number=array(10,2,10,88,7,7,3);
		sort($number);
		printArray($number);
		rsort($number);
		printArray($number);
	}	
	//sortArrarTest();
	function printArray($array){
		for ($i=0; $i <count($array); $i++) { 
			echo $array[$i];
			echo "<br>";
		}
	}

	/*
	$data ='ada ';

	if(!preg_match("/^[a-zA-Z ]*$/",$data)){
		echo "fail";
	}else{
		echo "success";
	}
	*/

	// 多维数组
	/*
	$cars=array(array('BNW',100),array('BZ',120));
	for ($i=0; $i < 2; $i++) { 
			for ($j=0; $j < 2; $j++) { 
				$str="";
				if($j==0){
					$str="name:";
				}else{
					$str="price:";
				}	
				echo $str."";
				echo $cars[$i][$j];
			}	
			echo "<br>";
	}		
	*/
	// date 函数
	// 设置当前位置对应的时区 
	date_default_timezone_set("Asia/Chongqing");
	// 返回小时：分钟：秒钟：下午还是上午
	//echo date("h:i:sa");

	// PHP mktime(hour,minute,second,month,day,year) 函数
	//返回时间戳 
	/*
	$time =mktime(9,20,59,10,2,2015);
	echo date("Y-m-d h:i:s",$time);
	*/	
	/*
	$strdate =strtotime("Satuday");
	$endate  =strtotime("+6 weeks",$strdate);
	echo date("Y-m-d",$endate);
	echo "<br>";
	echo date("Y-m-d",$strdate);
	*/
	/*
	$a ="yxf";
	//var_dump($a["foo"]);
	var_dump(isset($a["foo"]));
	var_dump(empty($a["f00"]));
	*/

	//PHP 操作文件
	//得到文件对象
	$file =fopen("demo.js", "r") or die("不能打开文件");
	//读取文件
	//如果没有到文件的最后一行
	//feof()函数检查文件指针是否已经移动到了最后一行了
	//fgets() 读取一行 调用这个fgets()之后指针会移动到下一行
	//fgetc() 读取一个字符 调用fgetc()之后指针会移动到下一个字符
	/*
	while(!feof($file)){
			echo fgets($file)."<br>";
	}			
	fclose($file);
	//打开文件 如果不存在 就创建文件
	$myFile=fopen("test.txt", 'w');
	fwrite($myFile, "this is test")	;
	fclose($myFile);
	*/
?>
</body>
</html>
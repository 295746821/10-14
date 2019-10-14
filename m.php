<?php

print_r($_POST);
//链接地址
$dsn = "mysql:host=localhost;dbname=lyz;port=3306";
//mysql用户名
$user = "root";
$pwd = "root";
//常见pdo连接数据库
$pdo  = new PDO($dsn,$user,$pwd);
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$num = $_POST['num'];
$eml= $_POST['eml'];
//sql语句
$sql = "insert into userinfo values('$name','$pwd','$num','$eml')";
//执行
$res = $pdo->exec($sql);
if($res){
	echo '<span style="color:green">注册成功</span>';
}else{
	echo '<span style="color:red">注册失败</span>';
}




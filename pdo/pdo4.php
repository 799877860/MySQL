<?php
/**
 * PDO 预处理   insert
 */
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=192.168.11.1;dbname=api1905', $user, $pass);

// SQL语句
$sql = "insert into p_users (name,email) values (?,?)";

$name  = '刘阿斗';
$email = 'liuadou@qq.com';

// PDO 预处理
$stmt = $dbh->prepare($sql);

// 绑定参数
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $email);

//执行SQL语句
$stmt->execute();

$id = $dbh->lastInsertId();
echo "自增id：" . $id;

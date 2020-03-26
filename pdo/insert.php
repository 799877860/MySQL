<?php
$user = 'root';
$pass = '';
$dbh  = new PDO('mysql:host=192.168.11.1;dbname=api1905', $user, $pass);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// SQL语句
$sql = "insert into p_users (`name`,`email`) values ('田七','tianqi@qq.com')";

// 执行SQL语句
$res = $dbh->exec($sql);
$id  = $dbh->lastInsertId();
echo '自增id：' . $id;
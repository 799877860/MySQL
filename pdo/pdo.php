<?php
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=192.168.11.1;dbname=api1905', $user, $pass);

// SQL语句
// $sql = "select * from p_users";

$id  = $_GET['id'];
echo '未处理：' . $id;echo "</br>";

$id  = intval($_GET['id']);
echo '已处理：' . $id;

$sql = "select * from p_users where id=" . $id;

// 执行SQL语句
$res = $dbh->query($sql);

while ($row = $res->fetch(PDO::FETCH_ASSOC))
{
    echo "<pre>";print_r($row);echo "</pre>";echo "<hr>";
}

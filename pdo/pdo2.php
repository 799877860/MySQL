<?php
/**
 * PDO 预处理
 */
$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=192.168.11.1;dbname=api1905', $user, $pass);

//
// $sql = "select * from p_users";

$id  = $_GET['id'];
echo '未处理：' . $id;echo "</br>";

// SQL语句
$sql = "select * from p_users where id= ?";

// PDO 预处理
$stmt = $dbh->prepare($sql);

// 绑定参数
$stmt->bindParam(1, $id);

//执行SQL语句
$stmt->execute();

// 遍历结果集
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
    echo "<pre>";print_r($row);echo "</pre>";echo "<hr>";
}

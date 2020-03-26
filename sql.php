<?php

## 使用mysqli   链接MySQL数据库
$mysqli = new mysqli("192.168.11.1", "root", "", "api1905");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "连接成功";
echo "</br>";
echo $mysqli->host_info . "\n";

// SQL语句
$sql = 'select * from p_users';

// 执行SQL语句
$res = $mysqli->query($sql);

while ($row = $res->fetch_assoc()) {
    echo "<pre>";print_r($row);echo "</pre>";
}
<?php

$servername = "${DB_HOST}";
$username = "${DB_USERNAME}";
$password = "${DB_PASSWORD}";
$dbname = "${DB_NAME}";

// 创建数据库连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


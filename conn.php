<?php
$conn = new mysqli("localhost", "root", "",'bbs');
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$conn->query("set names 'utf8'");
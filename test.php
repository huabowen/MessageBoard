<?php
$conn = new mysqli("localhost", "root", "",'bbs');
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql="insert into message(user,title,content,lastdate) ".
    "values ('huahua','huahua','huahua',now())";
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
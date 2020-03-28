<?php
include ("conn.php");
if ($_POST['submit']){
    echo $_POST[user].$_POST[title].$_POST[content];

    $sql="insert into message(user,title,content,lastdate) ".
        "values ('$_POST[user]','$_POST[title]','$_POST[content]',now())";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('添加成功');history.go(-1)</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

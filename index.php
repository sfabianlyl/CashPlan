<?php
    include 'dbconn.php';
    $username=$_COOKIE['User'];
    $sql="select * from `user` where `user_name`='$username';";
    $conn->query($sql);
?>


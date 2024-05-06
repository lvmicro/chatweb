<?php
 
 session_start();

 $wid =$_SESSION["id"];
 


//对数据库进行增删改查
$link = mysqli_connect('sql210.infinityfree.com', 'if0_36276542', 't568877522', 'if0_36276542_userdata');

// 接続状況をチェックします

if (mysqli_connect_errno()) {
    echo "Unable to connect to database:";
} 

//先看有没有其他会员用这个mail注册过
$res = mysqli_query($link, "select to2 from friends where from1='$wid' ");

while(
$ress = mysqli_fetch_assoc($res)){
  echo $ress["to2"]."<br>";
}




?> 
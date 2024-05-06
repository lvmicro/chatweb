<?php
session_start();
$tel=$_POST["tel"];

 $servername = "sql210.infinityfree.com";
 $username = "if0_36276542";
 $password = "t568877522";
 $dbname = "if0_36276542_userdata";


//对数据库进行增删改查
$conn = mysqli_connect($servername, $username, $password, $dbname);

// 接続状況をチェックします

if (!$conn) {
    die("Unable to connect to database:".mysqli_connect_error());
} else {
    echo "Database connection succeeded\n";
}

//

$sql = "SELECT tel FROM users" ;
$result = mysqli_query($conn,$sql);

if($result){

    $ress = mysqli_fetch_assoc($result);

    if($ress == NULL){
        echo "This member does not exist!";
    }else{
        echo "<form action='login.php' method='post'>";
        echo "<input type='submit' value='addfriend' name='friends'>";
        echo "<form>";
        $_SESSION["to"]= $tel;}
}
if(isset($_POST["friends"])){
    $wid=$_SESSION["id"];
    $wto=$_SESSION["to"];
    $result = mysqli_query($conn,"insert into friends (from1, to2, status) values ('$wid','12345','0')");
}
 
     



?> 
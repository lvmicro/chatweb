<?php



$tel = $_POST["tel"];
$password = $_POST["password"];



//对数据库进行增删改查
$link = mysqli_connect('sql210.infinityfree.com', 'if0_36276542', 't568877522', 'if0_36276542_userdata');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    echo "Unable to connect to database:";
} else {
    echo "Database connection succeeded\n";
}

//先看有没有其他会员用这个mail注册过
$res = mysqli_query($link, "select tel from users where tel='$tel' ");
if($res){
$ress = mysqli_fetch_assoc($res);
if($ress == NULL){

echo "It has been registered by other members";

}else{
echo "Registation Success";
$_SESSION["id"]=$tel;
}
}




?> 
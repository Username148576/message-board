<?php
// 載入db.php來連結資料庫
require_once 'member_db.php';
require_once 'home.php';

$email=$_GET['account'];
$password=$_GET['password'];
$name=$_GET['name'];
$sql = "SELECT email,account FROM User";
$result = mysqli_query($link,$sql);
if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0) {
        // 取得大於0代表有資料
        // while迴圈會根據資料數量，決定跑的次數
        // mysqli_fetch_assoc方法可取得一筆值
        while ($row = mysqli_fetch_assoc($result)) {
            // 每跑一次迴圈就抓一筆值，最後放進data陣列中
            $datas[] = $row;
            echo $datas;
        }
    }
    // 釋放資料庫查到的記憶體
    mysqli_free_result($result);
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}
$bool=0;
foreach ($datas as $key => $row){
    if($row['account']==$email){
        $bool=1;
        header('location:register_gui.php?bool='.$bool);
        break;
    }else if($row['name']==$name){
        $bool=2;
        header('location:register_gui.php?bool='.$bool);
        break;
    }
}
if($bool===0){
    $sql = "INSERT INTO User (email,passwd,account) VALUES ('$email','$password','$name') ";
    $result = mysqli_query($link,$sql);
    //header('location:home.php');
}


?>
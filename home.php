<?php
// 載入db.php來連結資料庫
require_once 'member_db.php';
//require_once 'login.php';
?>
<!doctype html>
<html lang="zh-Hant-TW">
    <head>
        
        <title>留言板</title>
    </head>
    <body>
        <h1>留言板</h1>
        <ul>
            <li><a href="login_gui.php">登入</a></li>
            <li><a href="register_gui.php">註冊</a></li>
            <li><a href="logout.php">登出</a></li>
        </ul>
    </body>
</html>
<?php
// 設置一個空陣列來放資料
$datas = array();
// sql語法存在變數中
$sql = "SELECT notes, note_at, account FROM Notes";

// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($link,$sql);

// 如果有資料
if ($result) {
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    if (mysqli_num_rows($result)>0) {
        // 取得大於0代表有資料
        // while迴圈會根據資料數量，決定跑的次數
        // mysqli_fetch_assoc方法可取得一筆值
        while ($row = mysqli_fetch_assoc($result)) {
            // 每跑一次迴圈就抓一筆值，最後放進data陣列中
            $datas[] = $row;
        }
    }
    // 釋放資料庫查到的記憶體
    mysqli_free_result($result);
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}
?>
<div>
<?php if(!empty($datas)): ?>
<ul>
<!-- 資料 as key(下標) => row(資料的row) -->
<?php foreach ($datas as $key => $row) :?>
<li>
<?php echo($key +1 ); ?> 樓 <?php echo $row['account']; ?> <?php echo $row['notes']; ?> <?php echo $row['note_at']; ?>
</li>
<?php endforeach; ?>
</ul>
<?php else:  ?>
查無資料</br></br>
<?php endif; ?>

<?php session_start();?>
<?php if($_GET['logout']==1)$_SESSION['name']=NULL; ?>
<?php if($_SESSION['name']!=NULL): ?>
我要留言</br>
<form action="note.php" method="get">
    <textarea rows="2" cols="20" name="note"></textarea>            
    <input type="submit">
</form>
<?php endif; ?>
</div>
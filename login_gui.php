<!doctype html>
<html lang="zh-Hant-TW">
    <head>
        <title>留言板--登入</title>
    </head>
    <body>
        <h1>登入</h1>
        <form action="login.php" method="get">
            email帳號 :<input type="text" name="account"></br>
            密碼      :<input type="text" name="password"></br>
            <input type="submit">
        </form>
        <ul>
            <li><a href="register_gui.php">註冊</a></li>
        </ul>
        <?php 
            $bool=$_GET['bool'];
            if($bool==1)echo "帳號或密碼錯誤"; 
        ?>
    </body>
</html>
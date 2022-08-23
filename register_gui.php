<!doctype html>
<html lang="zh-Hant-TW">
    <head>
        <title>留言板--註冊</title>
    </head>
    <body>
        <h1>註冊</h1>
        <form action="register.php" method="get">
            email帳號 :<input type="text" name="account"></br>
            密碼      :<input type="text" name="password"></br>
            名稱      :<input type="text" name="name"></br>
            <input type="submit">
        </form>
        <ul>
            <li><a href="login_gui.php">登入</a></li>
        </ul>
        <?php 
            $bool=$_GET['bool'];
            if($bool==1)echo "此email已註冊";
            else if($bool==2)echo "此名稱已被使用"; 
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
        <link rel="stylesheet" href="../css/main.css">
        <?php require_once '../head.php'?>
    </head>
    <body>
        <?php require_once '../nav.php'?>
    </nav>
        <form action="" method="POST">
            <h1>تسجيل الدخول</h1>
            <input type="text" name="username" placeholder="اسم المستخدم"><br>
            <input type="password" name="password" placeholder="كلمة المرور"><br>
            <input type="submit" value="الدخول">
            <span>ليس لدي حساب!<a href="">تسجيل</a></span>
        </form>
        <script src="../main.js"></script>
    </body>
</html>
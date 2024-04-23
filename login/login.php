<?php

error_reporting(0);
session_start();
if(isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'alisha' AND $pass == '12345') {
        //membuat session
        session_start();
        $_SESSION['berhasil'] = true;


        header("Location: admin.php");
    } else {
        $salah = "<p style='color:red; text-align: center;'>username dan password salah!</p>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="formlogin">
            <div class="foto"><img src="img/ikon.png"> <h1>silahkan login</h1></div>
            <?php echo $salah; ?>
            <form action="" method="post">
                <input type="text" placeholder="username" name="username"><br>
                <input type="text" placeholder="password" name="password"><br>
                <button type="submit" name="login">SUBMIT</button>
            </form>
            <div class="lupa">
                <a href="#"><span>lupa password?</span></a>
                <a href="#"><span>belum punya akun?</span></a>
            </div>
        </div>
    </div>
</body>
</html>
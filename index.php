<?php
include "config.php";

if (isset($_POST['but_submit'])) {
    $uname = mysqli_real_escape_string($con, $_POST['txt_name']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {
        $sql_query = "SELECT count(*) as cntUser FROM users WHERE username='$uname' AND password='$password'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_assoc($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname; 
            header('Location: home.php');
            exit();
        } else {
            echo "Invalid username and password";
        }
    }
}
?>

<html>
<head>
    <title>Login Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="post">
            <input type="text" name="txt_name" placeholder="Username">
            <input type="password" name="txt_pwd" placeholder="Password">
            <input type="submit" name="but_submit" value="Login">
        </form>
    </div>
</body>
</html>

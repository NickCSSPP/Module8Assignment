<?php
include "config.php";

// Check if the user is logged in
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
    exit();
}

// Logout
if (isset($_POST['logout'])) {
    session_destroy(); 
    header('Location: index.php');
    exit();
}
?>

<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to Nick's Directory, <?php echo $_SESSION['uname']; ?></h1>
    <ul>
        <li><a href="../Module2/index.php">Module 2</a></li>
        <li><a href="../Module3/index.php">Module 3</a></li>
        <li><a href="../Module4/index.php">Module 4</a></li>
        <li><a href="../Module5/">Module 5</a></li>
        <li><a href="../Module6/index.php">Module 6</a></li>
        <li><a href="../Module7/cookie1.php">Module 7</a></li>
    </ul>
    <form action="" method="post"> 
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>


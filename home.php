<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N R Shagor</title>
</head>
<body>
    <a href="logut.php">Logout</a>
    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
</body>
</html>
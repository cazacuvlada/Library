<?php

@include '../php/config.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:../php/login_form.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User  page</title>
    <link rel="stylesheet" href="../css/library.css">
</head>
<body>
<div  class="container">


    <h1> Online Books Shelf</h1>
    <div class="content">
        <h3>Hi,<span>User</span></h3>
        <h2>Welcome<span>
                  <?php
                  echo $_SESSION['user_name']
                  ?>
            </span></h2>
        <p>This is user page</p>
        <a href="../php/login_form.php" class="btn">login</a>
        <a href="../php/register_form.php" class="btn">register</a>
        <a href="../php/logout.php" class="btn">logout</a>
    </div>
</div>

</body>
</html>

<?php

@include '../php/config.php';
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:../php/login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin page</title>

    <link rel="stylesheet" href="../css/library.css">
</head>
<body>
<div  class="container">


    <h1> Online Books Shelf</h1>
<div class="content">
    <h3>Hi,<span>Admin</span></h3>
    <h2>Welcome<span>
            <?php
            echo $_SESSION['admin_name']
            ?>
        </span></h2>
    <p>This is admin page</p>
    <a href="../php/login_form.php" class="btn">login</a>
    <a href="../php/register_form.php" class="btn">register</a>
    <a href="../php/logout.php" class="btn">logout</a>
</div>
</div>
<div class="wrapper">
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="../php/book_week.php" class="btn" >Book of the week</a></li>
            <li><a href="../php/list_books.php" class="btn" >List of the books</a></li>
            <li><a href="../php/top_ten.php" class="btn" >Top 5</a></li>
            <li><a href="../php/my_preferences.php" class="btn" >My preferences</a></li>
            <li><a href="../php/quotes.php" class="btn" >Quotes/BookMarks</a></li>
        </ul>
    </div>
</div>

</body>
</html>
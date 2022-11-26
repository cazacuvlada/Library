
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>List of Books </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/library.css">
</head>
<body>
<div class="home-btn">
    <a href="../php/admin_page.php">Online Books Shelf</a>
</div>
<div class="container_2 my-5">
    <h2>List of Books</h2>
    <a class="btn btn-primary" href="../php/create_book.php" role="button">New Book</a>
    <br>
    <table class="book_table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Book Name</th>
            <th>Book Author</th>
            <th>Pages</th>
            <th>Genre</th>
            <th>Publishing House</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php

        @include '../php/config.php';
        //check connection to db
        if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);
        }
        //read all row from db table
        $sql = "SELECT * FROM books_list";
        $result = $conn->query($sql);
        if(!$result){
            die("Invalid query:".$conn->error);
        }
        //read data of each row
        while($row = $result->fetch_assoc()){
            echo " <tr>
           <td>$row[id]</td>
            <td>$row[book_name]</td>
            <td>$row[book_author]</td>
            <td>$row[pages]</td>
            <td>$row[genre]</td>
            <td>$row[publishing_house]</td>
            <td>$row[description]</td>
            <td>
                <a class=";btn;btn-primary ;btn-sm;" href="/php/edit_book.php?id=$row[id]">Edit</a>
                <a class=";btn; btn-danger; btn-sm;" href="/php/delete_book.php?id = $row[id]">Delete</a>
                </td>
           </tr>";
           }
        ?>

        </tbody>
    </table>


</div>




</body>
</html>


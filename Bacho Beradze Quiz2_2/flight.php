<?php
    session_start();
    include "admin/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biletebi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">Random 5 Tickets</div>
    <div class="middle">
    <?php
        $sql = "SELECT * FROM info ORDER BY rand() LIMIT 5";
        $res = mysqli_query($connection, $sql) or die(mysqli_error());
        $posts = "";

        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                $id = $row['id'];
                $title = $row['title'];
                $flight_time = $row['flight_time'];
                $price = $row['price'];
                $code = $row['code'];
                $company = $row['company'];

                $admin = "<div><a href='admin/delete.php?pid=$id'>DELETE</a>&nbsp;
                          <a href='admin/edit.php?pid=$id'>EDIT </a></div>";
                $posts .= "<div style='border-bottom:2px solid darkcyan; padding:10px;'><h2>$title</h2><p>ფრენის დრო - $flight_time სთ</p><p>ფასი - $price$</p><p>კოდი - $code</p><p>კომპანიის სახელი - $company</p>$admin</div>";
            }
            echo $posts;
        }else{
            echo "ბილეთები არარის";
        }
    ?>
    </div>
    <div class="footer">All Rights Reserved By Bacho Inc©</div>
</body>
</html>
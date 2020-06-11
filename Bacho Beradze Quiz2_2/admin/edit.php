<?php
    include "dbconnect.php";
    if(!isset($_GET['pid'])){
        header("location: ../index.php");
    }

    $pid = $_GET['pid'];

    if(isset($_POST['update'])){
        $title = $_POST['title'];
        $flight_time = $_POST['flight_time'];
        $price = $_POST['price'];
        $code = $_POST['code'];
        $company = $_POST['company'];
        
        $sql = "UPDATE info SET title='$title', flight_time='$flight_time', price='$price',
        code='$code', company='$company' WHERE id=$pid";
        mysqli_query($connection, $sql);
        header('Location: ../index.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <title>Post</title>
</head>
<body>
    <div class="header">Biletebi</div>
    <div class="middle">
        <center><?php
        $sql_get = "SELECT * FROM info WHERE id=$pid LIMIT 1";
        $res = mysqli_query($connection, $sql_get);

        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_assoc($res)){
                $title = $row['title'];
                $flight_time = $row['flight_time'];
                $price = $row['price'];
                $code = $row['code'];
                $company = $row['company'];


            echo "<br><b>UPDATE<b><br><br>";
            echo "<form action='edit.php?pid=$pid' method='post'>";
            echo "<input class='inp1' placeholder='Title' value='$title' type='text' name='title' required minlength='10' maxlength='150'><br><br>";
            echo "<input class='inp1' placeholder='flight_time' value='$flight_time' type='text' name='flight_time'><br><br>";
            echo "<input class='inp1' placeholder='price' value='$price' type='text' name='price' ><br><br>";
            echo "<input class='inp1' placeholder='code' value='$code' type='text' name='code' required minlength='13' maxlength='13'><br><br>";
            echo "<input class='inp1' placeholder='company' value='$company' type='text' name='company' required minlength='10' maxlength='100'><br><br>";
            }
        }
        ?>
    
    <input type="submit" name="update" value="UPDATE"><br><br>
    </form></center>
    </div>
    <div class="footer">All Rights Reserved By Bacho Inc©</div>
</body>
</html>
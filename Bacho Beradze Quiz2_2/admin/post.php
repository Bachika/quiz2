<?php
    if(isset($_POST['post'])){
        $title = $_POST['title'];
        $flight_time = $_POST['flight_time'];
        $price = $_POST['price'];
        $code = $_POST['code'];
        $company = $_POST['company'];
        
        $sql = "INSERT INTO info (title, flight_time, price, code, company)
        VALUES ('$title', '$flight_time', '$price' ,'$code',
        '$company')"; 
        mysqli_query($connection, $sql);
        header('Location: index.php');
        }
        $dro = rand(1,8);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Post</title>
</head>
<body>
    <center><article class="post">
    <br><b>Fill Info<b>
    <form action="" style = "padding:20px" method="post">
    <input class="inp1" placeholder="დასახელება" type="text" name="title" required minlength="10" maxlength="150"><br><br>
    <input class="inp1" value="<?php echo $dro?> საათი" type="text" name="flight_time" readonly><br><br>
    <input class="inp1" value="<?php echo $dro * 50?>$" type="text" name="price" readonly><br><br>
    <input class="inp1" value="<?php echo substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,13)?>" type="text" name="code" readonly><br><br>
    <input class="inp1" placeholder="კომპანია" type="text" name="company" required minlength="10" maxlength="100"><br><br>
    <br>
    <input type="submit" name="post" value="POST">
    </form>
    </article></center>
</body>
</html>
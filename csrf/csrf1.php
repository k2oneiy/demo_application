
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>csrf</title>
</head>
<body>
    <h2>CSRF</h2>
    <form action="csrf1.php" method="post">
        <h4>Change Passowrd</h4><br>
        Enter Your Name         :         <input type="text" name="name"><br><br>
        Enter Your New Password :         <input type="text" name="password"><br><br>
        <input type="submit" value="Change" name="change">

    </form>
</body>
</html>

<?php

if(isset($_POST["change"])){
    $name = $_POST['name'];
    $upassword = $_POST['password'];

    $server="localhost";
    $username="root";
    $password="Password123#@!";
    $database = "midev";

    $mysqli = new mysqli($server,$username,$password,$database);
    if(!$mysqli){
        echo "Error :".$mysqli->mysqli_error();
    }

    $updateq = "UPDATE login SET password='$upassword' WHERE name='$name'";
    $ures = mysqli_query($mysqli,$updateq);
    if(!$ures){
        echo "Query Failed";
    }

}







?>
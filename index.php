
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sql injection</title>
    <link rel="stylesheet" href="sql.css">
</head>
<body>
    <br><br><br>
    <h3>Sql injection</h3><br><br>
    <form action="index.php" method="get"><br><br><br>
    user name <br><br><input type="text" name="username"><br><br>
    password  <br><br><input type="text" name="password"><br><br><br><br>
    <input type="submit" value="login" name="login">

    </form>
    <br><br><br>
</body>
</html>

<?php

$server="localhost";
$username="root";
$password="Password123#@!";
$database = "midev";


$connect=new mysqli($servername,$username,$password,$database);

if(isset($_GET['login'])){
    //  $id = $_POST['id'];
    $name = $_GET['username'];
    $pass = $_GET['password'];

    $connect=new mysqli($servername,$username,$password,$database);

if($connect->connect_error)
    echo "Connection error:" .$connect->connect_error;
else
    //echo "Connection is created successfully"; 
    //$query = "INSERT INTO login(name,password) VALUES('$name','$pass')";

   
  
    $q = "select * from login where name='$name' and password='$pass'";
	$result = mysqli_query($connect,$q);

    //echo $result['id'];

		if(!$result){
            echo "<br><br><br>";
			die('Error Description : ' .$connect->error);
        }
        while($row = $result->fetch_assoc()){
            echo "<h5>id       : ".$row['id'] ."<br>";
            echo "Name     : ".$row['name'] .  "<br>";
            echo "Password : ".$row['password']."<br>";
        }
   
    
    echo "<br><br>";    

    // $sql = "SELECT*from login order by id desc";
    // $qe = mysqli_query($connect,$sql);
    // $row = $qe->fetch_assoc();
    // echo "id : " . $row['id']; 
       
}






?> 


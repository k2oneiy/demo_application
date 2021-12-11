


<?php

include 'vendor/autoload.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Mongo DB</title>
</head>
<body>
    <h2>Mongo DB</h2>
    <form action="index.php" method="post">
        <h4>LOGIN</h4><br>
        <h4>Name</h4>
        <input type="text" name="name"><br>
        <h4>Password</h4>
        <input type="password" name="password"><br><br><br>
        <input type="submit" value="login" name="login">
    </form>
    
</body>
</html>

<?php
if(isset($_POST["login"])){
    $name = $_POST["name"];
    $password = $_POST["password"];
    $client = new MongoDB\Client("mongodb://127.0.0.1:27017");
    $db = $client->k2oneiy;
    $collection = $db->login;
    $res = $collection->insertOne(['name'=>$name,"password"=>$password]);
}



?>
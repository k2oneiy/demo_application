


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>


<body>
    
    <h1>MongoDB</h1>
    
    <form action="insert.php" method="GET">

    <h2>Insert</h2>
    <br>
    <h3>Name</h3>
    <input type="text" name="name">
    <h3>Password</h3>
    <input type="text" name="password"><br><br><br><br>
    <input class="btn" type="submit" name="login" value="Insert">   
    </form>
</body>

</html>



<?php

    if(isset($_GET['login'])){
        $name = $_GET['name'];
        $password = $_GET['password'];
    
        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        $user1 = array(
            'name' => $name,
            'password' => $password
        );
        $inserts = new MongoDB\Driver\BulkWrite();
        $inserts->insert($user1);
        $mng->executeBulkWrite("k2oneiy.login", $inserts);
    }


    
   
?>


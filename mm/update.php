


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mongo</title>
    <link rel="stylesheet" href="style.css">
    
</head>


<body>
    
    <h1>MongoDB</h1>
    
    <form action="update.php" method="GET">

    <h2>Update</h2>
    <br>
    <h3>Name</h3>
    <input type="text" name="name">
    <h3>Update User Name</h3>
    <input type="text" name="updatename">
    <h3>Password</h3>
    <input type="text" name="password"><br><br><br><br>
    <input class="btn" type="submit" name="Update" value="Update">   
    </form>
</body>

</html>



<?php

    if(isset($_GET['Update'])){
        $name = $_GET['name'];
        $updatename = $_GET['updatename'];
        $password = $_GET['password'];

        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    
        $single_update = new MongoDB\Driver\BulkWrite();
        $single_update->update(
        ['name' => $updatename],
        ['$set' => ['name' => $name, 'password' => $password]],
        ['multi' => false, 'upsert' => false]
        );
        $result = $mng->executeBulkWrite("k2oneiy.login", $single_update);
        
    }


    
   
?>

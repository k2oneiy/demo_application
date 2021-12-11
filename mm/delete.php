


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
    
    <form action="delete.php" method="GET">

    <h2>Delete</h2>
    <br>
    <h3>Name</h3>
    <input type="text" name="name"><br><br><br>
    <input class="btn" type="submit" value="Delete" name="delete">
    
</body>

</html>



<?php

    if(isset($_GET['delete'])){
        $name = $_GET['name'];
        
    
        $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

        $delete = new MongoDB\Driver\BulkWrite();
        $delete->delete(
            ['name' => $name],
            ['limit' => 10]
        );

        $result = $mng->executeBulkWrite("k2oneiy.login", $delete);

    }


    
   
?>


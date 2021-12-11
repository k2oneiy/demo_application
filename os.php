

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sql.css">
</head>
<body>
    <br><br><br>
    <h3>OS command Injection</h3><br><br><br>
    <form action="os.php" method="get">
        Comments : <br><br> <input type="text" name="os"><br><br><br>
        <input type="submit" value="Execute" name="exe"><br><br>
    </form>
</body>
</html>


<?php

$value = $_GET['os'];
if($value==="cd"){
    echo "Access Denied";
}
elseif($value==="pwd"){
    echo "Access Denied";
}
else{
    echo shell_exec($value);
}






?>
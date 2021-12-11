<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Xss bug </h3><br><br>
    <form action="xss1.php" method="get">
        <input type="text" name="name" id=""><br><br>
        <input type="submit" value="Xss">
    </form>
    
</body>
</html>



<?php

header ("X-XSS-Protection: 0");

// $xss = $_GET['name'];

// $xss1 = str_replace("<script>",'',$_GET['name']);

// $xss2 = preg_replace('/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET[ 'name' ]);
// echo $xss2;

// echo $xss;

$str = $_GET['name'];
echo htmlspecialchars($str);






?>
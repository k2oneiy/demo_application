<?php


if(isset($_GET['sub'])){
    $url = $_GET['url'];
    // if($url){
    //     header("Location: {$url}");
    // }
    // else{
        echo file_get_contents($url);
  //  }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSRF</title>
</head>
<body>
    <h1>SSRF injection</h1><br><br>
    <form action="ssrf2.php" method="get">
        <input type="text" name="url">
        <input type="submit" value="submit" name="sub">
    </form>
</body>
</html>
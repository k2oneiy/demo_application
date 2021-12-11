
<?php

//1.

// $page = $_GET['page'];
// if(preg_match("/^inde.html/",$page)){
// include($page);

// }
// else{
//     echo "iMpossible hack "; 
// }

//2.


$incfile = $_REQUEST["file"];
include($incfile.".php");


?> 

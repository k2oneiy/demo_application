

<?php


$client = new MongoDBClient("mongodb://127.0.0.1:27017");
if($client){
    echo "connection sucess";
}

echo "hi";

?>
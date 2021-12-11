	
<?php
// Config
$dbhost = 'localhost';
$dbname = 'k2oneiy';
 
// Connect to test database
$m = new Mongo("mongodb://127.0.0.1:27017");
$db = $m->$dbname;
 
// select the collection
$collection = $db->shows;
 
// pull a cursor query
$cursor = $collection->find();
 
?>
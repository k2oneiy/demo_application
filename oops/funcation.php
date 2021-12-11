<?php

class DB{

    function __construct($host,$user,$password,$db)
    {
        $con=mysqli_connect($host,$user,$password,$db);
        $this->conn = $con;
        if(!$con){
            die("Connection error");
        }
    }

    function insert($name,$password){
        $query = "insert into login(name,password) values('$name','$password')";
        $res = mysqli_query($this->conn,$query);
        if(!$res){
            echo "insert not successfully";
        }
    }  

    function select($n){
        $quer = "select*from login limit $n ";
        $re = mysqli_query($this->conn,$quer);
            while($r = mysqli_fetch_assoc($re)){
                echo $r['id'];
                echo $r['name'];
                echo $r['password'];
                echo "<br>";
            }
        if(!$re){
            echo "select not successfully";
        }
    }
}



?>
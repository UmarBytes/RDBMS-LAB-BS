<?php
    include "conn.php";
 
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    
    $sql = "INSERT INTO departments(id,name)
            VALUES('$id' , '$name')";

   if ($connection->query($sql) === TRUE) {
 
    echo "New Record Added Succesfully."."<br>";
    }else{
    echo "Error:".$conn->error;
    }
    $conn->close();
?>
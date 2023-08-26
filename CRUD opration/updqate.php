<?php

include "connect.php";

    $sql = "UPDATE BookInfo SET price = 900 WHERE bid = 3";

    if($conn->query($sql) === true){
        echo "Record is updated"."<br>";
    }else{
        echo "ERROR!!!";
    }

    $conn->close();

?>
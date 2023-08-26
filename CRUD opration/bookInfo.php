<?php

include "connect.php";

        $sql = "CREATE TABLE bookinfo(
            bid int(6) UNSIGNED AUTO_INCREMENT PRIMARY  KEY,
            bname varchar(20) NOT null,
            author varchar(20) NOT null,
            price int NOT null,
            issuedate date

        )";

    if($conn->query($sql) === TRUE){
            echo "table is created successfuly";
    }else{
        echo "Error!";
    }

    $conn->close();
?>
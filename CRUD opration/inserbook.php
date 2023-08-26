<?php
    include "connect.php";
 
    $bname = $_REQUEST["bookname"];
    $author = $_REQUEST["bookauthor"];
    $price = $_REQUEST["price"];
    $issuedate = $_REQUEST["date"];
    $sql = "INSERT INTO BookInfo(bname,author,price,issuedate)
            VALUES('$bname' , '$author', '$price' , '$issuedate')";

   if ($conn->query($sql) === TRUE) {
 
    echo "New Record Added Succesfully."."<br>";
    }else{
    echo "Error:".$conn->error;
    }
    $conn->close();
?>
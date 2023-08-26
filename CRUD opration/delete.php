<?php
    include "connect.php";

    $sql = "DELETE FROM bookinfo WHERE bid=2";

    if($conn->query($sql) === true){
        echo "Record is deleted successfully"."<br>";
    }else{
        echo "there is an error!!!";
    }
    $conn->close();

?>

<?php  

$servername = "localhost";
$username = "root";
$password = "";
$database = "company";

$connection = mysqli_connect($servername,$username,$password,$database);

if($connection){
    echo "  ";
}
else{
    echo "not connected";
}




?>
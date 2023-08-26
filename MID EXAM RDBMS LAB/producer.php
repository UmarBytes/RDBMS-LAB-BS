<?php

$proid = $_REQUEST['id'] ;
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['pnum'];


echo "<table border=1px>
    <tr>
    <th>Producer_ID</th>
    <th>First name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    </tr>
    
    <tr>
        <td>".$proid."</td>
        <td>".$fname."</td>
        <td>".$lname."</td>
        <td>".$email."</td>
        <td>".$phone."</td>
    </tr>
 ";
 

?>

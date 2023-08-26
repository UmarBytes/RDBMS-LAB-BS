<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employees data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table>
<?php
        include 'conn.php';

        $sqlc = "SELECT * FROM employees;";
        // SELECT  e.name, r.name, p.name  FROM `employees` e JOIN roles r ON (e.id = r.id) JOIN projects p ON (r.id=p.id);
        $resultc = mysqli_query($connection,$sqlc) or die("C Query Not Run");
        
        if(mysqli_num_rows($resultc)>0){
    ?>
	<thead>
		<tr>
			<th>Employees ID</th>
            <th>Employees Name</th>
            <th>Depertment Name</th>
			<th>Employees Role</th>
			<th>Project Name</th>
			<th>Employee Task</th>
		</tr>
	</thead>
	<tbody>
    <?php

        while($row = mysqli_fetch_assoc($resultc)){
            ?>
		<tr>
            <td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['department']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address']; ?></td>
		</tr>
        <?php  }?>
	</tbody>
    <?php }else{
        echo "NO RECODE FOUND:<br> Please Incrrease Add Costomer Detailes";
    } 
        mysqli_close($connection);
    ?>
</table>
</body>
</html>
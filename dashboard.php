<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>


<body>
<?php

include_once('config1.php');
$sql="SELECT * FROM loginform";
$getloginform=$conn->prepare($sql);
$getloginform ->execute();
$loginform=$getloginform->fetchAll();
?>

<table>
    <thead>
        <th>Id:</th>
        <th>Name:</th>
        <th>Surname:</th>
        <th>Email</th>
        </thead>
        <tbody>
            <tr>
            <?php
                foreach($users as $user){
                ?>
                <td><?=$user['id']?></td>
                <td><?=$user['name']?></td>
                <td><?=$user['surname']?></td>
                <td><?=$user['email']?></td>
                <td><?="<a href='delete.php?id=$user[id]'>Delete</a> | <a href='edit.php?id=$user[id]'>Update </a>"?></td></tr>
<?php
              }
           ?>
        </tbody>
        <a href="index2.php">add</a>
    
</table>
</body>
</html>
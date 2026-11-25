<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }   

</style>

</head>
<body>
    

<?php

include_once "connection.php";

$sql = "SELECT * FROM users";   
$get_users= $conn->prepare($sql);
$get_users->execute();
$users = $get_users->fetchAll();

?>

<table>
    
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
    </tr>

    <?php foreach($users as $user){
        echo "<tr>";

            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['username']."</td>";
            echo "<td>".$user['password']."</td>";
        echo "</tr>";
    }
        
    ?>
 </table>
<br>
<a href="index.php">add user</a>





</body>
</html>
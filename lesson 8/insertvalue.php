<?php

try {
    $conn = new PDO("mysql:host=localhost; dbname=database", "root", "");

    $username = "oltiona";
    $password = password_hash("testtest", PASSWORD_DEFAULT);

    $sql = "Insert into users (username, password) values ('$username', '$password')";

    $conn->exec($sql);

    echo "insert successfully";

} catch (Exception $e) {
    echo "insert not successfully";
}

?>
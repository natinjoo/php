<?php
$host="localhost";
$user="root";
$pass="";
$dbname="digital2";




try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    echo "Connected successfully";
}
    catch(PDOException $e){
        echo "Connection failed";


}


?>
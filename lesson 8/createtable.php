
<?php
$host="localhost";
$user="root";
$dbname="digital2";
$pass="";
try{
$conn= new PDO ("mysql:host=$host", $user, $pass);
echo "databas is created";
}catch(exception $e) {
echo "databas is not created";
}
?>
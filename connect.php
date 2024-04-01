<?php
$hostname = 'localhost';
$username = 'root';
$password = '123'; 
$database = 'signupforms';

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    echo "Connected successfully";
} else {
    die(mysqli_error($con));
}
?>

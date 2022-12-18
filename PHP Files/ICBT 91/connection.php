<?php
//Declaring and hoisting the variables
$servername = "localhost";
$username = "root";
$password = "";
$db = "gymdb";

// DBMS connection code -> hostname,
// username, password, database
$conn = new mysqli($servername,$username,$password,$db);

if($conn->connect_error) //if the connection encounterd an error
    die("Connection Failed".$conn->connect_error);
?>
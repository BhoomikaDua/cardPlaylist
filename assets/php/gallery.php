<?php
session_start();

// database settings
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'ubisoft';

// connect to the database
$Database = new mysqli($server, $user, $pass, $db);

//Fetch rows from items table
$result = $Database->query("SELECT * FROM items");
$rowcount=mysqli_num_rows($result);

//Initialize array variable
$dbdata = array();

//Fetch into associative array
while ( $row = $result->fetch_assoc())  {
$dbdata[]=$row;
}

// array in JSON format
//echo json_encode($dbdata);
$jsonString=json_encode($dbdata);
$data = json_decode($jsonString, TRUE);
//echo $data[0]["title"];

$_SESSION["total"]=$rowcount;
$_SESSION["gallery"]=$jsonString;
$_SESSION["counter"]=0;
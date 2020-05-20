<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'lead';

$conn = new mysqli($server,$user,$pass,$db);
if($conn-> connect_error){
    die("Connection Failed".$conn->connect_error);
}
else{
    echo "";
}
$outside ="";
$nato = array("Maths","CSS","JAVASCRIPT","SQL","PHP","BOOTSTRAP","HOW TO","JQUERY","MORE");
foreach ($nato as $value){
    $outside .="<option>$value</option>";
}


$sql = "INSERT INTO courses (courses) VALUES ('$outside')";
mysqli_query($conn, $sql);

//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="aiub";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// Create database


if($_SERVER["REQUEST_METHOD"]=="POST"){
$fname=$_REQUEST["fname"];	$lname=$_REQUEST["lname"];	$email=$_REQUEST["email"];
	$gender=$_REQUEST["gender"]; 	$mobile=$_REQUEST["mobile"];	$date_of_birth=$_REQUEST["date_of_birth"];	$hsc_result=$_REQUEST["hsc_result"];
    	$ssc_result=$_REQUEST["ssc_result"];	$course=$_REQUEST["course"];	$year=$_REQUEST["year"];	$semester=$_REQUEST["semester"];

$sql="INSERT INTO New_Students(fname, lname,email, gender,mobile,date_of_birth,hsc_result,ssc_result,course,year,semester)values('$fname', '$lname','$email', '$gender','$mobile','$date_of_birth','$hsc_result','$ssc_result','$course','$year','$semester')";



if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
   }
   $conn->close();}
   ?>
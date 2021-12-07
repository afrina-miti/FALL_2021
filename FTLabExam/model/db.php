<?php
class db {
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "mydb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error); 
    return $conn;
 }
 
 function SEBI($conn,$table,$id)
 {
    $myresult = $conn->query("SELECT * FROM ".$table." WHERE ID='".$id."'");
    return $myresult;
 }
 function SEBN($conn,$table,$id,$name,$department,$date,$salary)
 {
    $myresult = $conn->query("UPDATE $table SET Name='$name',Department='$department',JoiningDate='$date',Salary='$salary' WHERE ID='$id'");
    return $myresult;
 }


 function CloseCon($conn)
 {
   $conn -> close();
 }
}
?>
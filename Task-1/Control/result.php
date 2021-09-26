<?php
$validatename="";  $validateemail=""; $password=""; $comment="";  $validateradio="";$v1=$v2=$v3="";   $validatecheckbox=""; $validatelname=""; $validateage="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["name"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
 
if(empty($_REQUEST["name"]))
{
    $validatename= "You must enter your first name";

}
else if(strlen($_REQUEST["name"])<5){
    $validatename= "Name is too short";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name)){
    $validatename= "First name should be alphabet"; 
}
else
{
    $validatename=$_REQUEST["name"];
}
if(empty($_REQUEST["lname"]))
{
    $validatelname= "You must enter your last name";

}
else if(strlen($_REQUEST["lname"])<5){
    $validatelname= "Name is too short";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$lname)){
    $validatelname= "Last name should be alphabet"; 
}
else
{
    $validatelname=$_REQUEST["lname"];
}

if(empty($_REQUEST["email"])){
  $validateemail="You must enter email";
} 
else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_REQUEST["email"]))
{
    $validateemail="email is not valid";
}
else{
    $validateemail= "your email is ".$email;
}
if(empty($_REQUEST["password"])){
  $password="You must enter password"."<br>";
  
}
else{
  if((strlen($_REQUEST["password"])) <8){

    $password="Password should be at least 8 characters in length."."<br>";
  }
}

 
  if(!isset($_REQUEST["language1"])&&!isset($_REQUEST["language2"])&&!isset($_REQUEST["language3"]))
{
    $validatecheckbox = "  Please select at least one language";
    
}
else{
   if(isset($_REQUEST["language1"]))
   {
       $v1= $_REQUEST["language1"];
   }
   if(isset($_REQUEST["language2"]))
   { 
       $v2= $_REQUEST["language2"];
   }
   if(isset($_REQUEST["language3"]))
   {
    $v3= $_REQUEST["language3"];
   }
}
  if(isset($_REQUEST["designation"]))
{
    $validateradio= $_REQUEST["designation"];
}
else{
    $validateradio= "  Please select your designation";
}
if(empty($_REQUEST["age"])){
    $validateage="You must enter your age";
}
else if(!is_numeric($_REQUEST["age"])) {
    $validateage="Age should be numeric";
}
else {
    $validateage=$_REQUEST["age"];
}





}
?>
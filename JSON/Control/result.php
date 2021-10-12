<?php
$validatename="";  $validateemail=""; $password=""; $comment="";  $validateradio="";$v1=$v2=$v3="";   $validatecheckbox=""; $validatelname=""; $validateage=""; $ct=0;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["name"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
 
if(empty($_REQUEST["name"]))
{
    $validatename= "You must enter your first name";

}
else if(strlen($_REQUEST["name"])<5){
    $validatename= "First name is too short";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$name)){
    $validatename= "First name should be alphabet"; 
}
else
{
    $validatename=$_REQUEST["name"];
    $ct=$ct+1;
}
if(empty($_REQUEST["lname"]))
{
    $validatelname= "You must enter your last name";

}
else if(strlen($_REQUEST["lname"])<5){
    $validatelname= "Last name is too short";
}
else if (!preg_match("/^[a-zA-Z ]*$/",$lname)){
    $validatelname= "Last name should be alphabet";
}
else
{
    $validatelname=$_REQUEST["lname"];
    $ct=$ct+1;
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
    $ct=$ct+1;
}
if(empty($_REQUEST["password"])){
  $password="You must enter password"."<br>";
  
}
else{
  if((strlen($_REQUEST["password"])) <8){

    $password="Password should be at least 8 characters in length."."<br>";
  }
  else
  {
    $ct=$ct+1;
  }
}

 
  if(!isset($_REQUEST["language1"])&&!isset($_REQUEST["language2"])&&!isset($_REQUEST["language3"]))
{
    $validatecheckbox = "  Please select at least one language";
    
}
else{
    $ct=$ct+1;
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
    $ct=$ct+1;
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
    $ct=$ct+1;
}

if($ct==7)
    {
        $target_dir="json/";
        $_FILES["image"]["name"]="image.jpg";
        $target_file="json/".$_FILES["image"]["name"];

        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
        {
            echo "Image successfully uploaded<br>";
        }
        else
        {
            echo "Sorry, there was an error uploading image<br>";
        }
        $formdata=array(
            'firstname'=>$name,
            'lastname'=>$lname,
            'age'=>$_REQUEST["age"],
            'designation'=>$_REQUEST['designation'],
            'language'=>$v1,
            'email'=>$email,
            'password'=>$_REQUEST["password"],
            'image'=>$target_file
        );
        if($v2!="")
        {
            $formdata['language']=$formdata['language'].",".$v2;
        }
        if($v3!="")
        {
            $formdata['language']=$formdata['language'].",".$v3;
        }
        $jsondata=json_encode($formdata,JSON_PRETTY_PRINT);
        if(file_put_contents("json/mydata.json",$jsondata))
        {
            echo "Data successfully saved<br>";
        }
        else
        {
            echo "No data saved<br>";
        }

    }





}
?>
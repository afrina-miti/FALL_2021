<?php
include("../model/db.php");
$myname="";$mydepartment="";$mydate="";$mysalary="";
$msg="";
$connection = new db();
$conobj=$connection->OpenCon();
if(isset($_REQUEST["search"]))
{
  $myresult=$connection->SEBI($conobj,"employee",$_REQUEST["id"]);

  if($myresult->num_rows>0)
  {
        while($row=$myresult->fetch_assoc())
        {
          $myname=$row["Name"];
          $mydepartment=$row["Department"];
          $mydate=$row["JoiningDate"];
          $mysalary=$row["JoiningDate"];
        }
} 

}
if(isset($_REQUEST["update"]))
{
  $myresult=$connection->SEBN($conobj,"employee",$_REQUEST["id"],$_REQUEST["name"],$_REQUEST["department"],$_REQUEST["date"],$_REQUEST["salary"]);

  if($myresult==true)
  {
       $msg="Update successful";
  } 

}


?>
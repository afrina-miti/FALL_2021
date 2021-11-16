<?php include "../control/result.php"; ?>
<!DOCTYPE html>

<head>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
</head>
<body>
<div class="header">
<h1>ABC Management System</h1>
<h2>We Create Future</h2>
  </div>
 <div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>
 </div>
 </div>
<div class="lBorder" >
 <div class="registrationBox"><h3>Registration Form</h3></div>
</div>
<hr>
 
 <form action="" method="POST">
  <table id="tablecolor">
  
    <tr>
        <td>First Name:</td>
        <td><input type="text" name="name"></td>
        <?php if($validatename!=""){?> <td><?php echo $validatename;?></td> <?php } ?>    
       
</tr>
<tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname"></td>
       
        <?php if($validatelname!=""){?>  <td><?php echo  $validatelname; ?></td><?php } ?>    
        
       
       
</tr>

<tr>
        <td>Age:</td>
        <td><input type="text" name="age"></td>
        <?php if($validateage!=""){?>  <td><?php echo  $validateage; ?></td><?php } ?>   
            
</tr>





<tr>
    <td> Designation:</td>
    <td> 
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer
    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer
    <input type="radio" name="designation" value="Project Lead"> Project Lead
    <?php if( $validateradio!=""){?>  <td><?php echo  $validateradio; ?></td><?php } ?>   
    </td>
</tr>   
<tr>
<td>Preferred Language:</td>
    <td>
 <input type="checkbox" name="language1" value="Java"> Java
 <input type="checkbox" name="language2" value="PHP"> PHP
 <input type="checkbox"name="language3" value="C++"> C++
 <?php if($validatecheckbox!=""){?>  <td><?php echo  $validatecheckbox; ?></td><?php } ?>   

</td>
</tr>
<tr>
        <td>E-mail:</td>
        <td><input type="text" name="email"></td>
        <?php if($validateemail!=""){?>  <td><?php echo  $validateemail; ?></td><?php } ?>  
</tr>
<tr>
        <td>Password:</td>
        <td><input type="password" name="password"></td>
        <?php if($password!=""){?>  <td><?php echo  $password; ?></td><?php } ?>  
</tr>
<tr>  

<td>Please choose a file:</td>
<td><input type="file" name="image"></td>

</tr>
</table>
<input class="button" type="submit" value="Submit">
<input  class="button" type="reset">
 
 

</form>

</body>
</html>

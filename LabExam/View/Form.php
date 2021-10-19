<?php include ('../Control/db.php'); ?>
<!DOCTYPE html>

<head>
    <title>Form</title>
</head>
<body>

 <table>
 
  
 <form action="" method="POST">
   
  
    <h1>Please fill up the form</h2><hr/>
    <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname"></td>
  
       
       
</tr>
<tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname"></td>
    
       
       
</tr>
<tr>
        <td>Email:</td>
        <td><input type="email" name="email"></td>
       
</tr>






<tr>
    <td> Gender:</td>
    <td> 
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female


    </td>
</tr> 

<tr>
        <td>Mobile No:</td>
        <td><input type="text" name="mobile"></td>
       
       
       
</tr>  

<tr>
        <td>Date of Birth:</td>
        <td><input type="date" name="date_of_birth"></td>
       
       
       
</tr>
<tr>
        <td>HSC results:</td>
        <td><input type="text" name="hsc_result"></td>
       
       
       
</tr>  
<tr>
        <td>SSC results:</td>
        <td><input type="text" name="ssc_result"></td>
       
       
       
</tr>  
<tr>
<td>Select a course you want to enroll:</td>
<td>
  <select id="course" name="course">
    <option value="CSE">CSE</option>
    <option value="EEE">EEE</option>
    <option value="BBA">BBA</option>
  </select>
</td>
</tr>
<tr>
<td>Choose a year enrolling year:</td>
<td>
  <select id="year" name="year">
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
  </select>
</td>
</tr>
<tr>
<td>Choose a year enrolling year:</td>
<td>
  <select id="semester" name="semester">
    <option value="Summer">Summer</option>
    <option value="Fall">Fall</option>
    <option value="Spring">Spring</option>
  </select>
</td>
</tr>


<tr>
<td>
<input type="submit" value="Insert Data">

 
</td>

</tr>
</table>
</form>

</body>

<!DOCTYPE html>

<head>
    <title>Form</title>
</head>
<body>

 <table>
 
  <form action="" onsubmit="return validate()" method="POST">
   
  
    <h1>Registration Form</h2><hr/>
    <tr>
        <td>First Name:</td>
        <td><input type="text" id="name"></td>
        <td><p id="error"></p></td>
        
       
       
</tr>
<tr>
        <td>Last Name:</td>
        <td><input type="text" id="lname"></td>
      
       
       
</tr>

<tr>
        <td>Age:</td>
        <td><input type="text" id="age"></td>
       
       
       
</tr>





<tr>
    <td> Designation:</td>
    <td> 
        <input type="radio" id="designation1" name="designation" value="Junior Programmer">
        <label for="designation">Junior Programmer</label>
         <input type="radio" id="designation2" name="designation" value="Senior Programmer">
         <label for="designation">Senior Programmer</label>
        <input type="radio" id="designation3" name="designation" value="Project Lead">
        <label for="designation">Project Lead</label>
   
    </td>
</tr>   
<tr>
<td>Preferred Language:</td>
    <td>
 <input type="checkbox" id="language1" value="Java"> JAVA
 <input type="checkbox" id="language2" value="PHP"> PHP
 <input type="checkbox" id="language3" value="C++"> C++

</td>
</tr>
<tr>
        <td>E-mail:</td>
        <td><input type="email" id="email"></td>
        
</tr>
<tr>
        <td>Password:</td>
        <td><input type="password" id="password"></td>
        
</tr>
<tr>  
<td>Please choose a file:</td>
<td><input type="file" name="image"></td>
</tr>
<tr>
<td>
<input type="submit" name="submit">
<input type="reset" name="reset">
 
</td>

</tr>
</table>
</form><br>


<p id="myname"></p>

<p id="mylname"></p>

<p id="myage"></p>

<p id="mydesignation"></p>

<p id="mylanguage"></p>

<p id="myemail"></p>

<p id="mypassword"></p>


<script type="text/javascript" src="../js/js.js"></script>
</body>
<?php
include("../control/action.php");
?>
<html>
<body>
    
<table>
<form action="" method="post">
<h1>Search Employee</h1>

Search By ID:
 <br><input type="text" name="id" id="id" >
<br><br><br>
<input type="submit"  name="search" id="search" value="Search">
<br>
<br>
 Name:
<br><input type="text" id="name"  name="name" value="<?php echo $myname; ?>"></td><td><p id="wrong">
 Department:
<br><input type="text" id="department" name="department" value="<?php echo $mydepartment; ?>">
<br>JoiningDate:
<br><input type="date" id="date" name="date" value=<?php echo $mydate; ?> >
<br>Salary:
<br><input type="text" id="salary" name="salary" value=<?php echo $mysalary; ?>>
<br> 
<br><input type="submit"  onclick="return MyValidation()" name="update" value="Update">
<?php echo $msg; ?>
<script src="../js/js.js"></script>
</form></table>
</body></html>
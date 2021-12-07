function MyValidation()
{
    var name=document.getElementById("name").value;
    var department=document.getElementById("department").value;
    var date=document.getElementById("date").value;
    var salary=document.getElementById("salary").value;

    if(name=="")
   {
       document.getElementById("wrong").innerHTML="Please enter your name";
       return false;
   }
   if(name.length<=8)
   {
       document.getElementById("wrong").innerHTML="Name should be more than 8 character";
       return false;
   }
   if(department=="")
   {
       document.getElementById("wrong").innerHTML="Please enter your department";
       return false;
   }
   if(date==="")
   {
       document.getElementById("wrong").innerHTML="Please enter date";
       return false;
   }
   if(salary=="")
   {
       document.getElementById("wrong").innerHTML="Please enter salary";
       return false;
   }

   if(isNaN(salary))
   {
       document.getElementById("wrong").innerHTML="Salary should be numeric";
       return false;
   }

    
    return true;
}


   

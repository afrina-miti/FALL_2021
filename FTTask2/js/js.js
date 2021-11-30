function validate()
{
    var name=document.getElementById("name").value;
    var lname=document.getElementById("lname").value;
    var tt =/^[a-zA-Z ]*$/;
    var res1 = tt.test(name);
    var res2 = tt.test(lname);
    var email=document.getElementById("email").value;
    var tt1 = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res3 = tt1.test(email);
    var age=document.getElementById("age").value;
 
    var designation;
    var password=document.getElementById("password").value;
    var language1=""; var language2=""; var language3="";

    if(document.getElementById("language1").checked==true)
    {
        language1="JAVA";
    }
    if(document.getElementById("language2").checked==true)
    {
        language2="PHP";
    }
    if(document.getElementById("language3").checked==true)
    {
        language3="C++";
    }
    if(document.getElementById("designation1").checked==true)
    {
       designation="Junior Programmer";
    }
    if(document.getElementById("designation2").checked==true)
    {
        designation="Senior Programmer";
    }
    if(document.getElementById("designation3").checked==true)
    {
        designation="Project Lead";
    }
    
    var ok=true;





   if(name== "")
   {
       document.getElementById("error").innerHTML="You must enter your first name";
       ok=false;
       return ok;
   }
   if (!res1)
   {
        document.getElementById("error").innerHTML="First name should be alphabet";
        ok=false;
       return ok;
   }
  if(name.length<5)
   {
       document.getElementById("error").innerHTML="First Name is too short";
       ok=false;
       return ok;
   }
   

   if(lname== "")
   {
       document.getElementById("error").innerHTML="You must enter your last name";
       ok=false;
       return ok;
   }
   if (!res2)
   {
        document.getElementById("error").innerHTML="Last name should be alphabet";
        ok=false;
       return ok;
   }
   if(lname.length<5)
   {
       document.getElementById("error").innerHTML="Last Name is too short";
       ok=false;
       return ok;
   }

   if(age== "")
   {
       document.getElementById("error").innerHTML="You must enter your age";
       ok=false;
       return ok;
   }
   if(isNaN(age))
   {
       document.getElementById("error").innerHTML="Age should be numeric";
       ok=false;
       return ok;
   }
  

   if (document.getElementById("designation1").checked== false && document.getElementById("designation2").checked== false && document.getElementById("designation3").checked== false)
   {
        document.getElementById("error").innerHTML=" Please select your designation";
        ok=false;
        return ok;
   }

   if (document.getElementById("language1").checked==false && document.getElementById("language2").checked==false && document.getElementById("language3").checked==false )
   {
        document.getElementById("error").innerHTML="Select at least one language";
        ok=false;
       return ok;
   }


   if(email== "")
   {
       document.getElementById("error").innerHTML="You must enter email";
       ok=false;
       return ok;
   }
   if(!res3)
   {
        document.getElementById("error").innerHTML="Enter a valid email";
        ok=false;
       return ok;
   }
   

   if(password== "")
   {
       document.getElementById("error").innerHTML="You must enter password";
       ok=false;
       return ok;
   }
   if(password.length<8)
   {
       document.getElementById("error").innerHTML="Password should be at least 8 characters in length";
       ok=false;
       return ok;
   }
 

   else
   {

       document.getElementById("error").innerHTML=""; 

       document.getElementById("myname").innerHTML="Your first name is "+name;

       document.getElementById("mylname").innerHTML="Your last name is "+lname;

       document.getElementById("myage").innerHTML="Your age is "+age;

       document.getElementById("mydesignation").innerHTML="Your designation is "+designation;

       document.getElementById("mylanguage").innerHTML="Your language "+language1+"  "+language2+"  "+language3;

       document.getElementById("myemail").innerHTML="Your email is "+email;

       document.getElementById("mypassword").innerHTML="Your password is "+password;

      
      
       
       ok=false;
       return ok;

   }
  
  

     return ok;
}

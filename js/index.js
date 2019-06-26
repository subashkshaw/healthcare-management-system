       /* using java script in head section */
function check()
{ 
var a = document.myform.password.value; 
var b = document.myform.re_password.value;
var x = document.myform.email.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  document.getElementById("email").innerHTML="Choose a valid e-mail address";  
  return false;  
}
if ((a.length < 8) || (a.length > 16))
{
document.getElementById("password").innerHTML="Password must be of 8 character";
return false;
} 
if(a!=b) 
{
    document.getElementById("re_password").innerHTML="Password mismatch";
return false;
}
}

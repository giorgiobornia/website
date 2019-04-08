function validateForm()
{ 
//again, we have the NAME of the FORM which should be passed as an argument in my opinion
//on the other hand, the html must know the NAME of the FUNCTION
var formname="form1";
var x=document.forms[formname]["myusername"].value;
var y=document.forms[formname]["mypassword"].value;
if (x==null || x=="" || y==null || y=="")
  {
  alert("Welcome " + document.forms[formname]["myusername"].value + "!\n" + "Username and/or password must be filled out"); //alert is a single box with a message
  return false;
  }
}
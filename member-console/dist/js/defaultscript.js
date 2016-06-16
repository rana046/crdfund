
function validate_form(thisform)
{

var state=true;
$(thisform).find("[errordiv]").remove();
$(thisform).prepend("<div class='alert-danger'  errordiv></div>");
$(thisform).find("input,select,textarea,checkbox").each(function(){

var inputclass=$(this).attr("valid");
var inputvalue=$(this).val();
var inputname=$(this).attr("name");
var errormsg=$(this).attr("id");
function error(MSG){
$(thisform).find("[errordiv]").addClass("alert");
$(thisform).find("[errordiv]").append("<strong>Please Fill   "+MSG+"</strong>");
}	

switch(inputclass)
{
																																																									//Validation for number and text
case "name":
if(inputvalue.length<2)
{
error(errormsg);
$(this).focus();
return state=false;	
}
break;

	case "username":
if(inputvalue.length<6)
{
error(errormsg);
$(this).focus();
return state=false;	
}
break;	
	case "required":
	if(inputvalue.length<1)
{
//$(this).addClass("error");
error( inputname +" is required ");
$(this).focus();
return state=false;	
}
break;		

	
	
	case "image":
	if(inputvalue.length<1)
{
//$(this).addClass("error");
error( inputname +" is required ");
$(this).focus();
return state=false;	
}
break;		
			
case "url":

if(/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/|www\.)[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/.test(inputvalue))
{
	
}
else
{
	error("please fill Proper Url Address in "+inputname);
$(this).focus();
return state=false;
	}
break;	
																																																									//Validation for email
case "email":
var pattern = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
if(!pattern.test(inputvalue))
{
error(errormsg);
$(this).focus();
return state=false;
}
break;
		
case "percent":		
var pattern = /^(100([\.][0]{1,})?$|[0-9]{1,2}([\.][0-9]{1,})?)%$/;
if(!pattern.test(inputvalue))
{
error(errormsg);
$(this).focus();
return state=false;
}
break;
		
case "float":		
var pattern = /^\d{0,8}(\.\d{1,2})?$/;
if(!pattern.test(inputvalue))
{
error(errormsg);
$(this).focus();
return state=false;
}
break		
		
//Validation for password
case "password":
if(inputvalue.length<7)
{
$(this).focus();
error(errormsg);
return state=false;	
}
var pwd=$(thisform).find("[type=password]");

if($(pwd).length>1)
{
var lpwd=$(pwd).length-1;
var pwd1=$(thisform).find("[type=password]").eq(lpwd-1).val();
var pwd2=$(thisform).find("[type=password]").eq(lpwd).val();
if(pwd1!==pwd2)
{
$(this).focus();
error("Confirmation Password Does Not Match");
return state=false;	
}
}
break;
																																																									//Validation for number
case "number":
if(!RegExp("^[0-9]").test(inputvalue) || inputvalue.length<1)
{
	error(errormsg);
$(this).focus();
$(this).val("");
return state=false;
}
break;

case "domain":
 if(!/^(http(s)?\/\/:)?(www\.)?[a-zA-Z\-]{3,}(\.(com|net|org|co.uk))?$/.test(inputvalue))
  {
error("Please fill domain name in specific format in"+ inputname);
$(this).focus();
$(this).val("");
return state=false;
}
break;
 
case "date":
if(inputvalue.length<1)
{
error(" Date");
$(this).focus();
$(this).val("");
return state=false;
}
break;	

		
		
		//Validation for number
case "select":
if(inputvalue=="" || inputvalue==null || inputvalue==0)
{
$(this).focus();
error(errormsg);
return state=false;	
}
break;

case "string":

	var Regex  =/^[a-zA-Z0-9].*$/;

if (Regex.IsMatch(inputvalue)) {
	
error( inputname +" Should be in string format ");
$(this).focus();
return state=false;	
}
break;	
}
});
return state;
}
	
																																																							//form_submit() with 


 $(document).ready(function () {
        $('#data-table').dataTable({
          "sPaginationType": "full_numbers"
        });
      });
 

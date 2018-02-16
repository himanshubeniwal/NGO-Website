
<html>
<head>
<title>NGO website</title><SCRIPT language="JAVASCRIPT">
var pass1="";
var pass2="";
var whitespace="\t\n\r";

function isEmpty(s)
{
return((s==null)||(s.length==0))
}


function isWhitespace(s)
{
var i;

if(isEmpty(s))return true;
for(i=0;i<s.length;i++)
{
 var curchar=s.charAt(i);
if(whitespace.indexOf(curchar)==-1)return false;
}

return true;
}

function isEmail(eadd)
{

if(isEmpty(eadd))

if(isWhitespace(eadd))return false;

var i=1;

var sLength=eadd.length;

while((i<sLength)&&(s.charAt(i)!="@"))
{
i++;

}


if(i>=sLength)||(s.charAt(i)!="@")) return false;

else i+=2;

while((i<sLength)&&(s.charAt(i)!="."))
{
i++;
}

if((i>=sLength-1)&&(s.charAt(i)!="."))return false;
else return true;
}

function verify()
{


var flag=0;
for(i=0;i<=3;i++)
{
if(document.forms[0].elements[i].value=="")
{
alert("Please fill in the "+document.forms[0].elements[i].Name+"field");
document.forms[0].elements[i].focus();
flag=1;
break;
}
if(flag==1)
return(false);
if(flag==0)
var email=document.forms[0].elements[1].value;

if(!isEmail(email))
{
alert("Please enter email address in proper formmat");
document.forms[0].elements[1].focus();
return false;
}


var Password1=document.forms[0].elements[2].value;
 var Password2=document.forms[0].elements[3].value;
if(Password1!=Password2)
{
alert("Not correct renter password");
}

if(!isCharInBAg(passwd,abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789))
{
alert("Passwrd must contain alphabets and numbers");

}
else if(passwd.length<5)
{
alert("Password must be 5 or more characters");
return false;
}
elseif(passwd.length>8)
{
alert("Password must  not be more than 8 characters");
return false;
}


elseif(!isNumberInPass(passwd,"0123456789"))
{
alert("Password must have  atleast 1 number");
return false;

}
else if(document.forms[0].elements[2].value!=document.forms[0].elements[3].value)
{
alert("Password do not match .Please retype and try again");
return false;
}

}

function Abort()
{
history.back();
}
</SCRIPT>
<link type ="text/css" rel="stylesheet" href="mystyle.css">
</head>
<body>


<div id="header" class="layout">


  	
	<center><h1>Children Care</h1></center>
</div>
<div id="menu" class="layout">
		<ul>
<li><a href="home.html" alt="desciption">Home</a></li>
	<li><a href="donation.html" alt="desciption"> Donation</a></li>
	<li><a href="edu.html" alt="desciption">Providing education</a></li>
	<li><a href="enroll.html" alt="desciption">Enrolling in NGO</a></li>
                 <li><a href=".php" alt="desciption"></a></li>
 	<li><a href="contact us.html" alt="desciption">Contact us</a></li>


	</ul>
</div>

<div id="nav" class="layout">

 <div id="lc" class="cols">
 <h1> Not Registered </h1>
<br>
<br>

</div>
<TR>
<TD>         


</TD>
</TR>
</table>
</form>
</div>           

 <div id="rc" class="cols">


        </div>
<div id="footer" class="layout">
<a href="About us.html" alt="description">About us</a>
</div>

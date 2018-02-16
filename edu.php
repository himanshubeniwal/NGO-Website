
<html>
<head>
<title>NGO website</title>
<link type ="text/css" rel="stylesheet" href="mystyle.css">
<script type ="text/javascript">
 
</script>
</head>
<body>


<div id="header" class="layout">

<center><h1>Children Care</h1></center>
  	
</div>
<div id="menu" class="layout">
		<ul>
<li><a href="home.php" alt="desciption">Home</a></li>
	<li><a href="donation.php" alt="desciption"> Donation</a></li>
	<li><a href="edu.php" alt="desciption">Providing education</a></li>
	<li><a href="enroll.php" alt="desciption">Enrolling in NGO</a></li>
                
<li><a href="contact us.php" alt="desciption">Contact us</a></li>


	</ul>
</div>

<div id="nav" class="layout">

 <div id="lc" class="cols">
<h4 style="color:red">YOU GIVE.
Children READ.
</h4>
<b>
	 Give Education to poor Children by providing them yours 
              and your younger brother's and sister's Old Books.
			  Education is a gift for life.We help children unlock their potential and realize their dreams </b>

<p><h5><label style="color:red;">REGISTER HERE</label></h5>
<form name="myform" method="POST" action="edu_register.php" onsubmit="return validate()">
<table border="5">
<tr>
<td>
	<label>Username:</label>
</td>
<td>
	<input type="text" name="username" size="25"  placeholder="User Name" required>
</td>
</tr>

<tr>
<td>
	<label>Email:</label>
</td>
<td>
	<input type="email" name="email" size="25"  placeholder="x@y.com" required>
</td>
</tr>
<tr>
<td>
	<label>Password:</label>
</td>
<td>
	<input type="password" name="pass"  size="25" maxlength="10" id="pass" placeholder="password" required>
</td
</tr>
<tr>
<td>
	<label>re-pass:</label>
</td>
<td>
	<input type="password" name="repass" size="25" maxlength="10"id="repass"  placeholder="re enter password" required>
</td>
</tr>
<tr>
<td>

<td>
	<input type="submit" name="submit" value="Submit">&nbsp <input type="reset" name="reset" value="Reset">  
</td>
</tr>

	

</table>
</form>
&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp<a href="Login.php">Already registered Login now</a></center>
<script>
function validate()
{
var pass=document.getElementById("pass");
var repass=document.getElementById("repass");

if(pass.value!=repass.value)
{
	alert("Password don not match Try Again");
	return false;
}
else
{
	return true;
	
}
}	
</script>
</div>
 
 <div id="rc" class="cols">
 
       <div id="rc1"class="rc-cols">
<br>
<br> 
        <img src="children.jpg" height="200px" width="400px">
<h2>Change the life of Street Children</h2>
<h2>WE Offer hope you can Help.
</h2>
        </div>	
 
</div>






</body> 
</html>

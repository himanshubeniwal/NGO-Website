
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
<!--
<?php
// connect to server

$username = $_POST['username'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$repass =md5($_POST['repass']);

$db  = @mysql_connect('localhost','root','');

mysql_select_db('db',$db);

$sql="insert into edu_register
(
username,email,pass,repass
)
values
('$username','$email','$pass','$repass')
";

$result = mysql_query($sql,$db);
$count=0;

//$result= mysql_query($db,"select * from edu_register where username='$_POST[username]'");

if($result)
{
echo "<h1></h1>";
}

mysql_close($db);
?>
-->
</div>

 <div id="rc" class="cols">
 
       <div id="rc1"class="rc-cols">
<h1>Login Here</h1> 
<form action="edu_login.php" method="POST">
<table border="0">
<tr>
<td>
	<label>Email</label>
</td>
<td>
	<input type="email" name="email" size="25" placeholder="x@y.com" required>
</td>
</tr>
<tr>
<td>
	<label>Password:</label>
</td>
<td>
	<input type="password" name="pass" size="25"  placeholder="enter num and char" required> 
</td>
</tr>
<br>
<br>
<tr>
<td>
<br><br><input type="reset" name="reset" value="reset">
</td>
<td>
	<br>
<br><input type="submit" name="login" value="Login">
</td>
</tr>
</table>
</form>
    
        </div>	
 
 
</div>

<div id="footer" class="layout">

</div>

</div>
</body> 
</html>
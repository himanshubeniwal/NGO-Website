
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

<?php
// connect to server

$name = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$qualification = $_POST['qualification'];
$occupation = $_POST['occupation'];
$country = $_POST['country'];


$db  = @mysql_connect('localhost','root','');

mysql_select_db('db',$db);

$sql="insert into enroll_db";
(
name,email,phoneno,qualification,occupation,country
)
values
('$name','$email','$phoneno','$qualification','$occupation','$country')";

$result = mysql_query($sql,$db);

if($result)
{
echo "<h1>Your are Enrolled</h1>";
}
else
	{
echo "<h1>Your are not enrolled</h1>";
}
	
mysql_close($db);
?>

</div>

 <div id="rc" class="cols">
 
       <div id="rc1"class="rc-cols">

    
        </div>	
 
 
</div>

<div id="footer" class="layout">

</div>

</div>
</body> 
</html>
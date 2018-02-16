
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
 <h2> With your support, we can give children a better tomorrow by giving them an opportunity to go to school.<h2>"
<h4>Children Care runs programmes to support the education of the most disadvantaged children of India in different ways.
  How do we do it?We counsel parents from humble backgrounds to send their children to school <br>and assist them through the admission process.</h4> 
 </style>
<!--
<?php
// connect to server

$email = $_POST['email'];
$pass = $_POST['pass'];

$db  = @mysql_connect('localhost','root','');

mysql_select_db('db',$db);

$sql="insert into edu_table
(
email,pass
)
values
('$email','$pass')
";

$result = mysql_query($sql,$db);

if($result)
{
echo "<h1 style=color:red></h1>";
}

mysql_close($db);
?>
-->
</div>

 <div id="rc" class="cols">
 
       <div id="rc1"class="rc-cols">

<form action="done.php" method="POST">
<table border="5">
<tr>
<td>
	<label>User-name</label>
</td>
<td>
	<input type="text" name="username" size="25" placeholder="" required>
</td>
</tr>
</tr>
<tr>
<td>
	<label>Contact-No:</label>
</td>
<td>
	<input type="text" name="contact" maxlength="12" size="25"  placeholder="" required> 
</td>
</tr>
<tr>
<td>
	<label>List of things you want to donate:</label>
</td>
<td>
	<input type="text" name="things" size="25"  placeholder="" required> 
</td>
</tr>

</tr>
<tr>
<td>
	<label>Address:</label>
</td>
<td>
	<input type="text" name="address" size="25"  placeholder="" required> 
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
<br><input type="submit" name="DONATE" value="DONATE">
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






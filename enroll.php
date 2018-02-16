
<html>
<head>
<title>NGO website</title>
<link type ="text/css" rel="stylesheet" href="mystyle.css">
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

<center><img src="enroll.jpg" height="125px" width="1320px"></center>
<center>
<form action="enroll_db.php" method="POST">  
<table border="5">  
<tr>  
    <td class="tdLabel"><label>Enter Name:</label></td>  
    <td><input type="text" name="name" value="" style="width:160px"  placeholder="User name" required/> </td>  
</tr>  
<tr>  
    <td><label>Enter Email id:</label></td>  
    <td><input type="email" name="email" style="width:160px" placeholder="a@b.com" required/> </td>  
</tr>  

<tr>  
<td><label>Enter Phone-no:</label></td>  
<td>  
<input type="text" name="phoneno" maxlength=25 style="width:160px" placeholder="Mobile no" required/></td>  
</tr> 

<tr>  
<td><label>Enter Qualifiaction:</label></td>  
<td>  
<input type="text" maxlength=12 name="qualification"  required/>  
 
</td>  

</tr>   
<tr>  
<td><label>Occupation:</label></td>  
<td>  
<input type="text" name="occupation"  style="width:160px" placeholder="Occupation"required/></td>  
</tr> 
<tr>  
<td><label>Enter Country Name:</label></td>  
<td><input type="text" name="country" placeholder="Country" required/>
</td>  
</tr> 
<tr>  
<td colspan="1"><div align="right"><input type="submit"  value="register"/>  
</div></td>  
</tr>  
</table>  
</form>  
</center>

        </div>
<div id="footer" class="layout">
<a href="contact us.php" alt="description">Contact us</a>
</div>
</body>
</html>

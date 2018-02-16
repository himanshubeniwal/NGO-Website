<html>
<head>
<title>process done 
</title>
</head>
<body>
<?php
// connect to server

$username = $_POST['username'];
$contact = $_POST['contact'];
$things = $_POST['things'];
$address = $_POST['address'];

$db  = @mysql_connect('localhost','root','');

mysql_select_db('db',$db);

$sql="insert into done
(
username,contact,things,address
)
values
('$username','$contact','$things','$address')
";

$result = mysql_query($sql,$db);

if($result)
{
echo "<h1 style=color:red>Done</h1>";
}
else{
echo "<h1 style=color:red>not  Done</h1>";
}
mysql_close($db);
?>
</body>
</html>

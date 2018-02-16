<?php
// connect to server

$COMMENT= $_POST['COMMENT'];


$db  = @mysql_connect('localhost','root','');

mysql_select_db('db',$db);

$sql="insert into comment
(
COMMENT
)
values
('$comment')
";

$result = mysql_query($sql,$db);

if($result)
{
echo "<h1 style=color:red>Thanks for Your Feedback</h1>";
}
else
	{
echo "<h1 style=color:red>NOT DONE</h1>";
}
mysql_close($db);
?>
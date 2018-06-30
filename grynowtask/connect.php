<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';

$con = mysqli_connect($mysql_host, $mysql_user, $mysql_password,'student');
@mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die('cannot connect to database');


if(!@mysqli_connect($mysql_host, $mysql_user, $mysql_password))
{
	die('Cannot connect to database');
}		
else
{
	if(!@mysqli_select_db('student'))
	{
		echo 'connection success <br>';
	}
else
{
die('Cannot connect to database');
}
}
?>
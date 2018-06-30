<html>
<head>
<style>

table
{
border-style:solid;
border-width:2px;
border-color:pink;
}


</style>
</head>

<body bgcolor="#EEFDEF">

<?php
require('connect.php');
$query = "SELECT * FROM student_info";
if($is_query_run = mysqli_query($con,$query))
{
	echo "query executed";

	while($query_execute=mysqli_fetch_assoc($is_query_run))
	{	
		echo '<table border="2px" style="width:400px" height="50px" align="center"><tr><td width="60%">'.$query_execute['Name'].'</td><td width="40%">'.$query_execute['Branch'].'</td></tr></table>';
	}
}
else
{
	echo "query not executed";
}
?>
</body>
</html>
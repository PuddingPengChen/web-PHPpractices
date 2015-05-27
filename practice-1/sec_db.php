<html>
<body>
<?php
	$name = $_POST['name'];
	$password = $_POST['password'];
	$mysql = mysqli_connect('127.0.0.1','webauth','webauth');
	if(!$mysql)
	{
		echo "Can not connect to sql";
		exit;
	}
	$selected = mysqli_select_db($mysql,'auth');
	if(!$selected)
	{
		echo "Can not select database";
		exit;
	}
	$query = "select count(*) from authorised_users where 
		  name = '".$name."' 
		  and password = sha1('".$password."')";
	$result = mysqli_query($mysql,$query);
	if(!$result)
	{
		echo "Can not run query.";
		exit;
	}
	$row = mysqli_fetch_row($result);
	$count = $row[0];

	if($count >0)
//	if(($name=="user")&&($password=="pass"))
	{
		echo "<h1>Here it is!</h1>";
		echo "<p>I know you are glad you can see this page.</p>";
	}
	else
	{
		echo "<h1>Go Away</h1>";
		echo "<p>You didn't pass the word check!!</p>";
	}
?>
</body>
</html>

<?php
	include("conn.php");
	if($_POST['submit'])
	{
		$sql="insert into messages(id,user,title,content,lastdate)"."values('','$_POST[user]','$_POST[title]','$_POST[content]',now())";
		mysql_query($sql);
		echo "提交成功！";
	}
	else
	{
		echo "not post any data";
	}
?>

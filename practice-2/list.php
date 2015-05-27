<html>
<head>
	<h1>hello</h1>
</head>
<body> 
   <?php  
    include ("conn.php");  
    ?>  
    <table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#cccccc">  
    <?php  
     $sql = "SELECT * FROM messages ORDER BY id DESC";  
     $query=mysql_query($sql);  
       
     while($row=mysql_fetch_array($query)){  
           
    ?>  
      <tr bgcolor="#eeeeee">  
      <td>title: <?php echo $row[title];?> user: <?php echo $row[user];?></td>  
      </tr>  
      <tr bgColor="#ffffff">  
      <td>content: <?php echo $row[content];?> date:<?php echo $row[lastdate]?></td>  
      </tr>  
       <?php  
         }  
       ?>  
    </table>
</body>
</html>  

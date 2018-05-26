<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="form.php" method="post">
	
	<center><table  width="400" height="300">
		
			<td align="right">Name:</td><td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td align="right">Email:</td><td><input type="text" name="Email"></td>
		</tr>
		<tr>
			<td align="right">Message:</td><td><input type="text" name="Message"></td>
		</tr>
	    <tr>
			<td colspan="5"align="center"><input type="submit" name="submit"value="submit"</td>
		</tr>


	</table></center>

</form>
</body>
</html>


<?php
mysql_connect("localhost","root","")or die("not connect");
mysql_select_db("portfolio_message")or die("no db found");
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $Email=$_POST['Email'];
   $Message=$_POST['Message'];
  
  $query ="INSERT INTO meassage(name,Email,Message) value('$name','$Email','$Message')";
  if(mysql_query($query))
 {
 	echo "<h3>send successfullly</h3>";
 }

}




?>
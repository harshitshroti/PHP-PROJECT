
<html>

<head>
<title> php form </title>
  </head>

	<body> 
		<form  method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table>
					<tr>
						<td>Email</td>
						<td><input type="email"name ="login_email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password"name ="login_password"></td>
					</tr>
					<tr>
						<td><input type="hidden" value="yes" name="validate"></td>
						<td><input type= "submit"name ="login_submit"></td>
					</tr>
			</table>
		
		</form>


	</body>
</html>
<?php
	if(isset($_POST['validate'])){
		echo "the username is : $_POST[login_email] <br>";
		echo "the password is : $_POST[login_password] <br>";
		
	}else{
		echo "no respond";
	}
?>

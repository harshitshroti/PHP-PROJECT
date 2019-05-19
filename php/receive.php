<?php
	if(isset($_POST['validate'])){
		echo "the username is : $_POST[login_email] <br>";
		echo "the password is : $_POST[login_password] <br>";
		
	}else{
		echo "no respond";
	}
?>
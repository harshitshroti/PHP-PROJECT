<?php include 'includes/db.php'; ?>
<html>
		<head>
			<title> retreiving data from database</title>
			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

			<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

			<!-- Latest compiled JavaScript -->	
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			
		</head>
	<body>  
	<div class="container">
		<table class="table table-striped">
			<thead>
			<th> id</th>
			<th> name</th>
			<th> email</th>
			<th> website</th>
			<th> comments</th>
			<th> gender</th>
			</thead>
			<tbody>
<?php
	$sql = "select * from comment";
	$run_sql = mysqli_query($conn,$sql);
	while($rows = mysqli_fetch_array($run_sql)){
		echo '
			<tr>
				<td>'.$rows['id'].'</td>
				<td>'.$rows['name'].'</td>
				<td>'.$rows['email'].'</td>
				<td>'.$rows['website'].'</td>
				<td>'.$rows['comments'].'</td>
				<td>'.$rows['gender'].'</td>
			</tr>
			';
	}

?>
 </tbody>
		</table>
		</div>
	</body>
</html>
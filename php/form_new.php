<!DOCTYPE html>
<html>
	<head>
		<title>NEW FORM</title>
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
			<h1>submit form</h1>
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="name" class="control-label col-sm-2">Name </label>
						<div class="col-sm-5">
							<input type ="text" id="name" class="form-control" placeholder="full name"> 
						</div>
				</div>
				<div class="form-group">
					<label for="email" class="control-label col-sm-2">Email address </label>
						<div class="col-sm-5">
							<input type ="email" id="name" class="form-control" placeholder="email "> 
						</div>
				</div>
				<div class="form-group">
					<label for="gender" class="control-label col-sm-2">gender </label>
						<div class="col-sm-2">
							<select class="form-control">
							<option value="">select your gender</option>
							<option value="male">male</option>
							<option value="female">female</option>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label for="website" class="control-label col-sm-2">website </label>
						<div class="col-sm-5">
							<input type ="text" id="name" class="form-control" placeholder="your site"> 
						</div>
					</div>
					
						<div class="form-group">
					<label for="comment" class="control-label col-sm-2">Comment </label>
						<div class="col-sm-5">
							<input type ="text" id="name" class="form-control" placeholder="comment here"> 
						</div>
				
				</div>
			</form>
			
		</div>
	</body>

</html>

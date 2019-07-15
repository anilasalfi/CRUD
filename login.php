<?php

include 'connect.php';
$count=0;
$userErr = $passErr = "";

if(isset($_POST['done'])) {

	if(isset($_POST['username']) && $_POST['username'] !=''){
		$username=$_POST['username'];
		$count=$count+1;
	}

	else{
		$userErr='Username is missing';
	}

	if(isset($_POST['password']) && $_POST['password'] !=''){
		$password=$_POST['password'];
		$count=$count+1;
	}

	else{
		$passErr='Password is missing';
	}
}

if($count==2){
	$username=$_POST['username'];
	$password =$_POST['password'];
	$sql ="SELECT * from login WHERE username = '$username' and password='$password' LIMIT 1";
	$result = $conn->query($sql);
	if($result->num_rows>0){
			//echo("You have successfully logged in");
		header("Location: welcome.php");
		exit();
	}else{
		header("Location: error.php");
		exit();
	}
	$count=0;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
	<div class="col-lg-5 m-auto">

		<form method="post" action="login.php">

			<div class="card"> 

				<br><br>

				<div class="card-header bg-info">
					<h1 class="text-white text-center">  Login </h1>
				</div><br>

				Username
				<span class="error text-danger">* <?php echo $userErr;?> </span>
				<input type="text" name="username" class="form-control" value="<?php if(isset($_POST['username'])) echo trim($_POST['username']);?>">
				<br>
				Password
				<span class="error text-danger">* <?php echo $passErr;?> </span>
				<input type="password" name="password" class="form-control">
				<br><br>

				<button name="done" type="submit" class=" btn btn-success">Submit</button>



			</div>

		</form>
	</div>

</body>
</html>
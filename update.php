<?php 

include 'connect.php';

$fnameErr = $lnameErr = $emailErr = $contactErr = "";
$count = 0;

	
if(isset($_POST['done'])){

if (isset($_GET['id'])) 
{ 
    $id = $_GET['id']; 
}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (empty($_POST['first_name'])) {
			$fnameErr = "First Name is required";
		} else {
			$first_name = $_POST["first_name"];
			$count = $count + 1;
		}

		if (empty($_POST['last_name'])) {
			$lnameErr = "Last Name is required";
		} else {
			$last_name = $_POST["last_name"];
			$count = $count + 1;
		}

		if (empty($_POST['email'])) {
			$emailErr = "Email is required";
		} else {
			$email = $_POST["email"];
			$count = $count + 1;
		}

		if (empty($_POST['contact_no'])) {
			$contactErr = "Contact number is required";
		} else {
			$contact_no = $_POST["contact_no"];
			$count = $count + 1;
		}

	}

	if($count == 4){
		$query = "UPDATE crudtable SET id='$id', first_name='$first_name',last_name='$last_name',email='$email',contact_no='$contact_no' WHERE id=$id";

		mysqli_query($conn,$query);
		$count = 0;

		header('location:display.php');
	
}
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

		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

			<div class="card"> 

				<br><br>

				<div class="card-header bg-info">
					<h1 class="text-white text-center">  Update Operation </h1>
				</div><br>


				<label>First Name</label>
				<span class="error text-danger">* <?php echo $fnameErr;?> </span>
				<input type="text" name="first_name" class="form-control">
				<br>
				Last Name
				<span class="error text-danger">* <?php echo $lnameErr;?> </span>
				<input type="text" name="last_name" class="form-control">
				<br>
				Email Address
				<span class="error text-danger">* <?php echo $emailErr;?> </span>
				<input type="text" name="email" class="form-control">
				<br>
				Contact no.
				<span class="error text-danger">* <?php echo $contactErr;?> </span>
				<input type="text" name="contact_no" class="form-control">
				<br><br>

				<button name="done" type="submit" class="btn btn-success">Submit</button>



			</div>

		</form>
	</div>
</body>
</html>
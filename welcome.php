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

	<div class="col-lg-10 m-auto">

		<div class="card"> 

			<br><br>

			<?php 

			include 'connect.php';

			$query = "SELECT * FROM `login`";

			$table = mysqli_query($conn,$query);

			while ($data=mysqli_fetch_array($table)){

			?>

			<div class="card-header bg-info">
				<h2 class="text-white text-center">  Welcome <?php echo $data['firstname']; echo $data['lastname']; ?>! </h2>
			</div><br>
			<?php 
		}
		?>
<p> You can choose to perform the following operations in your database:</p>

		<table class="table table-borderless text-center">

			<tr>

			<th> Insert New User </th>
			<th><button class="btn btn-primary"><a href="insert.php" class="text-white"> Insert </a> </button></th>
			
			</tr>
			<br>
			<tr>

			<th> View Current Record</th>
			<th><button class="btn btn-primary"><a href="display.php" class="text-white"> View Database </a> </button></th>
			
			</tr>	

		</table>

	</div>
</div>

</body>

</html>
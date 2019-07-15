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

		<div class="card table-responsive"> 

			<br><br>

			<div class="card-header bg-info">
				<h2 class="text-white text-center">  User Database </h2>
			</div><br>


			<table class="table table-striped text-center">
				<thead class="thead-dark">

					<tr>
						<th>ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email Address</th>
						<th>Contact no.</th>
						<th>Timestamp</th>
						<th colspan="2" class="bg-secondary"> Actions </th>
					</tr>
				</thead>

				<tr>

					<?php 

					include 'connect.php';

					$query = "SELECT * FROM `crudtable`";

					$table = mysqli_query($conn,$query);

					while ($data=mysqli_fetch_array($table)){

						?>

						<td><?php echo $data['id']; ?> </td>
						<td><?php echo $data['first_name']; ?> </td>
						<td><?php echo $data['last_name']; ?> </td>
						<td><?php echo $data['email']; ?> </td>
						<td><?php echo $data['contact_no']; ?> </td>
						<td><?php echo $data['date']; ?> </td>
						<td><button class="btn btn-primary"> <a href="update.php?id=<?php echo $data['id'];?>" class="text-white"> Update </a> </button> </td>
						<td><button class="btn btn-danger"> <a href="delete.php?id=<?php echo $data['id'];?>" class="text-white"> Delete </a></button> </td>
					</tr>


					<?php 
				}
				?>



			</table>

			<div class="text-center">
				<button class="btn btn-secondary"> <a href="display.php" class="text-white"> Refresh Page </a> </button>
				<button class="btn btn-secondary"> <a href="welcome.php" class="text-white"> Back to Homepage </a> </button>
			</div>

		</div>
	</div>
<!---
	<script>
		function info() {
			var x = confirm("Are you sure you want to delete this entry?");
			if (x==true) {
				var val = '<?php echo $data['id']; ?>';
				window.open('http://localhost/crud/delete.php?id='+val);
			} else {
				return false;
			}
		}
	</script> --->

</body>

</html>
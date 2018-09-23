<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="shortcut icon" type="image/x-icon" href="logo.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylingdashboard.css">
</head>
<body>
<header class="dash dashsize">

				&nbsp;&nbsp;Dashboard
				
					<?php 
						$email=$_SESSION["email"];
						$pass=$_SESSION["pass"];
						$servername="localhost";
						$username="root";
						$password="";
						$db='asset';
						$conn = mysqli_connect($servername, $username, $password,$db);
						$sql = "SELECT * FROM role WHERE email='$email'";
						$result = mysqli_query($conn,$sql);

						while($row = mysqli_fetch_assoc($result))
						{
							$num=$row["roleid"];
						}

						if($num==0)
						{
							$sql = "SELECT * FROM student WHERE email='$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
								$name=$row["name"];
							}
							echo '<span class="dashnamesize ">Welcome, '.$name.'</span>';
						}
						else if($num==1)
						{
							$sql = "SELECT * FROM teacher WHERE email='$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
								$name=$row["name"];
							}
							echo '<span class="dashnamesize ">Welcome, '.$name.'</span>';
						}
						else if($num==2)
						{
							$sql = "SELECT * FROM labincharge WHERE email='$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
								$name=$row["name"];
							}
							echo '<span class="dashnamesize ">Welcome, '.$name.'</span>';
						}
						else if($num==3)
						{
							$sql = "SELECT * FROM purchaseofficer WHERE email='$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
								$name=$row["name"];
							}
							echo '<span class="dashnamesize ">Welcome, '.$name.'</span>';
						}
						else if($num==4)
						{
							$sql = "SELECT * FROM hod WHERE email='$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
								$name=$row["name"];
							}
							echo '<span class="dashnamesize ">Welcome, '.$name.'</span>';
						}
						else if($num==5)
						{
							$sql = "SELECT * FROM principal WHERE email='$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
								$name=$row["name"];
							}
							echo '<span class="dashnamesize ">Welcome, '.$name.'</span>';
						}
						else
						{
							$sql = "SELECT * FROM storemanager WHERE email='$email'";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result))
							{
								$name=$row["name"];
							}
							echo '<span class="dashnamesize ">Welcome, '.$name.'</span>';
						}
					?>

			</header> 

<?php
//$_SESSION["email"]=$_POST["email"];
//$_SESSION["pass"]=$_POST["pass"];
if(!empty($_SESSION["email"]))
{
	$conn = mysqli_connect($servername, $username, $password,$db);
	$sql = "SELECT * FROM role WHERE email='$email'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$num=$row["roleid"];
	}




	if(($num==0)||($num==1)||($num==2))
	{
		?>
		<div class="topnav">

			<a href="#dashboard.php" style="padding-left: 28px; padding-right: 25px;"><b>Home</b></a>
			<a href="#yourseat"><b>Request Asset</b></a>
			<a href="#bookseat.php"><b>Your Asset</b></a>
			<a href="#logout.php" style="margin-left: 870px;"><b>Sign Out</b></a>

		</div>
		<?php
	}
	else if(($num==3)||($num==4)||($num==5))
	{
		?>
		<div class="topnav">

			<a href="#dashboard.php" style="padding-left: 28px; padding-right: 25px;"><b>Home</b></a>
			<!--<a href="#yourseat"><b>Your Seats</b></a>-->
			<a href="#bookseat.php"><b>View Pending Requests</b></a>
			<a href="#logout.php" style="margin-left: 870px;"><b>Sign Out</b></a>

		</div>
		<?php
	}
	else
	{
		?>
		<div class="topnav">

			<a href="#dashboard.php" style="padding-left: 28px; padding-right: 25px;"><b>Home</b></a>
			<!--<a href="#yourseat"><b>Your Seats</b></a>-->
			<a href="#bookseat.php"><b>Send Orders</b></a>
			<a href="#logout.php" style="margin-left: 870px;"><b>Sign Out</b></a>

		</div>
		<?php
	}

}
?>

</body>
</html>
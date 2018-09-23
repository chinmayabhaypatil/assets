
<?php 





session_start();
$_SESSION["email"]=$_POST["email"];
$_SESSION["pass"]=$_POST["pass"];
if(!empty($_SESSION["email"]))
{
	$email=$_SESSION["email"];
	$pass=$_SESSION["pass"];
	$servername="localhost";
	$username="root";
	$password="";
	$db='asset';
	$conn = mysqli_connect($servername, $username, $password,$db);

	/*if(! $conn ) {
	            die('Could not connect: ' . mysql_error());
	         }
	         echo 'Connected successfully';
	*/

	$sql = "SELECT * FROM role WHERE email='$email'";
	$result = mysqli_query($conn,$sql); //or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(db_conx), E_USER_ERROR);
	$rows = mysqli_num_rows($result);

	while($row = mysqli_fetch_assoc($result))
	{
		if($pass==$row["password"])
		{  
			 ?>
			<script type="text/javascript">
				window.location.href='dashboard.php';
			</script>
			<?php			
		}
	}

}
else
{
	echo 'not logged in';
}

?>

</body>
</html>
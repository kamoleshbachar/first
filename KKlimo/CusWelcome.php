<html>
	<head>

	</head>
	<body>
	<center>
	<?php
	
		$user ="kamolesh@50.62.160.85";
		$Pass ="";
		
		$con=mysqli_connect("50.62.209.78",$user,$Pass,"kamolesh_");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$sql="INSERT INTO Pass_Info(F_name, L_Name, Address, City, State, Zip, Phone, Email,Password)
		VALUES
		('$_POST[f_name]', '$_POST[l_Name]', '$_POST[address]', '$_POST[city]', '$_POST[state]', $_POST[zip], $_POST[phone], '$_POST[email]', '$_POST[pass])";

		if (!mysqli_query($con,$sql))
			{
			die('Error: ' . mysqli_error($con));
			}
			echo "Congratulation<br><br>";
		
		 $result = mysqli_query($con,"select VIP_Num from Pass_Info where F_Name = '$_POST[f_name]'");

		 while($row = mysqli_fetch_array($result))
			{
			echo "<h1>Hi, $_POST[f_name]</h1>";
			echo "<h1>Your VIP Number Is </h1>";
			$vip = $row['VIP_Num'];
			echo "<a href='Pas_Pro.php'><h1>".$vip."</h1></a>";
			//echo "<a href='Pas_Pro.php'><h1>".$row['VIP_Num']."</h1></a>";
			echo "<br>";
			}
			
			mysqli_close($con);

			?>
			<?php
		
		
		$to = $_POST['email'];
		$from ='ken.bachar@gmail.com';
		$subject = 'K&K limo';
		
		$name = $_POST['f_name'];
		
		$message =<<<EMAIL
Hi ! $name 
Congratulation to K&K Limo !!
This is your VIP Number : $vip
Please Click On the link to create Your password 
EMAIL;
		
		$headers ="Form: $from";
		
			mail($to, $subject, $message, $headers);
		
		
		//bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] )
		
		
		echo 'You will receive am email shortly <br>Please check your email and create your password ';
	?>
	
	</center>
	</body>
</html>
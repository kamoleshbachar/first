<html>
	<head>
		<script>
			function goBack(){
			  window.history.back()
			  }
		</script>
	</head>
	<body>
	<center>
		<?php
			echo "<h2>Hi ! "."$_POST[f_name]"."</h2>";
			echo "Please Review Your Information<br>";
			echo" <br>";
			echo" <br>";
		?>
	<table>
		<tr>
			<td width=75 align ="left">
				<?php
					echo "First Name <br>";
					echo "Last Name <br>";
					echo "Address <br>";
					echo "City <br>";
					echo "State <br>";
					echo "Zip <br>";
					echo "Phone <br>";
					echo "Email <br>";
				?>
			</td>
			<td width=220 align ="left">
				<?php
					echo ": "."$_POST[f_name]<br>";
					echo ": "."$_POST[l_Name]<br>";
					echo ": "."$_POST[address]<br>";
					echo ": "."$_POST[city]<br>";
					echo ": "."$_POST[state]<br>";
					echo ": "."$_POST[zip]<br>";
					echo ": "."$_POST[phone]<br>";
					echo ": "."$_POST[email]<br>";
				?>
			</td>
		</tr>
	</table>
	<button onclick="goBack()">Edit</button>
	<input type="hidden" value="Submit">
	<?php
		
		
		
		
		/*
	
	
		$user ="root";
		$Pass ="kamolesh";
		
		$con=mysqli_connect("localhost",$user,$Pass,"business");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

		$sql="INSERT INTO Pass_Info(F_name, L_Name, Address, City, State, Zip, Phone, Email)
		VALUES
		('$_POST[f_name]', '$_POST[l_Name]', '$_POST[address]', '$_POST[city]', '$_POST[state]', $_POST[zip], $_POST[phone], '$_POST[email]')";

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
			echo "<a href='Pas_Pro.php'><h1>".$row['VIP_Num']."</h1></a>";
			echo "<br>";
			}

		mysqli_close($con);
		*/
	?>
	</center>
	</body>
</html>
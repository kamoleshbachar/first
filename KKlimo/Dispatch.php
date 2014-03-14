<html>
	<head>
		<link rel= "stylesheet" href="MyDoc.css">
	</head>
	<body>
	<center>
	<h1>Passengers Information</h1>
	<?php
		echo	"<table border='1' bg = 'green'>";
			echo		"<tr>";
				echo		"<td style='width:130px'><h2>First Name</h2></td>";
				echo		"<td style='width:130px'><h2>Last Name</h2></td>";
				echo		"<td style='width:190px'><h2>Address</h2></td>";
				echo		"<td style='width:120px'><h2>City</h2></td>";
				echo		"<td style='width:110px'><h2>State</h2></td>";
				echo		"<td style='width:80px'><h2>Zip</h2></td>";
				echo		"<td style='width:280px'><h2>Email</h2></td>";
				echo		"<td style='width:110px'><h2>Country</h2></td>";
				echo	"</tr>";
			echo	"</table>";
		
		
		$dbUser= $_POST['userName'];
		$dbPass=$_POST['pName'];
		
		$con=mysqli_connect("localhost",$dbUser,$dbPass,"test");
		
					if (! $con)
					   {
					   echo "The User Name or password you entered is incorrect";
					   }

					 $result = mysqli_query($con,"select * from U_Info");

					 while($row = mysqli_fetch_array($result))
					   {
					   //echo "<table ><tr><td>".$row['F_Name'] . " </td><td> " . $row['L_Name'] ."</td></tr></table>";
					  //echo "<table border='1' style='width:1200px'><tr><td>".$row['F_Name']."</td><td>". $row['L_Name']."</td><td>". $row['Address']."</td><td>".$row['City'] . "</td><td>". $row['State'] ."</td><td>". $row['Zip'] ."</td><td>". $row['Email'] . "</td><td> " . $row['Country']."</td></tr></table>";
					  // echo "<br>";
					   
					  /* print "<table border ='1px'>";
					   print "<tr>";
					   print "<td>" . $row['F_Name'] . "</td>"; 
					   print "<td>" . $row['L_Name'] . "</td>"; 
					   print "<td>" . $row['Address'] . "</td>"; 
					   print "<td>" . $row['City'] . "</td>"; 
					   print "<td>" . $row['State'] . "</td>"; 
					   print "<td>" . $row['Zip'] . "</td>"; 
					   print "<td>" . $row['Email'] . "</td>"; 
					   print "<td>" . $row['Country'] . "</td>"; 
					   
					   print "</tr>";
					   print "</table>";
					   print "<br>";
					   
					   */
					   
						echo	"<table border='01'>";
							echo		"<tr>";
								echo		"<td style='width:130px'><a  href='#'>".$row['F_Name']."</a></td>";
								echo		"<td style='width:130px'>".$row['L_Name']."</td>";
								echo		"<td style='width:190px'>".$row['Address']."</td>";
								echo		"<td style='width:120px'>".$row['City']."</td>";
								echo		"<td style='width:110px'>".$row['State']."</td>";
								echo		"<td style='width:80px'>".$row['Zip']."</td>";
								echo		"<td style='width:280px'>".$row['Email']."</td>";
								echo		"<td style='width:110px'>".$row['Country']."</td>";
								echo	"</tr>";
							echo	"</table>";
							
					   }

					 mysqli_close($con);
		
		?>

	</center>
	</body>
</html>
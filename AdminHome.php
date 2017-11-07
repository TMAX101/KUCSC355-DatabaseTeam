<!DOCTYPE html>

<!--
     Name:         Tyler Maxwell
    
	Purpose:	   	Admin Home Page with links 
     URL:        acad.kutztown.edu/~tmaxw449/Project/Phase3/AdminHome.php
         Course:      CSC242
     Due Date:     5/2/2016
-->
<?php
session_start();// Start the session
include('config.php');

?>
<html>
   <head>
   
		<title>  Home.html       </title>
		<meta charset="utf-8">
		<link rel="stylesheet" type = "text/css" href = "Project.css"/>
	</head>
	<body>
		<h1 style = "text-align:center">Home </h1><br>
		<hr>
		<input type="button" value="Logout" onclick="window.location.href='Logout.php'">
		</p>
		<hr>
		<?php
			//get session variables
			$Email = $_SESSION['email'];
			$Pwd = $_SESSION['pwd'];
			// Run the query
			$query = "SELECT fName, lName FROM User WHERE email = '$Email' AND password = '$Pwd'";
			$res = $db->query($query);
			if($res)
			{
				$numR = $res->num_rows;
				for($i=0; $i<$numR;$i++)
				{
					$Fac = $res->fetch_assoc();
					$Fname = $Fac['fName'];
					$Lname = $Fac['lName'];
					//$_SESSION['User'] = $Fac['User'];
					echo "<p><h3> Welcome $Fname $Lname</p>"; //output a welcome message
				}
			}
			else
				echo "Error: $db->error";
		
		?>
		
		
		</body>
</html>
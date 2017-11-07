<!DOCTYPE html>

<!--
     Name:         Tyler Maxwell
    
	Purpose:	   To display the cerdentials that the admin account is registered under.
     URL:        acad.kutztown.edu/~tmaxw449/Project/Phase3/AdminCred.php
         Course:      CSC242
     Due Date:     5/2/2016
-->
<?php
include('config.php');
?>

<html>
   <head>
   
		<title>   Cred.php      </title>
		<meta charset="utf-8">
	
		<link rel="stylesheet" type = "text/css" href = "Project.css"/>
	</head>
	<body>
		<h1 style = "text-align:center"> Credentials </h1><br>
		<center><input type="button" value="Register" onclick="window.location.href='Reg.php'"></center>
		<center><input type="button" value="Login" onclick="window.location.href='Login.php'"></center>
		<hr>
		
	<?php	//Get variables from the form
			$Fname = $_POST['Fname'];
			$Lname = $_POST['Lname'];
			$Email = $_POST['email'];
			$Pwd = $_POST['pwd'];
			$Street1 = $_POST['street1'];
			$Street2 = $_POST['street2'];
			$City = $_POST['city'];
			$State = $_POST['state'];
			$Zip = $_POST['zip'];

			//Run the Query
			$query = "insert into User(email, password, fName, lName, street1, street2, city, state, zip) values ('$Email', '$Pwd', '$Fname', '$Lname', '$Street1', '$Street2', '$City', '$State', '$Zip')";
			$res = $db->query($query);
			if($res)
			{	//Output Success Message and Credentials
				echo "Data successfully submitted";
				echo "<p><h3>You are now registered with the following Credentials</h3>
					<h3> PHP received the following data from HTML:<h3>
					<h4>First Name: $Fname</h4>
					<h4>Last Name: $Lname</h4>
					<h4>Email: $Email</h4>";
			}
			else
				echo "The Email you entered already exists!";//Display error message

		
		
		$db->close();
		
	?>
		
		
		
		</body>
</html>
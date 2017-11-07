<!DOCTYPE html>

<!--
     Name:         Tyler Maxwell
    
	Purpose:	   	Form for the admin login
     URL:        acad.kutztown.edu/~tmaxw449/Project/Phase3/AdminLogin.php
         Course:      CSC242
     Due Date:     5/2/2016
-->

<html>
   <head>
   
		<title>   Login.html       </title>
		<meta charset="utf-8">
		<h1 style = "text-align:center"> Login </h1><br>
		<link rel="stylesheet" type = "text/css" href = "Project.css"/>
	</head>
	<body>

		<hr>
		<center><input type="button" value="Register" onclick="window.location.href='Reg.php'"></center>	
		<hr>
		
			<form align="center" action="CheckLogin.php" method="POST">
			<table align="center">				
				<tbody>
				
					<tr>
						<td align="right">*Email:</td>
						<td align="left"><input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/></td>
					</tr>
					<tr>
						<td align="right">*Password:</td>
						<td align="left"><input type="password" name="pwd" id="pwd"required/></td>
					</tr>
					<tr>
						<td align="right"><button type="submit" value="Submit">Login</button></td>
						<td align="left"><button type="reset" value="Reset">Reset</button></td>
					</tr>					
				</tbody>	
			</table>		
	
		</form>
		
		</body>
</html>
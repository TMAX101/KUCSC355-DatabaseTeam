<!--
     Name:         Tyler Maxwell
    
	Purpose:	   	To check if the email and password exist in the Admin table
	
     URL:        acad.kutztown.edu/~tmaxw449/Project/Phase3/adminCheckLogin.php
         Course:      CSC242
     Due Date:     5/2/2016
-->
<?php
session_start();//Starts a session
include('config.php');

$Email = $_POST['email']; // Gets email from the form
$Password = $_POST['pwd'];// Gets password from the form 

$query = "SELECT * FROM User WHERE email = '$Email' and password = '$Password'";// Query to check for the email and password
$res = $db->query($query);
$numRows = $res->num_rows;// Get the query table

if($numRows==1)
{
	
	$_SESSION['email'] = $Email;// set the email to a session variable
	$_SESSION['pwd'] = $Password;// set the password to a session variable
	header("location:AdminHome.php");//
}
else
{

	header("location:LoginFail.php");
}
?>
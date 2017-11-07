<!--
     Name:         Tyler Maxwell
    
	Purpose:	Logout php	
	URL:        acad.kutztown.edu/~tmaxw449/Project/Phase3/Logout.php
         Course:      CSC242
     Due Date:     5/2/2016
-->
<?php
session_start();
unset($_SESSION);
session_destroy();

header("Location: Logout2.php");
exit;
?>
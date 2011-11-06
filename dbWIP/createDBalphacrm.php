<?php
/*

*	File:		createDBalphacrm.php
*	By:			TMIT
*	Date:		11-06-2011
*
*	This script *
*
*
*=====================================
*/



{ // Connect and Test MySQL and specific DB (return $dbSuccess = T/F)
				
			$hostname = "localhost";
			$username = "root";
			$password = "element";
			
			$databaseName = "alphacrm";

			$dbConnected = @mysql_connect($hostname, $username, $password);

			$dbSuccess = true;
			if ($dbConnected) {
				
			} else {
				echo "MySQL connection FAILED<br /><br />";
				$dbSuccess = false;
			}
}  

//	 Execute code ONLY if connections were successful 	
if ($dbSuccess) {
	
	$dbName = "alphacrm";
	$create_SQL = "Create DATABASE ".$dbName;
	
	if (mysql_query($create_SQL))  {	
		echo "'Create DATABASE ".$dbName."' -  Successful.";
	} else {
		echo "'Create DATABASE ".$dbName."' - Failed.";
	}	
				
}



?>
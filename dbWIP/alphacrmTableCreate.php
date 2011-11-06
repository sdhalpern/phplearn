<?php
/*

*	File:		alphacrmTableCreate.php
*	By:			TMIT
*	Date:		11-6-11
*
*	This script creates tables tCompany and tPerson in the database alphacrm
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
			$dbSelected = @mysql_select_db($databaseName,$dbConnected);

			$dbSuccess = true;
			if ($dbConnected) {
				if (!$dbSelected) {
					echo "DB connection FAILED<br /><br />";
					$dbSuccess = false;
				}		
			} else {
				echo "MySQL connection FAILED<br /><br />";
				$dbSuccess = false;
			}
}  

//	 Execute code ONLY if connections were successful 	
if ($dbSuccess) {
	
					//   SQL script to create table tCompany
	
				$createCoyTable_SQL = "CREATE TABLE alphacrm.tCompany ( ";
				$createCoyTable_SQL .= "ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY , ";
				$createCoyTable_SQL .= "preName VARCHAR( 50 ) , ";
				$createCoyTable_SQL .= "Name VARCHAR( 250 ) NOT NULL, ";
				$createCoyTable_SQL .= "RegType VARCHAR( 50 )  NULL, ";
	
				$createCoyTable_SQL .= "StreetA VARCHAR( 150 )  NULL, ";
				$createCoyTable_SQL .= "StreetB VARCHAR( 150 )  NULL, ";
				$createCoyTable_SQL .= "StreetC VARCHAR( 150 )  NULL, ";
				$createCoyTable_SQL .= "Town VARCHAR( 150 )  NULL, ";
				$createCoyTable_SQL .= "County VARCHAR( 150 )  NULL, ";
				$createCoyTable_SQL .= "Postcode VARCHAR( 50 )  NULL, ";
	
				$createCoyTable_SQL .= "COUNTRY VARCHAR( 250 ) NOT NULL ";
				$createCoyTable_SQL .= ")";
				
				if (mysql_query($createCoyTable_SQL))  {	
					echo "'Create TABLE tCompany' -  Successful.<br /><br />";
				} 
	
			
}

}

?>
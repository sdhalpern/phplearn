<?php
/*

*	File:		insertcompanies01.php
*	By:			TMIT
*	Date:		11-06-2011
*
*	This script inserts company details into the table tCompany
*
*insertcompanies01.php
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
	
			
		$company_SQLinsert = "INSERT INTO tCompany ( ";
		// $company_SQLinsert .=  "ID, ";
		$company_SQLinsert .=  "preName, ";
		$company_SQLinsert .=  "Name, ";
		$company_SQLinsert .=  "RegType, ";
		$company_SQLinsert .=  "StreetA, ";
		$company_SQLinsert .=  "StreetB, ";
		$company_SQLinsert .=  "StreetC, ";
		$company_SQLinsert .=  "Town, ";
		$company_SQLinsert .=  "County, ";
		$company_SQLinsert .=  "Postcode, ";
		$company_SQLinsert .=  "COUNTRY ";
		$company_SQLinsert .=  ") ";
		
		$company_SQLinsert .=  "VALUES ";
		
		{ // insert Pie Company 
			$company_SQLinsert .=  "(";
			//$company_SQLinsert .=  "'<autoincremented ID value>', ";
			$company_SQLinsert .=  "'The', ";
			$company_SQLinsert .=  "'Pie Company', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'89 Gravy Road', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'Pastryville', ";
			$company_SQLinsert .=  "'NSW', ";
			$company_SQLinsert .=  "'1297', ";
			$company_SQLinsert .=  "'Australia' ";
			$company_SQLinsert .=  "), ";
		}

		{ // insert TMIT 		
			$company_SQLinsert .=  "(";
			//$company_SQLinsert .=  "'<autoincremented ID value>', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'TMIT World', ";
			$company_SQLinsert .=  "'Limited', ";
			$company_SQLinsert .=  "'42 Lily Close', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'Bicester', ";
			$company_SQLinsert .=  "'Oxfordshire', ";
			$company_SQLinsert .=  "'OX26 3EJ', ";
			$company_SQLinsert .=  "'UK' ";
			$company_SQLinsert .=  "), ";
		}

		{ // insert JACASTA 		
			$company_SQLinsert .=  "(";
			//$company_SQLinsert .=  "'<autoincremented ID value>', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'JACASTA', ";
			$company_SQLinsert .=  "'Limited', ";
			$company_SQLinsert .=  "'42 Lily Close', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'', ";
			$company_SQLinsert .=  "'Bicester', ";
			$company_SQLinsert .=  "'Oxfordshire', ";
			$company_SQLinsert .=  "'OX26 3EJ', ";
			$company_SQLinsert .=  "'UK' ";
			$company_SQLinsert .=  ") ";
		}
		
		
		if (mysql_query($company_SQLinsert))  {	
			echo "INSERT INTO tCompany - SUCCESSFUL.<br /><br />";
		} else {
			echo "INSERT INTO tCompany - FAILED.<br /><br />";
		}
		

			
}




?>
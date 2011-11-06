<?php
	
/*			Exercise 3 - database and table creation:

			save this snippet as "exercise3.php"  in the htdocs directory
			
			the open:   http://localhost/exercise3.php
			
			The result will tell you if you correctly completed exercise 3

*/

$databaseName = "DVD";
$username = "root";
$password = "element";
$hostname = "localhost";

$dbh = mysql_connect($hostname, $username, $password) 
or die("Unable to connect to MySQL");

$selected = mysql_select_db($databaseName,$dbh) 
or die("Could not connect to Database".$databaseName);

echo "Exercise 3: database DVD correctly created.<br /><br />";


$sqlTxt = "SELECT * FROM tArtists";
	
	if (mysql_query($sqlTxt)) {
		echo "Exercise 3: table tArtists correctly created.<br /><br />";
	} else {
		echo "Exercise 3: table tArtists NOT created.<br /><br />";
		
	}; 	

$sqlTxt = "SELECT * FROM tRecordings";
	
	if (mysql_query($sqlTxt)) {
		echo "Exercise 3: table tRecordings correctly created.<br /><br />";
	} else {
		echo "Exercise 3: table tRecordings NOT created.<br /><br />";
		
	}; 	


?>
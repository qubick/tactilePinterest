<html>
	<head><title>PostgreSQL Example</title></head>
	<body>
<?php
	echo "doc is ready\n";

	ini_set('display_errors', '1');
	error_reporting(E_ALL | E_STRICT);

	$conn = pg_pconnect("host=localhost port=5432 dbname=tactile user=postgres password=akf493");
	
	if (!$conn) {
	echo "Cannot access to the db.\n";
	    exit;
} else {
	echo "Connected to the tactile";


	$result = pg_query($conn, "SELECT author, email FROM authors");
	if (!$result) {
	  	echo "Can't get query result.\n";
	    exit;
		}

		while ($row = pg_fetch_row($result)) {
	  		echo "Author: $row[0]  E-mail: $row[1]";
	    	echo "\n";
		}
	}
?>

</body>
</html>

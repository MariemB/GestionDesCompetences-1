<?php
    //set off all error for security purposes
	error_reporting(E_ALL);
	

	//define some contstant
    define( "DB_DSN", "mysql:host=localhost;dbname=Novatris" );
    define( "DB_USERNAME", "root" );
    define( "DB_PASSWORD", "azerty" );
	define( "CLS_PATH", "class" );
	
	//include the classes
	include_once( CLS_PATH . "/Authentification.php" );
	

?>

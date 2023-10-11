<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= 'Pratik@mysql7';
$db_database	= 'pms'; 
/* End config */

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

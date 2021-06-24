
<?php
$dbhost = "sql6.freesqldatabase.com	";
$dbuser = "sql6421144";
$dbpass = "fSjRD7PbIN";
$dbname = "sql6421144";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
 {

	die("failed to connect!");
 }

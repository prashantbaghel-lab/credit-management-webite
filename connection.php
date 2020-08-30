<?php
$servername="sql313.epizy.com";
$username="epiz_26607329";
$password="LeBOcHlJBf";
$dbname="epiz_26607329_credit";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("connection failed: ".mysqli_connect_error().'<hr>');
}

	
?>
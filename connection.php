<?php

$dbhost = "localhost";
$dbuser = "user1";
$dbpass = "123";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Neizdevās savienoties!");
}

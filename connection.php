<?php
$dbhost="localhost";
$dbuser="admin";
$dbpass="0000";
$dbname="messages";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}



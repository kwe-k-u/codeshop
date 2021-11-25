<?php
require ('Database_credentials_finalproject');

$db = mysqli_connect("localhost","username","","Codeshop_final");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
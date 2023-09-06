<?php

$host="localhost";
$user="root";
$password="";
$db="oduduwa_hospital";
$port="3306";



$data= mysqli_connect($host,$user,$password,$db,$port);
if(!$data)
{
    die(mysqli_error($data));
}

?>
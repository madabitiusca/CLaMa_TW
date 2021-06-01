<?php

$serverName= "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "bd_uaic";

$conn =  mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
    die("site-ul nu este conctat la baza de date" . mysqli_connect_error());
}
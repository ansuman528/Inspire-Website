<?php


$servername = "localhost";
$username ="inspibck_ansuman528";
$password="Ansuman528@";
$database ="inspibck_ansuman";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    echo"Connection  not Succesful";
}

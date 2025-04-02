<?php
$conn = mysqli_connect("localhost","root","","cis_payment");

if(!$conn){
    die('Connection failed'.mysqli_connect_error());
}

?>
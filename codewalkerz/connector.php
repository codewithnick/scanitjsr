<?php
$conn = mysqli_connect('localhost','scadata','$c@_Data1234','SCA_website');
if(!$conn){
    die("Error in establishing Connection :( ".mysqli_connect_error());
}
?>
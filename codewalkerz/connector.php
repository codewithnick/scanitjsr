<?php
$conn = mysqli_connect('localhost','root','','sca_website');
if(!$conn){
    die("Error in establishing Connection :( ".mysqli_connect_error());
}
?>
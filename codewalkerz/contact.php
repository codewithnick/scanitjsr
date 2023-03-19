<?php
echo $_POST[""]
include("connector.php");
$sql="INSERT INTO `contact_form` (`id`, `name`, `email`, `message`) VALUES (NULL, 'nikhil', 'abc', 'xyz')";
$result=mysqli_query($conn,$sql);
echo $result;

?>
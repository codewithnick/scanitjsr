<?php

$name=$_POST["fname"];
$email=$_POST["email"];
$year=$_POST["yPassing"];
$course=$_POST["course"];
$college=$_POST["college"];
include("connector.php");
$sql="INSERT INTO `codewalkerz` (`id`,`name`,`email`,`year_of_passing`,`course`,`college`) VALUES (NULL,'$name','$email','$year','$course','$college')";
$result=mysqli_query($conn,$sql);

//added to db now sending mail
include("mailsender.php");
$link="</dummylink>";
$subject="Registration Accepted";
$body="Hello ".$name." your response has been recorded, Congratulations for registering in DAY 1 event see you there\n";
$body.=$link;
$body.=" \nWe wish you all the very best for the contest. Thank you for Participating";
sendamail($email,$subject,$body);
$bodynew="";
$bodynew.="\nName: ".$name;
$bodynew.="\Email: ".$email;
$bodynew.="\nYear of Passing: ".$year;
$bodynew.="\nCourse: ".$course;
$bodynew.="\nCollege: ".$college;
sendamail("society.developers.2023@gmail.com","new registration",$bodynew);

if($result)
echo "success";
?>
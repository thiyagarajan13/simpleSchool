<?php
$name=$_POST["name"];
$rollno=$_POST["rollno"];
$dob=$_POST["dob"];
$bgroup=$_POST["bloodgroup"];
$fname=$_POST["fathername"];
$mname=$_POST["mothername"];
$foccu=$_POST["fatheroccupation"];
$moccu=$_POST["motheroccupation"];
$mobno=$_POST["mobno"];
$ginput=$_POST["gender"];

if ($ginput=="1")
{
$gender="Male"; 
}
else
{
$gender="female";
}
$secondlang=$_POST["secondlanguage"];
$thirdlang=$_POST["thirdlanguage"];
$class=$_POST["class"];
$raddress=$_POST["residential_address"];
$paddress=$_POST["permanent_address"];
include ('db.php');
$connect= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');
$query = "INSERT INTO student (name, rollno, dob, blood_group, father_name, mother_name, father_occupation, mother_occupation, mobile_no, gender, secondlanguage, thirdlanguage, class, residential_address, permanent_address) VALUES ('$name','$rollno','$dob','$bgroup','$fname','$mname','$foccu','$moccu',$mobno,'$gender','$secondlang','$thirdlang','$class','$raddress','$paddress')";
$result = mysqli_query($connect,$query) or die('There was an unexpected error grabbing shouts from the database.');
if($result)
echo "success";
else
echo "not success";
?>



<?php
$name=$_POST["name"];
$staffid=$_POST["staffid"];
$dob=$_POST["dob"];
$bgroup=$_POST["bloodgroup"];
$mobno=$_POST["mobno"];
$gender=$_POST["gender"];
$raddress=$_POST["residential_address"];
$paddress=$_POST["permanent_address"];
$education=$_POST["education"];
$experience=$_POST["experience"];
$martial=$_POST["martial_status"];
$email=$_POST["email"];
include ('db.php');
$connect= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');
$query = "INSERT INTO staff (name, dob, staffid, email, education, experience, mobile_no, martial_status, blood_group, gender, residential_address, permanent_address) VALUES ('$name','$dob','$staffid','$email','$education','$experience',$mobno,'$martial','$bgroup','$gender','$raddress','$paddress')";
$result = mysqli_query($connect,$query) or die('There was an unexpected error grabbing shouts from the database.');
if($result)
echo "success";
else
echo "not success";
?>


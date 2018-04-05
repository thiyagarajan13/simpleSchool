<?php


if (isset($_POST['show'])) {
     displayname();
}

include ('db.php'); 
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT count(name) FROM staff";
$sql2="SELECT count(name) FROM student";
$result = $conn->query($sql);
$result1= $conn->query($sql2);

?>
<html>
<head>
    <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<link rel="stylesheet" href="bootstrap-4.0.0-beta.2/css/bootstrap.min.css">
<script src="bootstrap-4.0.0-beta.2/jquery/jquery-3.2.1.slim.min.js"></script>
<script src="bootstrap-4.0.0-beta.2/jquery/popper.min.js"></script>
<script src="bootstrap-4.0.0-beta.2/js/bootstrap.min.js"></script>

</head>
<body>
	<?php
if ($result->num_rows > 0 && $result1->num_rows > 0 ) {
    echo "<table id='customers' border='1px' cellpadding='5px'><tr><th>Member</th><th>No_of_registered</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>STAFFS</td><td>".$row["count(name)"];
    }
     while($row = $result1->fetch_assoc()) {
        echo "<tr><td>STUDENTS</td><td>".$row["count(name)"];
    }
    echo "</table>";
} else {
    echo "0 results";
}



?>
<form action="" method="POST">
     <button type="submit" name="show" value="view details" class="btn btn-success">view details</button>
</form>
</body>
</html>

<?php
 function displayname()
 {include ('db.php'); 
$conn = new mysqli($host, $username, $password, $database);
 		$sql = "SELECT * FROM staff";
$sql2="SELECT * FROM student";
$result = $conn->query($sql);
$result1= $conn->query($sql2);
if ($result->num_rows > 0 && $result1->num_rows > 0 ) {
    echo "<h3>STAFF</h3><table id='customers' border='1px' cellpadding='5px'><tr><th>Staff ID</th><th>NAME</th><th>dob</th><th>email</th><th>Education</th><th>experience</th><th>mobile number</th><th>marital status</th><th>blood group</th><th>Gender</th><th>residential address</th><th>permanent_address</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["staffid"]."</td><td>".$row["name"]."</td><td>".$row["dob"]."</td><td>".$row["email"]."</td><td>".$row["education"]."</td><td>".$row["experience"]."</td><td>".$row["mobile_no"]."</td><td>".$row["martial_status"]."</td><td>".$row["blood_group"]."</td><td>".$row["gender"]."</td><td>".$row["residential_address"]."</td><td>".$row["permanent_address"]."</td>";
    }
     echo "</table>";
    echo "<h3>STUDENT</h3><table id='customers' border='1px' cellpadding='5px'><tr><th>rollno</th><th>name</th><th>dob</th><th>blood_group</th><th>father_name</th><th>mother_name</th><th>father_occupation</th><th>mobile_no</th><th>gender</th><th>secondlanguage</th><th>thirdlanguage</th><th>class</th><th>residential_address</th><th>permanent_address</th></tr>";
     while($row = $result1->fetch_assoc()) {
        echo "<tr><td>".$row["rollno"]."</td><td>".$row["name"]."</td><td>".$row["dob"]."</td><td>".$row["blood_group"]."</td><td>".$row["father_name"]."</td><td>".$row["mother_name"]."</td><td>".$row["father_occupation"]."</td><td>".$row["mobile_no"]."</td><td>".$row["gender"]."</td><td>".$row["secondlanguage"]."</td><td>".$row["thirdlanguage"]."</td><td>".$row["class"]."</td><td>".$row["residential_address"]."</td><td>".$row["permanent_address"]."</td>";
    }
    echo "</table>";

} else {
    echo "0 results";
}
 }
$conn->close();
?>
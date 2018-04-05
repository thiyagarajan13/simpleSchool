<?php 
 
$host= "localhost";
$username= "root";
$database="school_db";
$password= "";
 $conn= mysqli_connect($host,$username,$password,$database) or die('unable to connect to database server at this time');
 session_start();
 $user_check=$_SESSION['login_user'];
 $ses_sql=mysqli_query($conn,"select username from login_details where username='$user_check'");
 $row=mysqli_fetch_assoc($ses_sql);
 $login_session=$row['username'];
if(!isset($login_session)){
  mysqli_close($login_session);
  header('location:home2.php');
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 1000PX}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <a class="navbar-brand" href="home2.php">
    <img src="schoollogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="background-color: #e3f2fd;">
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout[<?php echo $login_session;  ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>
<iframe align="right" height="1000px" width="84%" src="admindisplay.php" name="iframe_a" style="border:none;">
</iframe>
  
  <div class="row content">
<nav class="col-sm-2 sidenav">
  <a class="w3-bar-item w3-button w3-hover-black" href="studentform.php" target="iframe_a">ADD STUDENT</a><br>
  <a class="w3-bar-item w3-button w3-hover-black" href="staffforms.php" target="iframe_a">ADD STAFF</a><br>
</div>
</div>



</body>
</html>


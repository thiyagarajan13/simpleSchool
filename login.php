<?php
session_start();
$error=" ";
if(isset($_POST['submit']))
{
  
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error="username or passowrd is invalid";
  }
  else
  { 
    $username=$_POST['username'];
    $password=$_POST['password'];
    $host= "localhost";
    $user= "root";
    $database="school_db";
    $pass= "";
    $conn= mysqli_connect($host,$user,$pass,$database) or die('unable to connect to database server at this time');
    $username=stripslashes($username);
    $password=stripslashes($password);
    $username=mysqli_real_escape_string($conn,$username);
    $password=mysqli_real_escape_string($conn,$password);
    $query=mysqli_query($conn,"select * from login_details where password='$password' and username='$username'");
    $rows=mysqli_num_rows($query);
    if($rows==1)
    {
      $_SESSION['login_user']=$username;
      header("location:admin.php");
    }
    else{
      $error="username and password is invalid";
     
    }
    mysqli_close($conn);
  }
}
echo $error;
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>


  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <body class="align">

    <div class="grid">

      <form action="" method="POST" class="form login">

        <header class="login__header">
          <h3 class="login__title">Login</h3>
        </header>

        <div class="login__body">

          <div class="form__field">
            <input type="email" placeholder="Email" required name="username">
          </div>

          <div class="form__field">
            <input type="password" placeholder="Password" required name="password">
          </div>

        </div>

        <footer class="login__footer">
          <input type="submit" value="Login" name="submit">

          <p><span class="icon icon--info">?</span><a href="#">Forgot Password</a></p>
        </footer>

      </form>

    </div>

  </body>
  
  
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />
   
  </head>
  <body>
    <div class="text-center">
        <form  method="post">
            <div class="form-group">
                <label for="username">UserName: </label>
                <input type="text" class="form-control" name="userInput" placeholder="Enter UserName"/>
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input type="password" class="form-control" name="passwordInput" placeholder="Enter Password"/>
            </div>
            <button type="submit"  name="login" class="btn btn-primary">Submit</button>
<?php
session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login'])) {
        login();
    }
    function login()
    {
      $servername = "wangyingtao.gotoftp5.com";
$username = $_POST["userInput"];
$password = $_POST["passwordInput"];
$dbname = "wangyingtao";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$_SESSION['username']=$_POST['userInput'];
header('Location:login.php');
    }
?>
        </form>
    </div>
  </body>
  </html>

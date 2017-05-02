<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>feedback admin</title>
   <!--
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">-->

  </head>
  <body>
    <header>
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand2">
							<a href="index.html"><h1><span>四川风帆</span>企业管理咨询服务有限公司</h1></a>
						</div>
					</div>

					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="zhaopingadmin.php">招聘信息</a></li>
								<li role="presentation"><a href="feedbackadmin.php" class="active">留言反馈</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

<?php
session_start();
if(!isset($_SESSION['username'])){
	header('Location:index.php');
}
$servername = "wangyingtao.gotoftp5.com";
$username = "wangyingtao";
$password = "e3x5zub7";
$dbname = "wangyingtao";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,title,content,name,sex,tel  FROM pwn_feedback_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form action='feedbackdetail.php' > <label>id: " . $row["id"]. " - 留言主题: " . $row["title"]. "</label><br> <button type='submit' name='id' value='" . $row["id"]. "'>查看</button></form>";
    }
} else {
    echo "0 results";
}
$conn->close();
 if( isset($_POST["id"])) {

    }

?>


  </body>
  </html>

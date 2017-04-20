<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>admin zhaoping</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link href="../css/prettyPhoto.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet" />
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
								<li role="presentation"><a href="zhaopingadmin.php">ZhaoPing</a></li>
								<li role="presentation"><a href="admin/feedback.php">FeedBack</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>

                     <?php
$servername = "wangyingtao.gotoftp5.com";
$username = "wangyingtao";
$password = "e3x5zub7";
$dbname = "wangyingtao";
$dataId=$_GET['id']; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,jobname  FROM pwn_job WHERE id=$dataId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>". $row["id"]. " " . $row["jobname"]. " </p>";
        }
} else {
    echo "0 results";
}
$conn->close();

?>
            
   
  </body>
  </html>

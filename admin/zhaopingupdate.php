<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>admin zhaoping</title>
   <!--
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link href="../css/prettyPhoto.css" rel="stylesheet">
    -->
	<link href="../css/admin.css" rel="stylesheet">
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
								<li role="presentation"><a href="feedbackadmin.php">留言反馈</a></li>
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
$dataId=$_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,jobname,jobtype,jobaddr,jobintro,jobrequest,tel,education  FROM pwn_job WHERE id=$dataId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form  action='zhaopingadmin.php' method='post'>
        <div class='form-group'>
        <label> 职位: </label><input class='form-control' name='jobname' value='" . $row["jobname"]. "'/>
        </div>
         <br>
         <div class='form-group'>
         <label>工作类型：</label><input class='form-control' name='jobtype' value='" . $row["jobtype"]. "'/> 
         </div><br>
         <div class='form-group'>
        <label>工作地点：</label><input class='form-contro'name='jobaddr' value='" .
        $row["jobaddr"]. "'/>
        </div>
         <br>
         <div class='form-group'><label>学历要求：</label><input class='form-control' name='education' value='" . $row["education"]. "'/>
         </div><br>
         <div class='form-group'>
         <label>
        工作内容：</label><textarea  class='form-control' name='jobintro' >".$row["jobintro"]."</textarea>
        </div><br>
        <div class='form-group'><label>
         工作要求：</label><textarea class='form-control' name='jobrequest'>" . $row["jobrequest"]. "</textarea>
         </div>
          <br><div class='form-group'>
          <label>联系电话：</label><input name='tel' class='form-control' value='" . $row["tel"]. "'/>
          </div>
           <br>
           <button type='submit' name='Yes'class='btn btn-primary'>Yes</button>
           <button type='submit' name='No' class='btn btn-danger'>No</button>
           </form>";
        }
} else {
    echo "0 results";
}
$conn->close();
if(isset($_POST['Yes'])){
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

    $jobname=$_POST['jobname'];
    $jobtype=$_POST['jobtype'];
    $jobaddr=$_POST['jobaddr'];
    $education=$_POST['education'];
    $jobintro=$_POST['jobintro'];
    $jobrequest=$_POST['jobrequest'];
    $tel=$_POST['tel'];
    $sql="UPDATE pwn_job 
    set jobname='$jobname',jobtype='$jobtype',jobaddr='$jobaddr',education='$education',jobintro='$jobintro',jobrequest='$jobrequest',tel='$tel' 
    where id=$dataId";
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
    
}
?>
</div>
  </body>
  </html>

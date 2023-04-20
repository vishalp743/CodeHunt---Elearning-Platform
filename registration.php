<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?php 
session_start();
$con=mysqli_connect('localhost','root');

if ($con) 
  {
		
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'projectdatabase');
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $email=$_POST['email'];

 $q="select * from login where username='$name' && password='$pass'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {
	echo '<script>swal("Error", "Username Taken", "error")
	.then((value) => {
	  document.location = "signup.html";
	});;</script>';
 }
 else
 {
 	$qy="insert into login(username,password,email) values('$name','$pass','$email')";
 	mysqli_query($con,$qy);

		$sql = "select * from videos where username = 'admin' ";
  		$res = mysqli_query($con,$sql);
        while($list = mysqli_fetch_assoc($res))
		{
		$vidpath = $list['video_path'];
		$vidname = $list['video_name'];
		$course = $list['course_name'];
		$vidimg = $list['video_image'];

		$q2="INSERT INTO videos(`video_path`, `video_name`, `course_name`, `video_image`, `username`) VALUES ('$vidpath','$vidname','$course','$vidimg','$name')";
		$r2=mysqli_query($con,$q2);
		echo '<script>swal("Success", "Account Created", "success")
	.then((value) => {
	  document.location = "login.php";
	});;</script>';

	}
 }

 ?>

	
</body>
</html>
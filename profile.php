
<?php


session_start();
include "admin/includes/navbar1.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Account</title>
	<link rel="shortcut icon" type="text/css" href="logo.png">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/profilestyle.css">
</head>

<body>
	
	<form method='post' >
<div class="container light-style flex-grow-1 container-p-y">

<h4 class="font-weight-bold py-3 mb-4">
  Account settings
</h4>

<div class="card overflow-hidden">
  <div class="row no-gutters row-bordered row-border-light">
	<div class="col-md-3 pt-0">
	  <div class="list-group list-group-flush account-settings-links">
		<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
		<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change Password</a>
		<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">About Me</a>
		<a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">My Certificates</a>
		<a class="list-group-item list-group-item-action"  href="logout.php">Logout</a>
	  </div>
	</div>
	
	<div class="col-md-9">
	  <div class="tab-content">
		<div class="tab-pane fade active show" id="account-general">

		  <div class="card-body media align-items-center">
			
			<img src="<?php 
			 $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="select photourl from login where username='$username'"; 
				 $result=mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($result))
				 {
					 echo $res['photourl'];
				 }
				   ?>" alt="Photo" width="100" height="100" >
			
			<div class="media-body ml-4">
			<div class="hello-user">
				<h5>HELLO, <?php echo $_SESSION['username'];   ?></h5>
			</div>
			<form>
			    <label class="btn btn-outline-primary">
				Upload new photo
				<input type="file" class="account-settings-fileinput" name='file'>
				<?php
                  if(isset ($_REQUEST["submit"]))
				  {
					$var=$_REQUEST['file'];
					$con=mysqli_connect('localhost','root');
				    mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="UPDATE `login` SET `photourl`='$var' WHERE  username='$username'";
				 $result=mysqli_query($con,$q);
				  }


				?>
			  </label> &nbsp;
			  
			  <button type="submit" name="submit" class="btn btn-default md-btn-flat" action="">Submit</button>
				</from>
			  
			</div>
		  </div>
		  <hr class="border-light m-0">

		  <div class="card-body">
			<div class="form-group">
			  <label class="form-label">Username</label>
			  <input type="text" class="form-control mb-1" name="username" value="<?php echo $_SESSION['username'];   ?>">
			</div>
			<div class="form-group">
			  <label class="form-label">Name</label>
			  <input type="text" class="form-control" name="name" value="<?php
			  $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="select name from login where username='$username'";
			     $result=mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($result))
				 {
					 echo $res['name'];
				 }
				 ?>
				 ">
			</div>
			<div class="form-group">
			  <label class="form-label">E-mail</label>
			  <input type="text" class="form-control mb-1" name="email" value="<?php
			  $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="select email from login where username='$username'";
			     $result=mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($result))
				 {
					 echo $res['email'];
				 }
				 ?>">
			  
			</div>
			
		  </div>

		</div>
		<div class="tab-pane fade" id="account-change-password">
		  <div class="card-body pb-2">

			<div class="form-group">
			  <label class="form-label">Current password</label>
			  <input type="password" class="form-control" name="password" value="<?php
			  $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="select password from login where username='$username'";
			     $result=mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($result))
				 {
					 echo $res['password'];
				 }
				 ?>">
			</div>

			<div class="form-group">
			  <label class="form-label">New password</label>
			  <input type="text" class="form-control" name="passwordnew">
			</div>

			<div class="form-group">
			  <label class="form-label">Repeat new password</label>
			  <input type="text" class="form-control">
			</div>

		  </div>
		</div>
		<div class="tab-pane fade" id="account-info">
		  <div class="card-body pb-2">

			<div class="form-group">
			  <label class="form-label">Birthday</label>
			  <input type="text" class="form-control" name="birthdate" value="<?php
			  $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="select birthdate from login where username='$username'";
			     $result=mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($result))
				 {
					 echo $res['birthdate'];
				 }
				 ?>">
			</div>
			<div class="form-group">
			  <label class="form-label">Country</label>
			  <select class="custom-select">
				<option>India</option>
				<option>United States</option>
				<option>United KingdomK</option>
				<option>Germany</option>
				<option>France</option>
			  </select>
			</div>


		  </div>
		  <hr class="border-light m-0">
		  <div class="card-body pb-2">

			<h6 class="mb-4">Contacts</h6>
			<div class="form-group">
			  <label class="form-label">Phone</label>
			  <input type="tel" class="form-control" name="phone" value="<?php
			  $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="select phonenumber from login where username='$username'";
			     $result=mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($result))
				 {
					 echo $res['phonenumber'];
				 }
				 ?>">
			</div>


		  </div>
  
		</div>
		<div class="tab-pane fade" id="account-social-links">
		  <div class="card-body pb-2">
			<img src="<?php 
			 $con=mysqli_connect('localhost','root');
			  mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="select certificate from login where username='$username'"; 
				 $result=mysqli_query($con,$q);
				 while ($res=mysqli_fetch_array($result))
				 {
					 echo $res['certificate'];
				 }?>" width="500" height="500"></img>
			<form>
			    
				
				<input type="file" style="" name='file'>
				<?php
                  if(isset ($_REQUEST["submit1"]))
				  {
					$var=$_REQUEST['file'];
					$con=mysqli_connect('localhost','root');
				    mysqli_select_db($con,'projectdatabase');
				 $username=$_SESSION['username'];
				 $q="UPDATE `login` SET `certificate`='$var' WHERE  username='$username'";
				 $result=mysqli_query($con,$q);
				  }


				?>
			  &nbsp;
			  
			  <button type="submit" name="submit1" style="background-color:green;" action="">Submit</button>
				</from>




		  </div>
		</div>
		<div class="tab-pane fade" id="account-connections">
		  <div class="card-body">
			<button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
		  </div>
		  <hr class="border-light m-0">
		  <div class="card-body">
			<h5 class="mb-2">
			  <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
			  <i class="ion ion-logo-google text-google"></i>
			  You are connected to Google:
			</h5>
			nmaxwell@mail.com
		  </div>
		  <hr class="border-light m-0">
		  <div class="card-body">
			<button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
		  </div>
		  <hr class="border-light m-0">
		  <div class="card-body">
			<button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
		  </div>
		</div>
		<div class="tab-pane fade" id="account-notifications">
		  <div class="card-body pb-2">

			<h6 class="mb-4">Activity</h6>

			<div class="form-group">
			  <label class="switcher">
				<input type="checkbox" class="switcher-input" checked="">
				<span class="switcher-indicator">
				  <span class="switcher-yes"></span>
				  <span class="switcher-no"></span>
				</span>
				<span class="switcher-label">Email me when someone comments on my article</span>
			  </label>
			</div>
			<div class="form-group">
			  <label class="switcher">
				<input type="checkbox" class="switcher-input" checked="">
				<span class="switcher-indicator">
				  <span class="switcher-yes"></span>
				  <span class="switcher-no"></span>
				</span>
				<span class="switcher-label">Email me when someone answers on my forum thread</span>
			  </label>
			</div>
			<div class="form-group">
			  <label class="switcher">
				<input type="checkbox" class="switcher-input">
				<span class="switcher-indicator">
				  <span class="switcher-yes"></span>
				  <span class="switcher-no"></span>
				</span>
				<span class="switcher-label">Email me when someone follows me</span>
			  </label>
			</div>
		  </div>
		  <hr class="border-light m-0">
		  <div class="card-body pb-2">

			<h6 class="mb-4">Application</h6>

			<div class="form-group">
			  <label class="switcher">
				<input type="checkbox" class="switcher-input" checked="">
				<span class="switcher-indicator">
				  <span class="switcher-yes"></span>
				  <span class="switcher-no"></span>
				</span>
				<span class="switcher-label">News and announcements</span>
			  </label>
			</div>
			<div class="form-group">
			  <label class="switcher">
				<input type="checkbox" class="switcher-input">
				<span class="switcher-indicator">
				  <span class="switcher-yes"></span>
				  <span class="switcher-no"></span>
				</span>
				<span class="switcher-label">Weekly product updates</span>
			  </label>
			</div>
			<div class="form-group">
			  <label class="switcher">
				<input type="checkbox" class="switcher-input" checked="">
				<span class="switcher-indicator">
				  <span class="switcher-yes"></span>
				  <span class="switcher-no"></span>
				</span>
				<span class="switcher-label">Weekly blog digest</span>
			  </label>
			</div>

		  </div>
		</div>
	  </div>
	</div>
  </div>
</div>
<div class="text-right mt-3">
<form method='post'>
	<?php
      if(isset ($_REQUEST["submit"]))
	  {
		$var=$_REQUEST['username'];
		$var2=$_REQUEST['name'];
		$var3=$_REQUEST['email'];
		$var4=$_REQUEST['birthdate'];
		$var5=$_REQUEST['phone'];
		
		
		
		$main=$_SESSION['username'];
        
		$sql4 = "update login set username='$main', name='$var2', email='$var3', birthdate='$var4', phonenumber='$var5'  where username='$var'";
		mysqli_query($con,$sql4);
	
		$pass=$_REQUEST['password'];
		$var2=$_REQUEST['passwordnew'];

		if(empty($var2))
		{
            $sql4 = "update login set password='$pass'  where username='$var'";
		    mysqli_query($con,$sql4);
		}
		else
		{
            $sql4 = "update login set password='$var2'  where username='$var'";
		    mysqli_query($con,$sql4);
		}
		
	  }
	

	?>

  <input type="submit" class="btn btn-primary" value="UPDATE" name="submit">
  </form>
</div>

  </form>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
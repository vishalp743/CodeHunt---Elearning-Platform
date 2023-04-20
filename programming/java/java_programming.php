<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeHunt</title>
	<link rel="icon" type="image/x-icon" href="../logo.png">
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library --->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

         .sidemenu
		 {
            overflow-y:scroll;
		 }

		#mainpagecontent
		{
			background-color: white;
			margin-top: 80px;
			height: auto;
			
			border-color: black;


		}
		.content
		{
			color: black !important;
		}
		::-webkit-scrollbar {
  width: 20px;
}

/* Track */
.sidemenu::-webkit-scrollbar-track {
  box-shadow: inset 0 0 0px grey; 
  border-radius: 10px;
  scrollbar-width:2px;
}

.sidemenu::-webkit-scrollbar{
  width:5px;
}
 
/* Handle */
.sidemenu::-webkit-scrollbar-thumb {
  background: #142b3d; 
  border-radius: 0px;
  scrollbar-width:thin;
}

/* Handle on hover */
.sidemenu::-webkit-scrollbar-thumb:hover {
  background: #142b3d; 
  scrollbar-width:thin;
}
	</style>
</head>
<body>
		<!------Navigation bar ends ---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;font-family: Brush Script MT, Brush Script Std, cursive;" id="myhead">CodeHunt</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
				<li> <a href="../../index.php">Home</a></li>
					<li> <a href="">Our Service</a></li>
					<li> <a href="../../index.php" id="#work">Works</a></li>
					<li> <a href="../../index.php">Team</a></li>
					<li> <a href="../../index.php">FAQs</a></li>
					<li id="logout" style="color:red;"><a href="../../logout.php">LogOut</a></li>
					<li> <a href="../../Profile.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

		<!------Navigation bar ends ---->


		 <!------Side bar start---->
		 
	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			
			<li style="background-color :red; width: 252px;"><a>Home</a></li>

<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');
$course_name=$_GET['course_name'];

//$_GET['course_name'];
// unset($_GET['course_name']);
$q="select * from courses where course_name='$course_name'";
$result=mysqli_query($con,$q);
while ($res=mysqli_fetch_array($result))
 {
  ?>
		
  			<form action="fetch_main_content.php" method="POST">

  			<input type="hidden" name="txt1" value="<?php echo $res['id'] ?>">
			
			<button  style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 250px;height: 45px;"><?php echo $res['topic_name']; ?></li></button>
			
			</form>
			
			

<?php } ?>

		</ul>
	</div>
</dic>

		 <!------Side bar ends---->

 		<!------java main content starts ---->

	<div id="mainpagecontent" class="shadow">	
 </br>
		<center><h1 style="color:Red"><b><marquee>Welcome To <?php echo $_GET['course_name']  ?> Tutorial</marquee><b></h1><center>
 		</div>

		 <div id="mainpagecontent" class="shadow">
		    <div class="content">
			<p>
			<?php

			if (isset($_SESSION['xyz']))
			 
			{
				echo $_SESSION['xyz'];
			}

			  ?>
			</p>
		
		</div>
			
		
	
	</div>
	<div id="mainpagecontent2" class="shadow">
		<div class="sub2">
			<div class="sub3">
	
			
			<?php 
					$con=mysqli_connect('localhost','root');
					mysqli_select_db($con,'projectdatabase');
					$course_name=$_GET['course_name'];

					//$_GET['course_name'];
					// unset($_GET['course_name']);
					$q="select url from courses where course_name='$course_name'";
					$result=mysqli_query($con,$q);
					$res=mysqli_fetch_array($result)
					
					?>
			             <iframe id="myframe" src="<?php echo $res['url'] ?>" height="770px" width="715px" scrolling="no" frameBorder="0"></iframe>

					 <?php  ?>
		    </div>
		</div>
	
		</div>


 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>
<?php 
  
include("class/users.php");        //including the users class
$profile=new users;               // craeting the object of user class so that we can call show_user_profile() method 
extract($_POST);
$profile->show_users_profile($_SESSION['username']);  //calling the show_users profile() method of users class using users class object referenc


 ?>


<!DOCTYPE html>
<html>
<head>
  <title>CodeHunt</title>
  <link rel="shortcut icon" type="text/css" href="../img/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
</head>

<style type="text/css">
  .li1{
     float: right !important;
  }
  .topnav {
  overflow: hidden;
  background-color: #111e2d;
  height: 90px;
}

.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 16px 18px;
  text-transform: uppercase;
  text-decoration: none;
  font-size: 17px;
  margin-right: 28px;
  margin-top:12px;
	font-weight: bold;
  transition: all 0.5s ease-in;
}

.topnav h1 {
  float: left;
  color: white;
  text-align: center;
  padding: 16px 18px;
  text-decoration: none;
  font-size: 35px;
  margin-top:3px;
	font-weight: bold;
  margin-left: 100px;
}

.topnav a:hover {
  color: deepskyblue !important;
  text-decoration:none;
}

.topnav a.active {
  background: deepskyblue !important;
  color: white;
  border-radius: 20px;
  border: 2px solid black;

}
.topnav .heading
{
  float: left;
  margin-left:50px;
  font-size: 25px;
  color : white;
  
}



</style>


<body style="">

<div class="topnav">
<h1 style="font-family: lobster, cursive">CodeHunt</h1> 
<a href="Profile.php"class="active" ><?php echo $_SESSION['username'];   ?></a>
<a href="#contact">LogOut </a> 
<a href="#contact">Team </a>
<a href="#contact">Work </a>
  <a href="#contact">Our Service </a>
  <a class="" href="../index.php">Home</a>
  
</div>
  <!-- tab section start -->

  <div class="container mt-4 col-md-10 position-relative">
    <br/>
    <center><h1 style="font-family: 'Catamaran', sans-serif;">Welcome <?php echo $_SESSION['username']; ?>, Lets start Examination</h1></center>
   <hr>
   <div class="tab-content">
     <div class="tab-pane active " id="menu1" >
    
     <center><button type="button" class="btn btn-success mt-5" href="#myid" data-toggle="collapse">Courses</button></center>

     <!-- dropdown list starts -->

     <div class="col-sm-6 mt-3">
      
      <div class="form-group">
    <h1 style="color:Red;"><b><u>Select Course</u></b></h1>
    <br/>
    
    
      <?php 
       $profile->show_courses();                                 //calling show_courses() method of users class
       foreach ($profile->cat_data as $key => $course) 
       {
         
 ?>

      <option value="<?php echo $course['id'] ;?>"><?php $samp=$course['cat_name']; echo "1: $samp" ?></option> 
      <a href='question_show.php?samp=<?php  echo $samp; ?>'>Start Exam</a>

      <?php
     
}

      ?> 
  </div>
</div>
</div>


</body>
</html>







<!DOCTYPE html>
<html lang="en">
<head>
  <title>Document</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php

session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');

$score = print_r($_GET['qid'],true);
$username= $_SESSION['username'];

$q="select quiz_total,quiz_id from login where username='$username'";
$query=mysqli_query($con,$q);


if ($result1 = $con->query($q)) {    
    while ($row1 = $result1->fetch_object()) {
       $score_11 = $row1->quiz_id;
       $score_12 = $row1->quiz_total;
   }
   $result1->close();
}

//quiz1
if($score == 0)
{
  	if ($score_11 == 0 && $score_12 >= 0) 
	{

  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_1.php");
  }
        
           
  elseif($score_11 >= 0)
  {
    echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
  }

    else
    {
       echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
    }
}
//quiz2
if($score == 1)
{
  	if ($score_11 == 1 && $score_12 >= 3) 
	{

  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_2.php");
  }
        
           
  elseif($score_11 >= 2)
  {
    echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
  }

    else
    {
       echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
    }
}

if($score == 2)
{
  	if ($score_11 == 2 && $score_12 >= 6) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_3.php");
  		
  	}
    elseif($score_11 >= 3)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}
 
if($score == 3)
{
  	if ($score_11 == 3 && $score_12 >= 9) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_4.php");
  		
  	}
    elseif($score_11 >= 4)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}

if($score == 4)
{
  	if ($score_11 == 4 && $score_12 >= 12) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_5.php");
  		
  	}
    elseif($score_11 >= 5)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}

if($score == 5)
{
  	if ($score_11 == 5 && $score_12 >= 15) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_6.php");
  		
  	}
    elseif($score_11 >= 6)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}

if($score == 6)
{
  	if ($score_11 == 6 && $score_12 >= 18) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_7.php");
  		
  	}
    elseif($score_11 >= 7)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}

if($score == 7)
{
  	if ($score_11 == 7 && $score_12 >= 21) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_8.php");
  		
  	}
    elseif($score_11 >= 8)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}

if($score == 8)
{
  	if ($score_11 == 8 && $score_12 >= 24) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_9.php");
  		
  	}
    elseif($score_11 >= 9)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}

if($score == 9)
{
  	if ($score_11 == 9 && $score_12 >= 27) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_10.php");
  		
  	}
    elseif($score_11 >= 10)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}
if($score == 10)
{
  	if ($score_11 == 10 && $score_12 >= 30) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_10.php");
  		
  	}
    elseif($score_11 >= 11)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}
if($score == 11)
{
  	if ($score_11 == 11 && $score_12 >= 33) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_10.php");
  		
  	}
    elseif($score_11 >= 12)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}
if($score == 12)
{
  	if ($score_11 == 12 && $score_12 >= 36) 
  	{
  		header("Location: http://localhost:8080/Project1/programming/java/qq/java_10.php");
  		
  	}
    elseif($score_11 >= 13)
    {
      echo '<script>swal("Wait....!", "Sorry, You have completed this quiz... Proceed for further quiz!!!", "warning");</script>';
    }
      else
      {
        echo '<script>swal("Error", "Please Complete Previous Quiz", "error");</script>';
      }
}


?>
</body>
</html>
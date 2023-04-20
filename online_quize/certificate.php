<?php
session_start();
include "../admin/includes/navbar1.php";
$username=$_SESSION['username'];
?>
<html>
    <head>
    <script src=
"https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js">
    </script>
    <link rel="icon" href="logo.png" type="image/x-icon">
        <title>CodeHunt</title>
        <style type='text/css'>
            body
            {
                background-color: whitesmoke;
            }
            .maincon {
                color: black;
                font-family: Georgia, serif;
                font-size: 24px;
                text-align: center;
                display: flex;
                 align-items: center;
                justify-content: center;
                margin-top:40px;
                
            }
            .container {
                border: 20px solid #1A5CA5;
                width: 750px;
                height: 580px;
                display: table-cell;
                vertical-align: middle;
                background-image: url("cerback(2).jpg");
                background-repeat:no-repeat;
                background-size:750px 650px;
            }
            .logo {
              margin-top:5px;
            color: #A8FC58;
            }

            .marquee {
                color: red;
                font-size: 48px;
                margin: 20px;
            }
            .assignment {
                margin: 20px;
                color:black;
            }
            .person {
                border-bottom: 2px solid black;
                font-size: 32px;
                font-style: italic;
                margin: 20px auto;
                width: 400px;
                color:black;
            }
            .reason {
                margin: 20px;
                color:black;
            }
            .logo1
            {
                margin-top:15px;
                align-content: center;
            }
            body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;}
    .printbtn
 {
     
    display: inline-block;
                    outline: none;
                    cursor: pointer;
                    font-size: 16px;
                    line-height: 20px;
                    font-weight: 600;
                    border-radius: 8px;
                    border: none;
                    box-shadow : 0 10px 40px rgba(255, 122, 0, 0.4);
                    background-color: red;
                    color: #fff;
                margin-left:46%;}

    
</style>
        </style>
    </head>
    <body>
        
        <div class="maincon" id="maincon">
        <div class="container" id="container">
        <?php  
        $username=$_SESSION['username']; 
        $score=$_REQUEST['utfcahrencode8'];
    
if($score >= 10)
{
    $score_final='A+';
    
}
elseif($score <10 && $score >= 8)
{
    $score_final='A';
    
}
elseif($score <8 && $score >= 6)
{
    $score_final='B+';
   
}
elseif($score <6 && $score >= 4)
{
    $score_final='B';
 
}
elseif($score <4 && $score >= 2)
{
    $score_final='C';

}
else
{
    $score_final='D';
}

        ?>
            <div class="logo1">
            <img src="logo.png" alt="CodeHunt" width="125" height="125"> 
            </div>
            <div class="logo">
                <h1>CodeHunt</h1>  
            </div>

            <div class="marquee">
                Certificate of Completion
            </div>

            <div class="assignment">
                This certificate is presented to
            </div>

            <div class="person">
              <?php
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
            </div>

            <div class="reason">
                For completing all the tutorials of language course of<br/>
                <b><u><?php echo $_REQUEST['ahcbsgchabc'] ;?></u></b>
        </br>
        <h3>With <b style="color:red;"><?php echo $score_final ?></b> Grade</h3>
            </div>
        </div>
        
        </div>
        </br>

        <div id="output" style="margin-left: 27%; margin-top:0;"></div>
        <button name="printbtn" class="printbtn" onclick="takeshot()">
            Take Screenshot
        </button>
       
        <script type="text/javascript">
  
                function takeshot() {
                    let div =
                        document.getElementById('container');
                    
                    // Use the html2canvas
                    // function to take a screenshot
                    // and append it
                    // to the output div
                    html2canvas(div).then(
                        function (canvas) 
                        {
                            
                            document.getElementById('output').appendChild(canvas);
                         
                        })
                }
        </script>
    </body>
</html>












<?php
$subject=$_REQUEST['ahcbsgchabc'];

//java certificate
if($subject == 'JAVA'){
    $q3="select quiz_id from login where username ='$username'";
    $value1 = mysqli_query($con,$q3);
    if ($result1 = $con->query($q3)) {    
        while ($row1 = $result1->fetch_object()) {
           $flag = $row1->quiz_id;
       }
       $result1->close();
    }
    $num=1;
    $val1= ($flag) +$num;
  

    $q2="update login set quiz_id='$val1' where username ='$username'";
    $query=mysqli_query($con,$q2);}

//pythoen certificate
if($subject == 'Python'){
    $q3="select quiz_id_p from login where username ='$username'";
    $value1 = mysqli_query($con,$q3);
    if ($result1 = $con->query($q3)) {    
        while ($row1 = $result1->fetch_object()) {
           $flag = $row1->quiz_id_p;
       }
       $result1->close();
    }
    $num=1;
    $val1= ($flag) +$num;
    $q2="update login set quiz_id_p='$val1' where username ='$username'";
    $query=mysqli_query($con,$q2);}
?>
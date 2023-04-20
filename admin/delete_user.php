
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'projectdatabase');
$id=$_GET["id"];
mysqli_query($con,"delete from login where id=$id");
?>

<script type="text/javascript">
    window.location="admin_main.php";
</script>
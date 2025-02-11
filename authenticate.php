<style >  .table{  
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">
<?php

include 'connect.php' ;
include 'head2.php';
$email = $_POST['email'];
$password = $_POST['password'];
$sql_userdatabase = "Select * from userdatabase where email = '$email' and password='$password' ";
$result_userdatabase = mysqli_query($connect, $sql_userdatabase);
if(mysqli_num_rows($result_userdatabase) <= 0)
{
		echo "<center><h1><b>มีข้อผิดพลาดเกิดขึ้น กรุณาเข้าสู่ระบบอีกครั้ง<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">เข้าสู่ระบบ ! &nbsp&nbspอีกครั้ง</span></button></a></td></tr></table></center>';
}
else
{
	
	header("location:home.php");
	$row_userdatabase = mysqli_fetch_array($result_userdatabase);
	session_start();
	$_SESSION['email']=$email;
	$_SESSION['name']=$row_userdatabase['Name'];
	$_SESSION['userid']=$row_userdatabase['UserID'];
	$_SESSION['Gender']=$row_userdatabase['Gender'];
	$_SESSION['dob']=$row_userdatabase['DoB'];
    $_SESSION['phone']=$row_userdatabase['Phone'];



	$_SESSION['log']= '1' ;
}
?>

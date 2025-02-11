<! Script to add newly registered people in to the Database -->

<style >  .table{ 
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="index.css">


<?php
include 'connect.php';
include 'head2.php';

$name = $_POST['name'];
$email = $_POST['email'];
$dob  = $_POST['dob'];
$password = $_POST['password'];
$Gender = $_POST['Gender'];
$Phone = $_POST['phone'];

$sql_userdatabase="Insert into userdatabase(Name ,Email , Gender, password , dob , Phone) values ('$name' , '$email' , '$Gender', '$password', '$dob', '$Phone')";

if(mysqli_query($connect, $sql_userdatabase) == true)
{
	echo "<center><h1><b>ลงทะเบียนเรียบร้อยแล้ว<b> </h1></center><br><br>";
	echo '<center><table><tr><td><A href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">เข้าสู่ระบบ </span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><b>ลงทะเบียนไม่สำเร็จ โปรดลองอีกครั้ง<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">ลงทะเบียนอีกครั้ง</span></button></a></td></tr></table></center>';}

?>

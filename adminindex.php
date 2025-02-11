<?php
include 'connect.php';

?>
<html>
<head>
 <link rel='stylesheet' href='index.css'>
<title>Yanida-Ticket</title>
</head>
<div class="form">
<div><center><img src="https://img.icons8.com/bubbles/280/000000/admin-settings-male.png"/></div>
<br>
<br>
<body style="background-color: F5F1F0;">
	<h1><center><b>เข้าสู่ระบบแอดมิน</center></b></h1>

<form method='post' action ='adminauthenticate.php'  >
<div>
<table align="center" class="table">
<tr><td><h2><b>อีเมล์ : </b></h2></td> <td><input type="email" name="email" maxlength='50'></td></tr>
<tr><td><h2><b> รหัสผ่าน : </b></h2></td> <td><input type="password" name="password" maxlength='50'></td></td></tr>
<tr><td colspan='2'><center><button type='Submit' style="background-color:black; border-color:black" name='login_submit' ><b>เข้าสู่ระบบ </b> </button></center></td></tr></table>


</table>
</form>




</div>
<br>
</div>

<center><h3><a href='sindex.php' style="color: black"><b>เข้าสู่ระบบ ผู้ใช้งาน ?</b></a></h3></center>

</body >

</html>

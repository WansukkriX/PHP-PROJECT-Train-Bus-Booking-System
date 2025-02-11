<?php     
include 'connect.php';                           
?>
<html>
<head>
<link rel='stylesheet' href='index.css'>
<title> Registration Page </title>
</head>
<div class="form">
<form method='post' action ='register_insert.php' >
<div><center><img src="https://img.icons8.com/bubbles/250/000000/add-user-male.png"/></center></div>

	<h2><center><b>ลงทะเบียนผู้ใช้</center></b></h2>

<body >
<table align="center" class="table">
<tr><td><h3>ชื่อ : </h3></td> <td colspan='2'><input type="Text" name="name" maxlength='50' required></td></tr>
<tr><td><h3>อีเมล์ : </h3></td> <td colspan='2'><input type="email" name="email" maxlength='50' required></td></tr>
<tr><td><h3>เพศ :</h3></td><td><input type="Radio" name="Gender" value="M">ผู้ชาย</td><td><input type="Radio" name="Gender" value="F" required>ผู้หญิง</td></tr>
<tr><td><h3>วันเกิด :</h3></td><td colspan='2'><input type="date" name="dob" required></td></tr>
<tr><td><h3>รหัสผ่าน : </h3></td> <td  colspan='2'><input type="password" name="password" maxlength='50' required></td></td></tr>
<tr><td><h3>เบอร์โทร.</h3></td> <td  colspan='2'><input type="tel"  name="phone"  maxlength='10' required></td></td></tr>
<tr><td colspan='3'><center><button type='Submit'  style="background-color:black ; border-color:black" name='register_submit' required >ยืนยัน</Button></center></td></tr>
</table>
</form>
<div class="tt"></div>

</div>
<div class="center" align="center" >
<h3><a href='sindex.php' style="color: black">เข้าสู่ระบบ</a></h3>
</div>

</body>
</html>
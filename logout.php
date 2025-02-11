<?php


session_start();
?>
<html>
<head>
<link rel='stylesheet' href='index.css'>
<link rel="shortcut icon" href="logofig.jpg" />
<style>
/* CSS for centering content */
.center-content {
  text-align: center;
  margin-top: 100px; /* ย้ายเนื้อหาลงมากกว่าเดิม */
  font-size:30px;
     padding:20px;
}

a{
     font-size:22px;
     padding:20px;
}
/* CSS for button */


.button {
     font-size:22px;
     padding:20px;
  background-color: orange;
  border-color: black;
  color: white;
  padding: 30px 35px;
  font-size: 25px;
  text-decoration: none;
  border-radius: 5px;
}

.button:hover {
  background-color: #333;
}
</style>
</head>
<body style="background-color: #F5F1F0;">
<div class="center-content">
<?php
session_destroy();
echo '<h2>ขอขอบคุณที่ใช้แอปพลิเคชั่น</h2><br>';
echo '<a href="index.php" class="button">เข้าสู่ระบบ&nbsp;อีกครั้ง</a>';
?>
</div>
</body>
</html>

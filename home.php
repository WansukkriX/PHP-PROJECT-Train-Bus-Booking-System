<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>




<html>
<head>
  <style>
    body{
      background-color: #f2f2f2;
    }
  </style>
</head>
<link rel='stylesheet' href='index.css'>
<body>
  

<br>
  <h1   text-transform: capitalize;><center><b><img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/> ยินดีต้อนรับ  <?php  echo " ". $_SESSION['name'] ."" ?> เข้าสู่ ระบบรับจองตั๋ว <img src="https://img.icons8.com/clouds/90/000000/add-bookmark.png"/></center></b></h1>

    <div class="container">
  <div class="box-con">
    <div class="train">
      <a href="book.php">
        <img src="img/train.jpg" alt="">
        <span>จองตั๋วรถไฟ</span>
      </a>
    </div>
    <div class="bus">
      <a href="bookbus.php">
        <img src="img/bus.jpg" alt="">
        <span>จองตั๋วรถบัส</span>
      </a>
    </div>
  </div>
</div>

<br>
<?php include 'footer.php';
?> 
</body>
</html>
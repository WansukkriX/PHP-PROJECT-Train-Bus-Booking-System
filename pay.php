<?php include 'connect.php';  session_start(); if ($_SESSION['log'] == '') { header("location:sindex.php"); } ?>
<!DOCTYPE html>
<html>
<head>
  <title>Payment Page</title>

  <link rel="shortcut icon" href="logofig.jpg" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans+Thai:wght@100..900&display=swap');
  h1{
  font-family: "Noto Sans Thai", sans-serif;
 }
    body {
      font-family: "Noto Sans Thai", sans-serif;
      background-color: #F5F1F0;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      margin-top:30px;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
      font-size:27px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    label {
      font-weight: bold;
      font-size:20px;
    }
    input[type="text"],
    input[type="file"] {
      width: 100%;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size:20px;

    }
    button[type="submit"] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size:20px;
      padding:20px;
    }
    button[type="submit"]:hover {
      background-color: #555;

    }


  </style>
</head>
<body>
  <div class="container">
    <h2><b>รายละเอียดการชำระเงิน :</b></h2>
    <form method="post" action="payaction.php" enctype="multipart/form-data">
     <div class="form-group">
   
        <img src="pay.jpg" alt="QR Code" class="img-fluid">
      </div> 
      <div class="form-group">
        <label for="cno">เลขประจำตัวประชาชน:</label>
        <input type="text" name="cno" placeholder="1-2222-33333-44-5" maxlength="50" required>
      </div>
      <div class="form-group">
        <label for="name">ชื่อผู้จอง:</label>
        <input type="text" name="name" placeholder="Prajwal N. Sutar" maxlength="50" required>
      </div>
      <div class="form-group">
        <label for="bank_slip">อัปโหลดสลิปจ่ายเงิน:</label>
        <input type="file" id="bank_slip" name="bank_slip" accept="image/*" required>
      </div>
      <div class="text-center">
        <button type="submit" name="register_submit">ยืนยันการชำระเงิน</button>
      </div>
    </form>
  </div>
 <br>
 <br>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>รายละเอียดโปรไฟล์ผู้ใช้</title>
  <style>
    /* ปรับแต่งภาพรวมของหน้าเว็บ */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      color: #333;
      line-height: 1.6;
    }

    /* ปรับแต่งหัวข้อหลัก */
    h2 {
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: #444;
      margin-bottom: 30px;
    }

    h2 img {
      vertical-align: middle;
      margin-right: 10px;
    }

    /* ปรับแต่งตาราง */
    table {
	text-align:center;
      width: 60%;
     margin:20px;
      border-collapse: collapse;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
	 font-size:20px;
	 font-weight:400;
    }

    th {
	
	
      color: #black;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e6e6e6;
    }

    /* ปรับแต่งลิงค์ */
    a {
      color: #0077b6;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    /* ปรับแต่งปุ่ม */
    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #0077b6;
      color: #fff;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #005b8d;
    }
  </style>
</head>
<body>
  <?php
    include 'connect.php';
    session_start();
    if ($_SESSION['log'] == '') {
      header("location:sindex.php");
    }
    include 'header.php';
  ?>

  <h2><center><img src="https://img.icons8.com/dusk/50/000000/checked-user-male.png"/><b>รายละเอียดโปรไฟล์ผู้ใช้</b></center></h2>

  <table class="table table-striped">
    <tr>
      <th>ชื่อ</th>
      <td><?php echo $_SESSION['name'] ?></td>
    </tr>
    <tr>
      <th>อีเมล์</th>
      <td><?php echo $_SESSION['email'] ?></td>
    </tr>
    <tr>
      <th>ไอดีผู้ใช้งาน</th>
      <td><?php echo $_SESSION['userid'] ?></td>
    </tr>
    <tr>
      <th>เพศ</th>
      <td><?php echo $_SESSION['Gender'] ?></td>
    </tr>
    <tr>
      <th>วันเกิด</th>
      <td><?php echo $_SESSION['dob'] ?></td>
    </tr>
    <tr>
      <th>เบอร์โทร</th>
      <td><?php echo $_SESSION['phone'] ?></td>
    </tr>
  </table>

</body>
</html>
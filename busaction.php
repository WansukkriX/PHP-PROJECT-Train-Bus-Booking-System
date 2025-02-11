<?php


include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}

include 'header.php';
$name = $_SESSION['name'];
$source = $_POST['source'];
$dest = $_POST['dest'];

$no = $_POST['number'];

if ($source == $dest)
{
  echo"<h1><center>เลือกสถานีต้นทางและสถานีปลายทางเหมือนกัน กรุณาเลือกใหม่  </center></h1><br><br>";
  echo'<center>

<td><form action="bookBUS.php"><button style="background-color: black; padding: 25px 70px; type="submit"; align=center;"><span style=color:white;><h3>กลับ</h3></span></a></td></button></form><br><br>';
}
else{
$sql_price="SELECT * FROM `pricebus` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"]*$no  ;
$busnum = $row["Bus_No."]  ;

echo "<h1><center><b>ตรวจสอบเส้นทางและดำเนินการชำระเงิน :</center></b></h1><br>";
echo "<div style='width: 700px; border: 1px solid #ccc; border-radius: 5px; padding: 20px; text-align: center; margin: 0 auto;'>";
echo "<h2>คุณ $name</h2>";
echo "<h2>ได้ทำการจองรถโดยสาร</h2>";
echo "<h2>จาก $source ถึง $dest</h2>";   
echo "<h2>ค่าโดยสารเป็นเงินทั้งสิ้น $final บาท</h2><br><br>";
echo "</div><br><br>";
echo "<form action='buspay.php' method='post'>";
echo "<div style='text-align: center;'>";
echo "<button class='yellow-button' type='submit'>";
echo "<h4>แจ้งโอนเงินพร้อมสลิป</h4></button>";
echo "</div></form>";
echo "<br>";
echo "<br>";
echo "<form action='bookbus.php' method='post'>";
echo "<div style='text-align: center;'>";
echo "<button class='black-button' type='submit'>";
echo "<h4>กลับไปยังหน้าจองตั๋ว</h4></button>";
echo "</div></form>";
 }
$_SESSION['final']= $final ;
$_SESSION['source']=$source;
$_SESSION['dest']=$dest;
$_SESSION['busnum']=$busnum;
$_SESSION['NoOfpass']=$no;
}
    
?>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        margin-top:30px;
        padding: 30px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .info-box {
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        margin-bottom: 30px;
        background-color: #f8f9fa;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    .yellow-button {
        background-color: #ffc107;
        color: #333;
    }

    .yellow-button:hover {
        background-color: #e0a800;
    }

    .black-button {
        background-color: #333;
        color: #fff;
    }

    .black-button:hover {
        background-color: #555;
    }
</style>
<?php
include 'connect.php';
session_start();
$name = $_SESSION['name'];
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}
include 'header.php';
$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class'];
$no = $_POST['number'];
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

<div class="container">
    <?php
    if ($source == $dest) {
        echo "<h1><center>เลือกสถานีต้นทางและสถานีปลายทางเหมือนกัน กรุณาเลือกใหม่</center></h1><br><br>";
        echo '<center>';
    } else {
        echo "<h1><b>ตรวจสอบเส้นทางและดำเนินการชำระเงิน :</b></h1>";
        $sql_price = "SELECT * FROM `price` WHERE `dest` LIKE '$dest' AND `class` = '$class'";
        $result = $connect->query($sql_price);
        while ($row = $result->fetch_assoc()) {
            $final = $row["Price"];
            $final = $final * $no;
            echo "<div class='info-box'>";
            echo "<h2>คุณ $name</h2>";
            echo "<h2>ได้จองชั้น " . $class . "</h2>";
            echo "<h2>สถานีต้นทาง " . $source . " สถานีปลายทาง " . $dest . "</h2>";
            echo "<h2>ค่าโดยสารเป็นเงินทั้งสิ้น " . $final . " บาท</h2>";
            echo "</div>";
            echo "<form action='pay.php' method='post'>";
            echo "<div style='text-align: center;'>";
            echo "<button class='yellow-button' type='submit'><h4>แจ้งโอนเงินพร้อมสลิป</h4></button>";
            echo "</div></form>";
            echo "<br>";
        }
        $_SESSION['final'] = $final;
        $_SESSION['source'] = $source;
        $_SESSION['dest'] = $dest;
        $_SESSION['Class'] = $class;
        $_SESSION['NoOfpass'] = $no;
    }
    ?>
    <div style="text-align: center;">
        <form action="book.php" method="post">
            <button class="black-button" type="submit"><h4>กลับไปยังหน้าจองตั๋ว</h4></button>
        </form>
    </div>
</div>


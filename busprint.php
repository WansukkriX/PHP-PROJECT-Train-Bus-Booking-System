<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans+Thai:wght@100..900&display=swap');

        body {
            font-family: "Noto Sans Thai", sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .ticket {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .ticket-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .ticket-header h1 {
            margin: 0;
            font-size: 28px;
            color: #333;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin: 0px 0;
            color: #555;
            font-size: 23px;
        }

        .ticket-header img {
            width: 50px;
            height: 50px;
        }

        .ticket-content {
            padding: 20px;
            border-top: 2px dashed #333;
            border-bottom: 2px dashed #333;
        }

        .ticket-details {
            margin-bottom: 15px;
        }

        .div {
            margin: 5px 0;
            color: #555;
            font-size: 20px;
            font-weight:bold;
       
        }

        p {
            margin: 0;
            color: #333;
            font-size: 18px;
        }
       
    

        .ticket-footer {
            text-align: center;
            margin-top: 20px;
        }

        .ticket-footer p {
            margin: 0;
            color: #777;
            font-size: 18px;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include 'connect.php';
        $pid = $_GET['pid'];
        $sel = "SELECT * FROM `bustransactions` WHERE `T_No.` =$pid";
        $rs = $connect->query($sel);
        while ($row = $rs->fetch_assoc()) {
        ?>
        <div class="ticket">
            <div class="ticket-header">
                <img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png" alt="Icon">
                <h1>ตั๋วรถบัส</h1>
                <img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png" alt="Icon">
            </div>
            <div class="ticket-content">
                <div class="ticket-details">
                    <div class="div">ไอดีการจอง  </div><span><?php echo $row['T_No.'] ?></span>
                </div>
                <div class="ticket-details">
                <h2>เส้นทาง</h2>
                   
                <p>  <?php echo $row['source'] ?> &rarr; <?php echo $row['dest'] ?></p>
                </div>
                <div class="ticket-details">
                    <h2>ชื่อ</h2>
                    <p><?php echo $row['Name'] ?></p>
        </div> 
                <div class="ticket-details">
                    <h2>วันที่จอง </h2>
                    <p><?php echo $row['Date'] ?></p>
                </div>
                <div class="ticket-details">
                  
                   <h2> หมายเลขรถโดยสาร: </h2>
                   <p><?php echo $row['Bus_No'] ?></p>
                </div>
                <div class="ticket-details">
                  <h2>จำนวนผู้โดยสาร: </h2>
                  <p><?php echo $row['NoOfpass'] ?></p>
                </div>
                <div class="ticket-details">
                    <h2>จำนวน:</h2>
                    <p><?php echo $row['Amt'] ?> บาท</p>
                    

                </div>
                <div class="ticket-details">
                    <p>ขอให้มีความสุขและเดินทางปลอดภัยครับ</p>
                </div>
            </div>
            <div class="ticket-footer">
                <p>ขอบคุณที่ใช้บริการ</p>
            </div>
        </div>
        <?php } ?>
    </div>
</body>
</html>
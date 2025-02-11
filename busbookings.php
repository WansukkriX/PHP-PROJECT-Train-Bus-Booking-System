<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>

 
<style>
        body {
            font-family: "Noto Sans Thai", sans-serif;
            background-color: #F5F1F0;
        }
        
        .container {
            
            margin: 30px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 32px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
        }
        
        h2 img {
            vertical-align: middle;
            margin: 0 10px;
        }
        img{
            width:70px;
        }
        
        table.dataTable {
            width: 100%;
            margin: 0 auto;
            clear: both;
            border-collapse: separate;
            border-spacing: 0;
        }
        
        table.dataTable thead th {
            font-weight: bold;
            padding: 10px 18px;
            border-bottom: 1px solid #111;
            background-color: #333;
            color: #fff;
        }
        
        table.dataTable tfoot th {
            font-weight: bold;
            padding: 10px 18px 6px 18px;
            border-top: 1px solid #111;
        }
        
        table.dataTable td {
            padding: 10px;
            color:black;
            font-weight:300;
        }
        
        table.dataTable tr.even {
            background-color: #f2f2f2;
        }
        
        .btn-custom {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .delete{
            background-color:red;
        }
        .back:hover{
            color:#fff
        }
        .delete:hover{
            color:#fff;
            background-color:red;
        
        }
        
        .btn-custom:hover {
            background-color: #555;
            
        }
    </style>

<head>  
           <title>YANIDA-TICKET </title>  
            
      </head>  
      <body >  

      <div class="container">
        <h2><img src="https://img.icons8.com/nolan/64/database.png" alt="Database Icon" /> ข้อมูลการจองรถบัส <img src="https://img.icons8.com/ultraviolet/50/000000/bus.png" alt="Bus Icon" /></h2>
        <table id="database_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>วัน/เวลา</th>
                    <th>ไอดีการจอง</th>
                    <th>ชื่อ</th>
                    <th>สถานีต้นทาง</th>
                    <th>สถานีปลายทาง</th>
                    <th>เลขที่รถโดยสาร</th>
                    <th>จำนวนเงินที่ต้องชำระ</th>
                    <th>ชำระเงิน</th>
                    <th>รายละเอียด</th>
                    <th>ลบข้อมูล</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql_transactions = "SELECT * FROM `bustransactions` WHERE `email`='" . $_SESSION['email'] . "'";
                $result = $connect->query($sql_transactions);
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>
                        <td>' . $row["Date"] . '</td>
                        <td>' . $row["T_No."] . '</td>
                        <td>' . $row["Name"] . '</td>
                        <td>' . $row["source"] . '</td>
                        <td>' . $row["dest"] . '</td>
                        <td>' . $row["Bus_No"] . '</td>
                        <td>&nbsp&nbsp' . $row["Amt"] . ' บาท</td>
                        <td><img src="' . $row["bank_slip"] . '" alt="" class="img-fluid"></td>
                        <td><a href="busprint.php?pid=' . $row["T_No."] . '" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-print"></i> พิมพ์</a></td>
                        <td>
                            <form method="POST" action="delete_bustransaction.php">
                                <input type="hidden" name="bustransaction_id" value="' . $row["T_No."] . '">
                                <button type="submit" class="btn delete btn-danger btn-sm btn-custom"><i class="fas fa-trash-alt"></i> ลบ</button>
                            </form>
                        </td>
                    </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="text-center mt-4">
        <a href="mybookings.php" class="btn back btn-dark btn-custom"><i class="fas fa-arrow-left"></i> กลับ</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#database_table').DataTable({
                "order": [[1, "desc"]]
            });
        });
    </script>
</body>
</html>
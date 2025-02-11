<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:index.php");
}
include 'adminheader.php';
?>
<!DOCTYPE html>  
<html>  
<head>  
    <title>ผู้โดยสารรถบัส</title>  
    <link rel='stylesheet' href='index.css'>

    <style>
      #data td img {
            max-width: 200px; 
           max-height:100px;
        }


table#data {
    font-size:16px;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}

#data td, #data th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
    font-weight:
}

#data tr:nth-child(even){background-color: #f2f2f2}

#data th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: black;
    color: white;
}
.container1{
     margin:20px;
     background-color:#f3f2f2;
     border:1px solid gray;
     border-radius: 10px;
}

.table-responsive{
     margin:20px;
}

</style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
</head>  
<body>  
    
    <div class="container1">  
        <h1 align="center">ผู้โดยสารรถบัส</h1>  
   
        <div class="table-responsive">  
            <table id="data" class="table table-striped table-bordered">  
                <thead>  
                    <tr>  
                        <th>วัน/เวลา</th>
                        <th>ไอดีการจอง</th>
                        <th>ชื่อ</th>
                        <th>สถานีต้นทาง</th>
                        <th>สถานีปลายทาง</th>
                        <th>จ่ายเงิน</th>
                        <th>จำนวนเงินที่จ่าย</th>

                    </tr>  
                </thead>  
                <tbody>
                    <?php 
                    $result = mysqli_query($connect , "SELECT * FROM bustransactions");
                    while ($row = mysqli_fetch_assoc($result)): 
                    ?>
                    <tr>
                        <td><?php echo $row['Date']; ?></td>
                        <td><?php echo $row['T_No.']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['source']; ?></td>
                        <td><?php echo $row['dest']; ?></td>
                        <td><img src="<?php echo $row['bank_slip']; ?>" ></td>
                        <td><?php echo $row['Amt']; ?></td>
                    </tr>
                    <?php endwhile; ?>
                    
                </tbody>
  <td><a href='admin.php'><button style="background-color: black ; border-color:black "  ><span style="color:white">กลับ </span> </button></a></td>

            </table>  
        </div>  
    </div>  
</body>  
</html>  

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>  
$(document).ready(function(){  
    $('#data').DataTable({
        "order": [[ 1, "desc" ]]
    });
}); 
</script>
<table align='center'>
<tr>
 </tr>
 <br>


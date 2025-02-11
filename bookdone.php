<?php
include 'connect.php' ;


session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<style>
	*{
	
	
	}
	.table {
		font-size:22px;
    width: 80%; /* กำหนดความกว้างของตาราง */
    margin: auto; /* จัดตำแหน่งตารางกลางหน้า */
    border-collapse: collapse; /* ยุบเส้นขอบของเซลล์ตาราง */
}
th{
color:black;
font-weight:500;
}

td{
	color:gray;
	font-weight:500;
	text-align:start;
}

/* กำหนดสีพื้นหลังแถวเป็นสีอ่อน */
.table tr {
    background-color: #f2f2f2;
}

/* กำหนดสีพื้นหลังแถวเลขคู่เป็นสีขาว */
.table tr:nth-child(even) {
    background-color: #ffffff;
}

/* กำหนดสีขอบของเซลล์ตาราง */
.table th, .table td {
    border: 1px solid #dddddd;
    padding: 8px;
}

/* กำหนดสีพื้นหลังปุ่ม */


/* สีข้อความลิงก์ */
a {
    color: black;
   
}

a:hover {
    color: #333;
}

/* กำหนดความกว้างส่วนต่างๆในหน้าเว็บ */
.container {
    width: 80%; /* กำหนดความกว้างของ container */
    margin: auto; /* จัดตำแหน่ง container กลางหน้า */
}

/* กำหนดขนาดและตำแหน่งของหัวเรื่อง */
h2 {
    font-size: 24px;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}

.button {
    background-color: black;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 22px;
    font-weight:500;
    margin: 20px 2px;
    cursor: pointer;
    border-radius: 5px;
	
}


button:hover {
    background-color: gray;
}

</style>

 <link rel='stylesheet' href='index.css'>


           
           
           
           <script type="text/javascript">
        
           </script>
          

</head>
 <?php 
   $result = mysqli_query($connect , "SELECT * FROM `transactions` WHERE `email`='".$_SESSION['email']."' ORDER BY `T_No.` DESC LIMIT 1");
  while ($row = mysqli_fetch_assoc($result)): 
    $tno = $row["T_No."];
    $_SESSION['tno']= $tno ;
  ?>

<body style="background-color: F5F1F0;">
	 <h2 align="center"><b><img src="https://img.icons8.com/ios-filled/50/000000/summary-list.png"/> สรุปการจอง</b></h2>
           <br>


				<table class="table table-striped" id="font">

				<tr>
					<th>ไอดีการจอง</th>
					<td><?php echo $row['T_No.']; ?></td>
				</tr>
			
				<tr>
					<th>ชื่อ</th>
					<td><?php echo $_SESSION['name'] ?></td>
				</tr>

				<tr>
					<th>อีเมล์</th>
					<td><?php echo $_SESSION['email'] ?></td>
				</tr>

				

				<tr>
					<th>สถานีต้นทาง</th>
					<td><?php echo $_SESSION['source'] ?></td>
				</tr>

				<tr>
					<th>สถานีปลายทาง</th>
					<td><?php echo $_SESSION['dest'] ?></td>
				</tr>

				<tr>
					<th>จำนวนเงินที่ต้องชำระ</th>
					<td>&nbsp&nbsp<?php echo $_SESSION['final'] ?>บาท</td>
				</tr>

				
			</table>
	


<table align = "Center">
<tr>
<td>
<div><td><a  href="print.php?pid='<?php echo $_SESSION['tno']?>' " target="_blank" ><button class="button" >ตรวจสอบข้อมูลกการจอง<br> </span></h3></button></a></td></td>
</td>
</tr>
</body style="background-color: F5F1F0;">
</div>
 <?php endwhile; ?>


 </html>


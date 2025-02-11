<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:index.php");
}
include 'header.php';
?>
<style >
	
        body {
            font-family: "Noto Sans Thai", sans-serif;
            background-color: #F5F1F0;
        }
        
        .container {
            max-width: 800px;
            margin: 62px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #ccc;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 32px;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
        }
        
        h1 img {
            vertical-align: middle;
            margin: 0 10px;
        }
        
        .btn-custom {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 20px 30px;
            border-radius: 5px;
            font-size: 20px;
            transition: background-color 0.3s ease;

        }
        
        .btn-custom:hover {
            background-color: #555;
            color:#fff
        }
        
        .btn-custom img {
            margin-right: 10px;
        }
      
</style>

<html>
<head>

<div class="container">
        <h1><img src="https://img.icons8.com/cute-clipart/70/000000/bookmark.png" alt="Bookmark Icon" /> ข้อมูลการจองของผู้ใช้งาน <img src="https://img.icons8.com/nolan/74/ticket.png" alt="Ticket Icon" /></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="trainbookings.php" class="btn btn-custom btn-block"><i class="fas fa-train"></i><img src="https://img.icons8.com/dusk/44/000000/train-ticket.png"/> ข้อมูลการจองรถไฟ</a>
            </div>
            <div class="col-md-6">
                <a href="busbookings.php" class="btn btn-custom btn-block"><i class="fas fa-bus"></i><img src="https://img.icons8.com/officel/50/000000/bus-ticket.png"/> ข้อมูลการจองรถบัส</a>
            </div>
        </div>
    </div>
   
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
      

    <?php include 'footer.php'; ?>

</html>
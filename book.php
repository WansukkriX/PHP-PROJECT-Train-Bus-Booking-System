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
  @import url('https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans+Thai:wght@100..900&display=swap');

 *{
  
 }
 h1{
  font-family: "Noto Sans Thai", sans-serif;
 }

  body {
    font-family: "Noto Sans Thai", sans-serif;
    background-color: #f2f2f2;
  }

  .container {

 
    background-color: #fff;
    padding: 50px 10px;
    border-radius: 5px;
    border: 2px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h1 {
    text-align: center;
    color: black;
    
  }
  form{
   width: 600px;
   margin:auto;
   color:black;

  }

  .form-control{
   height:50px;
   font-size:20px;
   color:black;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    font-size:20px;
    display:flex;
    font-weight: bold;
    margin-bottom: 5px;
  }



  select,
  option,
  input[type="number"] {
    width: 100%;
    padding: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color:black;
    font-weight:400;
    

  }

  .button {
    background-color:rgb(240, 192, 2);
    color: white;
    padding: 15px 50px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    color:#fff;
    font-size:22px;
    margin-right:70px;
   font-weight:300;
  }

  .button:hover {
    background-color:  #2d2d30;
  }
</style>
  </head>

  <body >
  <h1><img src="https://img.icons8.com/bubbles/80/000000/train.png" alt="Train Icon" /> จองตั๋วรถไฟ &nbsp <img src="https://img.icons8.com/officel/56/000000/tracks-intersection.png" alt="Tracks Intersection Icon" /></h1>
  <div class="container">
    <form method="post" action="book_action.php" align="center">
      <section id="form" class="formborder">
        <div class="container2">
          <div class="form-row row justify-content-around" name="source">
            <div class="form-group col-md-5" name="source">
              <label for="source">สถานีต้นทาง :</label>
              <select id="source" class="form-control" name="source">
                <option>ชุมทางหาดใหญ่</option>
              </select>
            </div>
            <div class="form-group col-md-5" name="dest">
              <label for="dest"> สถานีปลายทาง :</label>
              <select id="dest" class="form-control" name="dest">
                <option>คลองแงะ</option>
                <option>ชุมทางเขาชุมทอง</option>
                <option>บ้านทุ่งหล่อ</option>
                <option>นครศรีธรรมราช</option>
                <option>ชุมทางทุ่งสง</option>
                <option>ตรัง</option>
                <option>ชุมทางบ้านทุ่งโพธิ์</option>
                <option>คีรีรัฐนิคม</option>
                <option>บ้านดอนเรียบ</option>
                <option>สุไหงโกลก</option>
                <option>ตันหยงมัส</option>
                <option>ไม้แก่น</option>
                <option>ยะลา</option>
                <option>นาประดู่</option>
                <option>โคกโพธิ์</option>
                <option>เทพา</option>
                <option>พัทลุง</option>
                <option>ชุมพร</option>
              </select>
            </div>
          </div>
          <div class="form-row row justify-content-around">
            <div class="form-group col-md-5" name="class">
              <label for="class"> ระดับชั้น :</label>
              <select id="class" class="form-control" name="class">
                <option>First</option>
                <option>Second</option>
              </select>
            </div>
            <div class="form-group input col-md-5">
              <label for="number">จำนวนผู้โดยสาร:</label>
              <input type="number" name="number" id="number" required min="1" max="5" />
            </div>
          </div>
          <div class="form-row row justify-content-around">
          
          </div>
          <div>
            <button type="submit" class="button" name="login_submit"> ดำเนินการ </button>
          </div>
        </div>
      </section>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php include 'footer.php'; ?>
</body>
</html>